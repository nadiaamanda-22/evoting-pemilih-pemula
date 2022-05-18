<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formlaporan extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_cSatu');
   }

   public function cetakCSatu()
   {
      //get data dari api
      // $api = $this->curl->simple_get($this->api);
      // $decode = json_decode($api, true);
      // $role = $decode['data'];

      $pdf = new PDF();
      $pdf->SetAutoPageBreak(true, 30);

      // membuat halaman baru
      $pdf->AddPage('');


      // header
      $pdf->Image('assets/gambar/logokpu.png', 17, 7, 21, 25);

      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(80);
      $pdf->Cell(40, 5, 'SERTIFIKAT HASIL PENGHITUNGAN SUARA', 0, 1, 'C');
      $pdf->Cell(200, 7, 'PASANGAN CALON KETUA DAN WAKIL KETUA BEM', 0, 1, 'C');
      $pdf->cell(200, 5, 'PEMILIHAN UMUM UNIVERSITAS IBN KHALDUN BOGOR', 0, 1, 'C');
      $pdf->cell(200, 7, 'TAHUN 2022', 0, 1, 'C');
      // end header


      // //deskripsi awal
      $pdf->Ln(5);
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(10, 23, 'Nama Instansi', 0, 0, 'L');
      $pdf->Cell(35);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'Universitas Ibn Khaldun Bogor', 0, 0, 'L');


      $pdf->Ln(7);
      $pdf->Cell(10, 23, 'Alamat', 0, 0, 'L');
      $pdf->Cell(35);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'Jln KH Sholeh Iskandar Km II', 0, 0, 'L');

      $pdf->Ln(7);
      $pdf->Cell(10, 23, 'Jenis Pemilihan', 0, 0, 'L');
      $pdf->Cell(35);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'Ketua dan Wakil Ketua Badan Eksekutif Mahasiswa (BEM)', 0, 0, 'L');


      //konten
      //tabel bagian 1
      $pdf->Ln(13);
      $pdf->SetLeftMargin(7);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10, 23, 'I. DATA PEMILIH DAN PENGGUNA HAK PILIH', 0, 0, 'L');

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(90, 10, 'URAIAN', 1, 0, 'C');
      $pdf->Cell(35, 10, 'LAKI-LAKI (L)', 1, 0, 'C');
      $pdf->Cell(35, 10, 'PEREMPUAN (P)', 1, 0, 'C');
      $pdf->Cell(35, 10, 'JUMLAH (L+P)', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(90, 10, '(1)', 1, 0, 'C');
      $pdf->Cell(35, 10, '(2)', 1, 0, 'C');
      $pdf->Cell(35, 10, '(3)', 1, 0, 'C');
      $pdf->Cell(35, 10, '(4)', 1, 0, 'C');

      //bagian 1 A
      $pdf->Ln();
      $pdf->Cell(10, 50, 'A', 1, 0, 'C');
      $pdf->Cell(185, 10, 'DATA PEMILIH', 1, 0, 'L');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '1. Jumlah Pemilih dalam DPT', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '2. Jumlah Pemilih dalam DPTb', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '3. Jumlah Pemilih dalam DPK', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '4. Jumlah Pemilih (A.1 + A.2 + A.3)', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');

      //bagian 2 B
      $pdf->Ln();
      $pdf->Cell(10, 50, 'B', 1, 0, 'C');
      $pdf->Cell(185, 10, 'PENGGUNA HAK PILIH', 1, 0, 'L');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '1. Jumlah Pengguna hak pilih dalam DPT', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '2. Jumlah Pengguna hak pilih dalam DPTb', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '3. Jumlah Pengguna hak pilih dalam DPK', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10);
      $pdf->Cell(80, 10, '4. Jumlah Pengguna Hak Pilih (B.1 + B.2 + B.3)', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');
      $pdf->Cell(35, 10, '', 1, 0, 'L');


      //bagian 2
      $pdf->Ln(7);
      $pdf->SetLeftMargin(7);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10, 23, 'II. DATA PEMILIH DISABILITIAS', 0, 0, 'L');

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(110, 10, 'URAIAN', 1, 0, 'C');
      $pdf->Cell(28, 10, 'LAKI-LAKI (L)', 1, 0, 'C');
      $pdf->Cell(28, 10, 'PEREMPUAN (P)', 1, 0, 'C');
      $pdf->Cell(28, 10, 'JUMLAH (L+P)', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(110, 10, '(1)', 1, 0, 'C');
      $pdf->Cell(28, 10, '(2)', 1, 0, 'C');
      $pdf->Cell(28, 10, '(3)', 1, 0, 'C');
      $pdf->Cell(28, 10, '(4)', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(110, 10, '1. Jumlah seluruh Pemilih disabilitas terdaftar dalam DPT, DPTb dan DPK', 1, 0, 'L');
      $pdf->Cell(28, 10, '', 1, 0, 'L');
      $pdf->Cell(28, 10, '', 1, 0, 'L');
      $pdf->Cell(28, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(110, 10, '2. Jumlah seluruh Pemilih disabilitas yang menggunakan hak pilih', 1, 0, 'L');
      $pdf->Cell(28, 10, '', 1, 0, 'L');
      $pdf->Cell(28, 10, '', 1, 0, 'L');
      $pdf->Cell(28, 10, '', 1, 0, 'L');


      //bagian 3
      $pdf->Ln(7);
      $pdf->SetLeftMargin(7);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10, 23, 'III. DATA PENGGUNA SURAT SUARA', 0, 0, 'L');

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(145, 10, 'URAIAN', 1, 0, 'C');
      $pdf->Cell(50, 10, 'JUMLAH', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(145, 10, '(1)', 1, 0, 'C');
      $pdf->Cell(50, 10, '(2)', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(145, 10, '1. Jumlah surat suara yang diterima, termasuk surat suara cadangan 2% dari DPT (2+3+4)', 1, 0, 'L');
      $pdf->Cell(50, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(145, 10, '2. Jumlah surat suara yang dikembalikan oleh pemilih karena rusak/keliru coblos', 1, 0, 'L');
      $pdf->Cell(50, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(145, 10, '3. Jumlah surat suara yang tidak digunakan/tidak terpakai, termasuk sisa surat suara cadangan', 1, 0, 'L');
      $pdf->Cell(50, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(145, 10, '4. Jumlah surat suara yang digunakan', 1, 0, 'L');
      $pdf->Cell(50, 10, '', 1, 0, 'L');

      //BAGIAN TTD
      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(195, 10, 'NAMA DAN TANDA TANGAN KELOMPOK PENYELENGGARA PEMUNGUTAN SUARA', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(28, 10, '1. KETUA', 1, 0, 'C');
      $pdf->Cell(27, 10, '2. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '3. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '4. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '5. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '6. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '7. ANGGOTA', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(27, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(195, 10, 'NAMA DAN TANDA TANGAN SAKSI PASANGAN CALON KETUA DAN WAKIL KETUA BEM', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(65, 10, '01. KETUA-WAKIL', 1, 0, 'C');
      $pdf->Cell(65, 10, '02. KETUA-WAKIL', 1, 0, 'C');
      $pdf->Cell(65, 10, '03. KETUA-WAKIL', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(65, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(65, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(65, 30, 'Nama Lengkap', 1, 0, 'C');


      //Bagian 4
      $pdf->Ln(27);
      $pdf->SetLeftMargin(7);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10, 23, 'IV. DATA PEROLEHAN SUARA PASANGAN CALON KETUA DAN WAKIL KETUA BEM', 0, 0, 'L');

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(135, 10, 'NOMOR DAN NAMA PASANGAN CALON', 1, 0, 'C');
      $pdf->Cell(60, 10, 'SUARA SAH', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(135, 10, '(1)', 1, 0, 'C');
      $pdf->Cell(60, 10, '(2)', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(17, 20, '01', 1, 0, 'C');
      $pdf->Cell(118, 10, 'KETUA-WAKIL', 1, 0, 'C');
      $pdf->Cell(60, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(17);
      $pdf->SetFont('Arial', '', 7);
      $pdf->Cell(178, 10, '(ditulis dengan huruf)', 1, 0, 'R');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(17, 20, '02', 1, 0, 'C');
      $pdf->Cell(118, 10, 'KETUA-WAKIL', 1, 0, 'C');
      $pdf->Cell(60, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(17);
      $pdf->SetFont('Arial', '', 7);
      $pdf->Cell(178, 10, '(ditulis dengan huruf)', 1, 0, 'R');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(17, 20, '03', 1, 0, 'C');
      $pdf->Cell(118, 10, 'KETUA-WAKIL', 1, 0, 'C');
      $pdf->Cell(60, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(17);
      $pdf->SetFont('Arial', '', 7);
      $pdf->Cell(178, 10, '(ditulis dengan huruf)', 1, 0, 'R');


      //bagian 5
      $pdf->Ln(8);
      $pdf->SetLeftMargin(7);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10, 23, 'V. DATA SUARA SAH DAN TIDAK SAH', 0, 0, 'L');

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(153, 10, 'URAIAN', 1, 0, 'C');
      $pdf->Cell(41, 10, 'JUMLAH', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(153, 10, '(1)', 1, 0, 'C');
      $pdf->Cell(41, 10, '(2)', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(108, 10, 'A. JUMLAH SELURUH SUARA SAH (IV.01 IV.02)', 1, 0, 'L');
      $pdf->Cell(45, 10, '', 1, 0, 0, 'C');
      $pdf->Cell(41, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 7);
      $pdf->Cell(194, 10, '(ditulis dengan huruf)', 1, 0, 'R');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(108, 10, 'B. JUMLAH SUARA TIDAK SAH', 1, 0, 'L');
      $pdf->Cell(45, 10, '', 1, 0, 0, 'C');
      $pdf->Cell(41, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 7);
      $pdf->Cell(194, 10, '(ditulis dengan huruf)', 1, 0, 'R');

      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(108, 10, 'C. JUMLAH SELURUH SUARA SAH DAN SUARA TIDAK SAH (A + B)', 1, 0, 'L');
      $pdf->Cell(45, 10, '', 1, 0, 0, 'C');
      $pdf->Cell(41, 10, '', 1, 0, 'L');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 7);
      $pdf->Cell(194, 10, '(ditulis dengan huruf)', 1, 0, 'R');

      //penetapan
      $pdf->Ln();
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(10, 23, 'DITETAPKAN DI', 0, 0, 'L');
      $pdf->Cell(20);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'TEMPAT', 0, 0, 'L');

      $pdf->Cell(25);
      $pdf->Cell(10, 23, 'TANGGAL', 0, 0, 'L');
      $pdf->Cell(9);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'tanggal', 0, 0, 'L');

      $pdf->Cell(15);
      $pdf->Cell(10, 23, 'BULAN', 0, 0, 'L');
      $pdf->Cell(7);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'bulan', 0, 0, 'L');

      $pdf->Cell(15);
      $pdf->Cell(10, 23, 'TAHUN', 0, 0, 'L');
      $pdf->Cell(7);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'tahun', 0, 0, 'L');


      //pengesahan
      $pdf->Ln(20);
      $pdf->Cell(195, 23, 'NAMA DAN TANDA TANGAN KELOMPOK PENYELENGGARA PEMUNGUTAN SUARA', 0, 0, 'C');

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(28, 10, '1. KETUA', 1, 0, 'C');
      $pdf->Cell(27, 10, '2. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '3. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '4. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '5. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '6. ANGGOTA', 1, 0, 'C');
      $pdf->Cell(28, 10, '7. ANGGOTA', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(27, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(28, 30, 'Nama Lengkap', 1, 0, 'C');

      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Ln(50);
      $pdf->Cell(195, 23, 'NAMA DAN TANDA TANGAN SAKSI PASANGAN CALON KETUA DAN WAKIL KETUA BEM', 0, 0, 'C');
      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->Cell(65, 10, '01. KETUA-WAKIL', 1, 0, 'C');
      $pdf->Cell(65, 10, '02. KETUA-WAKIL', 1, 0, 'C');
      $pdf->Cell(65, 10, '03. KETUA-WAKIL', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 9);
      $pdf->Cell(65, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(65, 30, 'Nama Lengkap', 1, 0, 'C');
      $pdf->Cell(65, 30, 'Nama Lengkap', 1, 0, 'C');

      //END
      $pdf->Output();
   }

   public function cLima()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_cLima');
   }

   public function cetakCLima()
   {
      //get data dari api
      // $api = $this->curl->simple_get($this->api);
      // $decode = json_decode($api, true);
      // $role = $decode['data'];

      $pdf = new PDF();
      $pdf->SetAutoPageBreak(true, 20);

      // membuat halaman baru
      $pdf->AddPage('');


      // header
      $pdf->Image('assets/gambar/logokpu.png', 17, 10, 24, 28);

      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(80);
      $pdf->Cell(40, 5, 'TANDA TERIMA', 0, 1, 'C');
      $pdf->Cell(200, 7, 'PENYERAHAN SALINAN BERITA ACARA PEMUNGUTAN', 0, 1, 'C');
      $pdf->cell(200, 5, 'DAN PENGHITUNGAN SUARA SERTA SERTIFIKAT HASIL', 0, 1, 'C');
      $pdf->cell(200, 6, 'PENGHITUNGAN SUARA', 0, 1, 'C');
      $pdf->cell(200, 5, 'PEMILIHAN UMUM UNIVERSITAS IBN KHALDUN BOGOR', 0, 1, 'C');
      $pdf->cell(200, 7, 'TAHUN 2022', 0, 1, 'C');
      // end header


      // //deskripsi awal
      $pdf->Ln(3);
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(10, 23, 'Nama Instansi', 0, 0, 'L');
      $pdf->Cell(35);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'Universitas Ibn Khaldun Bogor', 0, 0, 'L');


      $pdf->Ln(7);
      $pdf->Cell(10, 23, 'Alamat', 0, 0, 'L');
      $pdf->Cell(35);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'Jln KH Sholeh Iskandar Km II', 0, 0, 'L');

      $pdf->Ln(7);
      $pdf->Cell(10, 23, 'Jenis Pemilihan', 0, 0, 'L');
      $pdf->Cell(35);
      $pdf->Cell(10, 23, ': ', 0, 0, 'L');
      $pdf->Cell(-7);
      $pdf->Cell(10, 23, 'Ketua dan Wakil Ketua Badan Eksekutif Mahasiswa (BEM)', 0, 0, 'L');


      //konten
      $pdf->Ln(13);
      $pdf->Cell(10, 23, 'Penerima Salinan Berita Acara Dan Sertifikat', 0, 0, 'L');

      $pdf->Ln(8);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 23, 'A. SAKSI PASANGAN KETUA DAN WAKIL KETUA BEM', 0, 0, 'L');

      //table

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(60, 10, '01. Ketua-Wakil', 1, 0, 'C');
      $pdf->Cell(60, 10, '02. Ketua-Wakil', 1, 0, 'C');
      $pdf->Cell(60, 10, '03. Ketua-Wakil', 1, 0, 'C');


      $pdf->Ln();
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(60, 30, 'Nama Saksi', 1, 0, 'C');
      $pdf->Cell(60, 30, 'Nama Saksi', 1, 0, 'C');
      $pdf->Cell(60, 30, 'Nama Saksi', 1, 0, 'C');


      // bagian B
      $pdf->Ln(30);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 23, 'B. PENGAWAS PANITIA PELAKSANA', 0, 0, 'L');

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(180, 10, 'PENGAWAS PANITIA PELAKSANA', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(180, 33, 'Nama Panitia', 1, 0, 'C');


      //TTD
      $pdf->Ln(33);
      $pdf->SetFont('Arial', '', 10);
      $pdf->SetX(180);
      $pdf->Cell(10, 23, 'Tempat, Tanggal-Bulan-Tahun', 0, 1, 'R');

      $pdf->SetX(172);
      $pdf->Cell(10, -12, 'Yang Menyerahkan,', 0, 1, 'R');

      $pdf->SetX(190);
      $pdf->Cell(10, 23, 'Panitia Penyelenggara Pemungutan Suara', 0, 1, 'R');

      $pdf->SetX(160);
      $pdf->Cell(10, -12, 'Ketua,', 0, 1, 'R');


      // Nama Ketua
      $pdf->Ln(8);
      // $pdf->Ln(3);
      $pdf->SetX(173);
      $pdf->Cell(10, 40, 'Nama Ketua Pelaksana', 0, 0, 'R');

      $pdf->Output();
   }
}
