<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformasiPublikCsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Setiap Saat
            ['kategori' => 'setiap_saat', 'judul' => 'Peta Jalan Reformasi Birokrasi LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1U_x9G2SDfH9LLUZkz35qXBrHSgbLbxBl', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Peta Proses Bisnis LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/12xlDeF28HHeSZLDt7ZIpLLC6PjZkjZ2_', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Peta Jabatan LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1L2K4nhQdqeYMosK6OtzNg2dH5YzT57cW', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Data Perbendaharaan di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/14Xqa1gqxHAmvykN-1drrS9W5U1G42HBF', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Peraturan/Keputusan/Kebijakan/Produk Hukum Lainnya yang ditetapkan oleh LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1riAeHlm-Pwd31eKvU3zyM979QxDflF56', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Informasi Fasilitasi Penanganan Permasalahan Perguruan Tinggi Swasta di lingkup LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/10MYmy5N7sNyzewgf0rSjGWso0cXRrJZy', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Layanan Pengadaan Barang atau Jasa di LLDikti', 'link_tautan' => 'https://drive.google.com/drive/folders/16ab1v1kgsSLJDppuB2sKoTQTlc5DGDee', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Layanan Arsip Dinamis di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1jG55CwKD7OT7PBS2yLEFUrzxPsU65wN0', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Statistik Kepegawaian di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1NOGZ9iN35dauvA2u9lpEgb8QGEqpYnvh', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Imbauan Kedisiplinan Pegawai Kantor LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1oeN2GsZztyjdDr25Nko7eY62mmZOKeZF', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Data Akreditasi Perguruan Tinggi Swasta di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/15SKXcmJQacoGjZfqa33-CrfpQyVWShzm', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Data Akreditasi Program Studi Perguruan Tinggi Swasta di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1-PIVqo6hOiA6H9uSV2gO2i4Nkt1RRNPj', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Data Dosen Perguruan Tinggi Swasta di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1AMjad4zibAbV1Gaa9-cPRXuX2HGg2t2u', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Jumlah Mahasiswa Aktif Perguruan Tinggi Swasta (PTS) di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1WSHO_laMHjRw3V8HVSbFOoO-nxzWKl_5', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Rekap Data Pelaporan Laporan Kinerja Dosen/Beban Kerja Dosen', 'link_tautan' => 'https://drive.google.com/drive/folders/1guA_A4GoPHg1LUT8DpARHCSevMzTsviH', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'NIRA (Nomor Induk Registrasi Asesor)', 'link_tautan' => 'https://drive.google.com/drive/folders/1xfGmD78Wu1jo20fsdplyx3cbgO_0tTZp', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Jumlah Rekomendasi Beasiswa Dosen yang dikeluarkan oleh LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1IuSSDENArDCn_EZ2QiwzUIDeZOjpq9RK', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Daftar Penerima Sertifikasi Dosen di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1M1B-bJ4LMcSn5xw-dvhB5YOYw6O0cv9V', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Penerima Kartu Indonesia Pintar (KIP) Kuliah di Perguruan Tinggi Swasta di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1qsX-dN_ZTnICrzhEKjylF6Gzhdm9dSR6', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Hibah Program Kreativitas Mahasiswa di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1oP6lgXK5Et4EzjdCUOXf1TVGHpfOqv97', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Jumlah Perjanjian Kerja Sama/Nota Kesepahaman di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1zwWXDXsjPJ3d2os6Uhz48ISGE_vsWgYj', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Pencegahan dan Penanganan Kekerasan Perguruan Tinggi di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/15-K86cFS1jEIkY-PZQpHKv6QdskH6hHJ', 'jenis_tautan' => 'drive'],
            ['kategori' => 'setiap_saat', 'judul' => 'Informasi Satgas Pencegahan dan Penanganan Kekerasan Perguruan Tinggi di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1bsese9bbXUR4RpOGymJjsCPH3xtPGK0h', 'jenis_tautan' => 'drive'],

            // Berkala
            ['kategori' => 'berkala', 'judul' => 'Profil Pimpinan/Pejabat LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1sOJCLkvADNvHMaaABIh38yn-pO9rStnn', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Organisasi dan Tata Kerja LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1OtjKR-c-rFdsxjlyYXuhjbo1sDE-8jCt', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Struktur Organisasi LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1cShSaySZPYtKkx6XyIS811VPvxBEBUVP', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Tugas dan Fungsi LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1yvfNiXGh0VxRryXm9ho9_pQbE5xarEdS', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Visi dan Misi LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1hCBVrImaMwUmV9XwHNLNTLSjlzwWgH0g', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Program Kerja LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/u/1/folders/1dtOSw-seXXzIJpwVpiuMSalm67p_eLLS', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Rencana Strategis LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1oTVGWntsx_cqDMI5kPfj8vuQkmh9apsp', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'RKAKL dan DIPA LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1__heFL84jdmPughoaKuqwpfqY179mp3u', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Perjanjian Kinerja LLDikti Wilayah IV dengan Kementerian', 'link_tautan' => 'https://drive.google.com/drive/folders/1A4lN4dYGMk1dTy4pk-rNX9a0_8fVaRDS', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Ringkasan Laporan Keuangan LLDikti Wilayah IV (Audited)', 'link_tautan' => 'https://drive.google.com/drive/folders/1xhkHrJlDPCQLYSKazFOB-eqT2j0S7YPp', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Laporan Akuntabilitas Kinerja LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1pkHTZGyfgpq_NkCV3r0ZjiPSjiPIPA-o', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Prosedur Peringatan Dini dan Prosedur Evakuasi Keadaan Darurat di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1Cd7wB1J1eHV8Ad486ruNfYfWjrPlz4bX', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Data Inventaris Barang Milik Negara di LLDikti Wilayah IV (Audited)', 'link_tautan' => 'https://drive.google.com/drive/folders/1Dzn5fqI9IcQtNt-hB2vNnAn0lAN6Q8n5', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Tata Cara Permintaan Informasi Publik di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1JCoRv4eiPHFjpiOikjgS_3CAbdiCSucX', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Tata Cara Keberatan atas Permintaan Informasi Publik di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1IyicXAVgZohXbrbPC6fTsuYU47Guo1ih', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Tata Cara Pengaduan Penyalahgunaan Wewenang atau Pelanggaran di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1MNyriEBPB76hZJYGLbaSIgaC3J6Be56D', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Daftar Informasi Publik di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1V4-A7L0Xabtp59AUJtv7tFyB_37bpKt2', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Laporan Akses Informasi Publik di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1B2FoZrqsCYjn_osK1Enc64ewKFGLvZTS', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Hasil Survei Kepuasan Masyarakat di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/19LbWN8n7WqrF2TxCH0CN4NuHK0HbML6h', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Data Perguruan Tinggi dan/atau Program Studi di wilayah LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1wSdmv7Cb5KcAApdgLlO8sVJoauqrng6d', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Kalender / Agenda Kegiatan di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1bTC0SRZ3oRLazqi72omYPWZY4iUAC7py', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Daftar Penerima Bantuan Program Penguatan Perguruan Tinggi Swasta', 'link_tautan' => 'https://drive.google.com/drive/folders/1rG_CRVAu4mvDzyH-7FJ07dVo2lvIWMtl', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Daftar Perguruan Tinggi Penerima Hibah Penelitian dan Pengabdian kepada Masyarakat', 'link_tautan' => 'https://drive.google.com/drive/folders/1b6dJac97OTOqJJMvPu2R-cHdm70KeRO2', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'Informasi Realisasi Anggaran LLDikti Wilayah IV di tahun berjalan', 'link_tautan' => 'https://drive.google.com/drive/folders/13IifVuLwUXcdoiKC5BZNrYRab5q5XdWl', 'jenis_tautan' => 'drive'],
            ['kategori' => 'berkala', 'judul' => 'LHKPN di LLDikti Wilayah IV yang telah diumumkan', 'link_tautan' => 'https://drive.google.com/drive/folders/1Ng2aA4P12HB796XjdmJDY4iGBc9oMfa3', 'jenis_tautan' => 'drive'],

            // Serta Merta
            ['kategori' => 'serta_merta', 'judul' => 'Penerimaan Calon Aparatur Sipil Negara di LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1D_jsxAUVHRN--5geE1QxM34EMTe6F4Tt', 'jenis_tautan' => 'drive'],
            ['kategori' => 'serta_merta', 'judul' => 'Surat Pemberitahuan Aturan Pakaian Kerja di Lingkungan LLDikti Wilayah IV', 'link_tautan' => 'https://drive.google.com/drive/folders/1awZxyamgEMHm5rWorYwtoCF1wCIhrMFr', 'jenis_tautan' => 'drive'],
        ];

        // Kosongkan tabel dulu agar tidak duplikat jika dijalankan berkali-kali
        DB::table('informasi_publiks')->truncate();

        foreach ($data as $item) {
            DB::table('informasi_publiks')->insert([
                'judul' => $item['judul'],
                'kategori' => $item['kategori'],
                'link_tautan' => $item['link_tautan'],
                'jenis_tautan' => $item['jenis_tautan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
