<?php

namespace Database\Seeders;

use App\Settings\ProfilSettings;
use Illuminate\Database\Seeder;

class ProfilPpidSeeder extends Seeder
{
    public function run(): void
    {
        $settings = app(ProfilSettings::class);

        $settings->tentang_ppid = "Keterbukaan informasi publik merupakan bagian penting dari upaya mewujudkan tata kelola pemerintahan yang baik, transparan, dan akuntabel. Sebagai bentuk pelaksanaan amanat Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Lembaga Layanan Pendidikan Tinggi (LLDikti) Wilayah IV menyelenggarakan pelayanan informasi publik melalui Pejabat Pengelola Informasi dan Dokumentasi (PPID).\n\nPPID LLDikti Wilayah IV ditetapkan melalui Keputusan Kepala LLDIKTI Wilayah IV dan bertugas mengelola serta memberikan layanan informasi publik kepada masyarakat, khususnya pemangku kepentingan di bidang pendidikan tinggi.\n\nSesuai dengan ketentuan Peraturan Menteri Pendidikan dan Kebudayaan Nomor 41 Tahun 2020 serta kebijakan terbaru terkait pengelolaan dan pelayanan informasi publik, PPID LLDikti Wilayah IV merupakan bagian dari sistem PPID Kementerian Pendidikan Tinggi, Sains, dan Teknologi (Kemdiktisaintek). Dalam kerangka tersebut, LLDIKTI Wilayah IV berperan sebagai perpanjangan tangan kementerian dalam menyosialisasikan kebijakan, mendukung keterbukaan proses pengambilan keputusan, dan memastikan hak masyarakat atas informasi publik terpenuhi.\n\nMelalui PPID, LLDIKTI Wilayah IV berkomitmen memberikan layanan informasi publik yang mudah diakses, responsif, dan profesional, dengan menjunjung tinggi prinsip akuntabilitas, transparansi, kepastian hukum, serta perlindungan data pribadi.\n\nKami mengundang masyarakat untuk menelusuri berbagai informasi yang tersedia di website ini—mulai dari kebijakan pendidikan tinggi, layanan kelembagaan, hingga informasi publik lainnya—sebagai bagian dari upaya bersama membangun ekosistem pendidikan tinggi yang terbuka dan berintegritas.\n\nSalam Keterbukaan Informasi.";

        $settings->tugas_fungsi = [
            ['teks' => 'menyediakan, menyimpan, mendokumentasikan, dan mengamankan Informasi;'],
            ['teks' => 'menyediakan sumber daya untuk pelayanan dan pendokumentasian Informasi Publik;'],
            ['teks' => 'menganggarkan pembiayaan bagi pelayanan dan pendokumentasian Informasi Publik;'],
            ['teks' => 'membuat prosedur pelayanan dan pendokumentasian Informasi Publik;'],
            ['teks' => 'melayani permintaan Informasi Publik secara cepat, tepat, dan sederhana serta sesuai dengan aturan yang berlaku;'],
            ['teks' => 'membuat pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang atas Informasi Publik;'],
            ['teks' => 'mengoordinasikan dan mengonsolidasikan pengumpulan Dokumen Informasi Publik dari tim kerja PPID LLDikti Wilayah IV;'],
            ['teks' => 'mengklasifikasikan Informasi publik dan/atau pengubahannya;'],
            ['teks' => 'melakukan evaluasi terhadap pelayanan dan pendokumentasian Informasi Publik di LLDikti Wilayah IV; dan'],
            ['teks' => 'menyusun laporan pelayanan dan pendokumentasian Informasi Publik.'],
        ];

        $settings->wewenang = [
            ['teks' => 'menugaskan tim kerja PPID LLDikti Wilayah IV untuk membuat, mengelola, memelihara, dan/atau memutakhirkan Daftar Informasi Publik;'],
            ['teks' => 'menetapkan Daftar Informasi Publik;'],
            ['teks' => 'mengusulkan Informasi yang dikecualikan kepada PPID Utama Kementerian;'],
            ['teks' => 'menetapkan ketersediaan sumber daya untuk pelayanan dan pendokumentasian Informasi Publik;'],
            ['teks' => 'memastikan tersedianya anggaran untuk pelaksanaan pelayanan dan pendokumentasian Informasi Publik;'],
            ['teks' => 'menetapkan prosedur pelayanan dan pendokumentasian Informasi Publik;'],
            ['teks' => 'menerima atau menolak permintaan Informasi Publik dengan menyampaikan pertimbangan secara tertulis apabila Informasi Publik yang dimohon termasuk Informasi yang dikecualikan;'],
            ['teks' => 'melaksanakan rapat koordinasi dan rapat kerja secara berkala dan/atau sesuai dengan kebutuhan dalam melaksanakan pelayanan dan pendokumentasian Informasi Publik;'],
            ['teks' => 'menetapkan strategi dan metode pengawasan, evaluasi, dan monitoring atas pelaksanaan kebijakan teknis pelayanan dan pendokumentasian Informasi publik yang dilakukan oleh tim kerja PPID LLDikti Wilayah IV; dan'],
            ['teks' => 'menetapkan laporan pelaksanaan pelayanan dan pendokumentasian Informasi Publik.'],
        ];

        $settings->tim_pertimbangan = [
            ['teks' => 'menangani keberatan awal sebelum sengketa berlanjut ke Komisi Informasi;'],
            ['teks' => 'menyusun pertimbangan tertulis mengenai dampak pegecualian informasi dalam Pengujian Konsekuensi;'],
            ['teks' => 'menyusun Daftar Informasi Publik; dan'],
            ['teks' => 'mengusulkan informasi yang dikecualikan.'],
        ];

        $settings->save();
    }
}
