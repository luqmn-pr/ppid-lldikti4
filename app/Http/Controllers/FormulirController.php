<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class FormulirController extends Controller
{
    const CHECKED   = '☑';
    const UNCHECKED = '☐';

    public function showPermohonan()
    {
        return view('pages.formulir-permohonan');
    }

    public function downloadPermohonan(Request $request)
    {
        $validated = $request->validate([
            'nama'                     => 'required|string|max:255',
            'alamat'                   => 'nullable|string|max:500',
            'nomor_wa_email'           => 'nullable|string|max:255',
            'pekerjaan_profesi'        => 'nullable|string|max:255',
            'rincian_informasi'        => 'nullable|string|max:1000',
            'tujuan_penggunaan'        => 'nullable|string|max:500',
            'cara_memperoleh'          => 'required|string',
            'cara_mendapatkan_salinan' => 'nullable|string',
        ]);

        $templatePath = storage_path('app/templates/formulir_permohonan_template.docx');

        if (!file_exists($templatePath)) {
            $this->prepareTemplate($templatePath);
        }

        $template = new TemplateProcessor($templatePath);

        $template->setValue('nama',              $validated['nama']);
        $template->setValue('alamat',            $validated['alamat'] ?? '-');
        $template->setValue('nomor_wa_email',    $validated['nomor_wa_email'] ?? '-');
        $template->setValue('pekerjaan_profesi', $validated['pekerjaan_profesi'] ?? '-');
        $template->setValue('rincian_informasi', $validated['rincian_informasi'] ?? '-');
        $template->setValue('tujuan_penggunaan', $validated['tujuan_penggunaan'] ?? '-');
        $template->setValue('tanggal',           now()->locale('id')->translatedFormat('d F Y'));

        // Checkbox Cara Memperoleh
        $memperoleh = $validated['cara_memperoleh'];
        $template->setValue('cb_melihat',
            $memperoleh === 'Melihat/membaca/mendengarkan/mencatat'
                ? self::CHECKED : self::UNCHECKED);
        $template->setValue('cb_salinan_hardcopy',
            $memperoleh === 'Mendapatkan salinan informasi (hardcopy/softcopy)'
                ? self::CHECKED : self::UNCHECKED);

        // Checkbox Cara Mendapatkan Salinan
        $salinan = $validated['cara_mendapatkan_salinan'] ?? '';
        $template->setValue('cb_mengambil', $salinan === 'Mengambil Langsung' ? self::CHECKED : self::UNCHECKED);
        $template->setValue('cb_pos',       $salinan === 'Pos'                ? self::CHECKED : self::UNCHECKED);
        $template->setValue('cb_posel',     $salinan === 'Posel'              ? self::CHECKED : self::UNCHECKED);

        $filename = 'Formulir_Permohonan_Informasi_' . now()->format('Ymd_His');

        $tmpDir = storage_path('app/tmp');
        if (!is_dir($tmpDir)) {
            mkdir($tmpDir, 0755, true);
        }

        $docxTmpPath = $tmpDir . '/' . $filename . '.docx';
        $template->saveAs($docxTmpPath);

        // ===== OUTPUT: DOCX =====
        return response()->download($docxTmpPath, $filename . '.docx', [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ])->deleteFileAfterSend(true);
    }

    private function prepareTemplate(string $outPath): void
    {
        $srcCandidates = [
            base_path('template/FORMULIR PERMOHONAN INFORMASI.docx'),
            storage_path('app/public/formulir/FORMULIR PERMOHONAN INFORMASI.docx'),
        ];

        $srcPath = null;
        foreach ($srcCandidates as $c) {
            if (file_exists($c)) { $srcPath = $c; break; }
        }

        if (!$srcPath) {
            abort(500, 'File template DOCX tidak ditemukan.');
        }

        if (!is_dir(dirname($outPath))) {
            mkdir(dirname($outPath), 0755, true);
        }

        copy($srcPath, $outPath);

        $zip = new \ZipArchive();
        $zip->open($outPath, \ZipArchive::CREATE);
        $xml = $zip->getFromName('word/document.xml');

        $xml = str_replace(', ………………………………', ', ${tanggal}', $xml);
        $xml = str_replace('(……………………………….)' , '( ${nama} )', $xml);

        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('w', 'http://schemas.openxmlformats.org/wordprocessingml/2006/main');
        $wNs = 'http://schemas.openxmlformats.org/wordprocessingml/2006/main';

        $fieldMap = [
            'Nama'      => '${nama}',
            'Alamat'    => '${alamat}',
            'WA'        => '${nomor_wa_email}',
            'Pekerjaan' => '${pekerjaan_profesi}',
            'Rincian'   => '${rincian_informasi}',
            'Tujuan'    => '${tujuan_penggunaan}',
        ];

        foreach ($xpath->query('//w:tr') as $row) {
            $tcs = $xpath->query('w:tc', $row);
            if ($tcs->length < 3) continue;

            $labelText = '';
            foreach ($xpath->query('.//w:t', $tcs->item(0)) as $lt) {
                $labelText .= $lt->nodeValue;
            }

            foreach ($fieldMap as $keyword => $ph) {
                if (strpos($labelText, $keyword) !== false) {
                    $valueCell = $tcs->item(2);
                    $paras = $xpath->query('w:p', $valueCell);
                    if ($paras->length === 0) break;
                    $run = $dom->createElementNS($wNs, 'w:r');
                    $t   = $dom->createElementNS($wNs, 'w:t');
                    $t->nodeValue = $ph;
                    $t->setAttribute('xml:space', 'preserve');
                    $run->appendChild($t);
                    $paras->item(0)->appendChild($run);
                    break;
                }
            }

            if (strpos($labelText, 'Cara Memperoleh') !== false) {
                $valueCell = $tcs->item(2);
                foreach (iterator_to_array($xpath->query('w:p', $valueCell)) as $p) {
                    $valueCell->removeChild($p);
                }
                foreach ([
                    '${cb_melihat} Melihat/membaca/mendengarkan/mencatat',
                    '${cb_salinan_hardcopy} Mendapatkan salinan informasi (hardcopy/softcopy)',
                ] as $line) {
                    $valueCell->appendChild($this->makeParagraph($dom, $line, $wNs));
                }
            }

            if (strpos($labelText, 'Mendapatkan') !== false && strpos($labelText, 'Salinan') !== false) {
                $valueCell = $tcs->item(2);
                foreach (iterator_to_array($xpath->query('w:p', $valueCell)) as $p) {
                    $valueCell->removeChild($p);
                }
                foreach ([
                    '${cb_mengambil} Mengambil Langsung',
                    '${cb_pos} Pos',
                    '${cb_posel} Posel',
                ] as $line) {
                    $valueCell->appendChild($this->makeParagraph($dom, $line, $wNs));
                }
            }
        }

        // Hapus bagian Keterangan
        $ketKeywords = ['Keterangan', 'Disesuaikan', 'Pilih salah satu', 'Coret yang tidak'];
        foreach ($xpath->query('//w:p') as $para) {
            $paraText = '';
            foreach ($xpath->query('.//w:t', $para) as $t) {
                $paraText .= $t->nodeValue;
            }
            foreach ($ketKeywords as $kw) {
                if (strpos($paraText, $kw) !== false) {
                    $para->parentNode->removeChild($para);
                    break;
                }
            }
        }

        $zip->addFromString('word/document.xml', $dom->saveXML());
        $zip->close();
    }

    private function makeParagraph(\DOMDocument $dom, string $text, string $wNs): \DOMElement
    {
        $p   = $dom->createElementNS($wNs, 'w:p');
        $pPr = $dom->createElementNS($wNs, 'w:pPr');
        $sp  = $dom->createElementNS($wNs, 'w:spacing');
        $sp->setAttribute('w:after', '0');
        $sp->setAttribute('w:line', '240');
        $sp->setAttribute('w:lineRule', 'auto');
        $pPr->appendChild($sp);
        $p->appendChild($pPr);

        $r   = $dom->createElementNS($wNs, 'w:r');
        $rPr = $dom->createElementNS($wNs, 'w:rPr');
        $f   = $dom->createElementNS($wNs, 'w:rFonts');
        $f->setAttribute('w:ascii', 'Arial');
        $f->setAttribute('w:hAnsi', 'Arial');
        $f->setAttribute('w:cs', 'Arial');
        $rPr->appendChild($f);
        $r->appendChild($rPr);

        $t = $dom->createElementNS($wNs, 'w:t');
        $t->setAttribute('xml:space', 'preserve');
        $t->nodeValue = $text;
        $r->appendChild($t);
        $p->appendChild($r);
        return $p;
    }
}
