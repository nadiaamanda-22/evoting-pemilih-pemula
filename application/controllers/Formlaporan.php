<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formlaporan extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_beritaAcara');
   }

   public function formDua()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_beritaAcaraDua');
   }

   public function BeritaAcara()
   {
      //get data dari api
      // $api = $this->curl->simple_get($this->api);
      // $decode = json_decode($api, true);
      // $role = $decode['data'];

      $pdf = new PDF();
      $pdf->SetAutoPageBreak(true, 30);

      //FORM 1
      // membuat halaman baru
      $pdf->AddPage('');


      // header
      $pdf->Image('assets/gambar/logo/logokpu.png', 17, 10, 23, 25);

      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(80);
      $pdf->Cell(23, 5, 'BERITA ACARA', 0, 1, 'C');
      $pdf->Cell(184, 7, 'PEMUNGUTAN DAN PENGHITUNGAN SUARA', 0, 1, 'C');
      $pdf->cell(184, 5, 'PEMILIHAN UMUM KETUA DAN WAKIL KETUA BEM', 0, 1, 'C');
      $pdf->cell(184, 7, 'UNIVERSITAS IBN KHALDUN BOGOR', 0, 1, 'C');
      $pdf->cell(184, 7, 'PERIODE 2020-2023', 0, 1, 'C');

      $pdf->Image('assets/gambar/logo/logouika.png', 170, 10, 24, 25);
      // end header


      //deskripsi awal
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
      //tabel bagian A
      $pdf->Ln(13);
      $pdf->SetLeftMargin(7);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 23, 'A. PERSIAPAN PELAKSANAAN PEMILIHAN', 0, 0, 'L');
      $pdf->Ln(8);
      $pdf->SetFont('Arial', '', 10);
      $pdf->SetLeftMargin(10);
      $pdf->Cell(10, 23, '1. Mengumumkan persyaratan untuk menggunakan hak pilih secara online melalui file pdf.', 0, 0, 'L');
      $pdf->Ln(6);
      $pdf->Cell(10, 23, '2. Menjelaskan tata cara dan mekanisme pemberian suara secara online melalui file pdf.', 0, 0, 'L');
      $pdf->Ln(6);
      $pdf->Cell(10, 23, '3. Melakukan autentifikasi identitas pemilih yang akan menggunakan hak pilihnya.', 0, 0, 'L');


      //tabel bagian b
      $pdf->Ln(13);
      $pdf->SetLeftMargin(7);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 23, 'B. PROSES SETELAH PELAKSANAAN PEMILIHAN', 0, 0, 'L');
      $pdf->Ln(8);
      $pdf->SetFont('Arial', '', 10);
      $pdf->SetLeftMargin(10);
      $pdf->Cell(10, 23, '1. Mencetak berita acara yang terdapat pada sistem manajemen e-voting.', 0, 0, 'L');
      $pdf->Ln(6);
      $pdf->Cell(10, 23, '2. Menampilkan rekapitulasi akhir penghitungan suara.', 0, 0, 'L');
      $pdf->Ln(6);
      $pdf->Cell(10, 23, '3.Panitia penyelenggara beserta saksi dan pengawas menandatangani berita acara yang dicetak,', 0, 0, 'L');
      $pdf->Ln(6);
      $pdf->Cell(10, 23, 'lalu di upload kembali pada menu yang telah disediakan.', 0, 0, 'L');

      //tabel bagian c
      $pdf->Ln(13);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 23, 'C. PANITIA PENYELENGGARA', 0, 0, 'L');

      //tabel
      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(20, 10, 'NO', 1, 0, 'C');
      $pdf->Cell(75, 10, 'NAMA', 1, 0, 'C');
      $pdf->Cell(50, 10, 'JABATAN', 1, 0, 'C');
      $pdf->Cell(40, 10, 'TANDA TANGAN', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(20, 10, '1', 1, 0, 'C');
      $pdf->Cell(75, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(50, 10, 'Ketua Pelaksana', 1, 0, 'C');
      $pdf->Cell(40, 10, '', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(20, 10, '2', 1, 0, 'C');
      $pdf->Cell(75, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(50, 10, 'Ketua Pelaksana', 1, 0, 'C');
      $pdf->Cell(40, 10, '', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(20, 10, '3', 1, 0, 'C');
      $pdf->Cell(75, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(50, 10, 'Ketua Pelaksana', 1, 0, 'C');
      $pdf->Cell(40, 10, '', 1, 0, 'C');


      //tabel bagian d
      $pdf->Ln(11);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 23, 'D. PESERTA PEMILIHAN', 0, 0, 'L');

      //tabel
      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(20, 10, 'NO', 1, 0, 'C');
      $pdf->Cell(115, 10, 'NAMA PESERTA PEMILIHAN', 1, 0, 'C');
      $pdf->Cell(50, 10, 'TANDA TANGAN', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(20, 10, '1', 1, 0, 'C');
      $pdf->Cell(115, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(50, 10, '', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(20, 10, '2', 1, 0, 'C');
      $pdf->Cell(115, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(50, 10, '', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(20, 10, '3', 1, 0, 'C');
      $pdf->Cell(115, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(50, 10, '', 1, 0, 'C');

      //FORM 2
      // membuat halaman baru
      $pdf->AddPage('');

      $pdf->Ln(6);

      // header
      $pdf->Image('assets/gambar/logo/logokpu.png', 17, 17, 23, 25);

      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(80);
      $pdf->Cell(23, 5, 'SERTIFIKAT', 0, 1, 'C');
      $pdf->Cell(184, 7, 'HASIL PENGHITUNGAN PEROLEHAN SUARA', 0, 1, 'C');
      $pdf->cell(184, 5, 'PEMILIHAN UMUM KETUA DAN WAKIL KETUA BEM', 0, 1, 'C');
      $pdf->cell(184, 7, 'UNIVERSITAS IBN KHALDUN BOGOR', 0, 1, 'C');
      $pdf->cell(184, 7, 'PERIODE 2020-2023', 0, 1, 'C');

      $pdf->Image('assets/gambar/logo/logouika.png', 170, 17, 24, 25);
      // end header


      //deskripsi awal
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
      //tabel bagian A
      $pdf->Ln(16);
      $pdf->SetLeftMargin(10);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 15, 'A. DATA PEMILIH DAN PENGGUNAAN HAK PILIH', 0, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(10, 20, 'NO', 1, 0, 'C');
      $pdf->Cell(58, 20, 'DATA PEMILIH', 1, 0, 'C');
      $pdf->Cell(60, 10, 'JUMLAH', 1, 0, 'C');
      $pdf->Cell(60, 10, 'PRESENTASE', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(10);
      $pdf->Cell(58);
      $pdf->Cell(20, 10, 'lk', 1, 0, 'C');
      $pdf->Cell(20, 10, 'Pr', 1, 0, 'C');
      $pdf->Cell(20, 10, 'jumlah', 1, 0, 'C');
      $pdf->Cell(20, 10, 'lk', 1, 0, 'C');
      $pdf->Cell(20, 10, 'Pr', 1, 0, 'C');
      $pdf->Cell(20, 10, 'jumlah', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(10, 10, '1', 1, 0, 'C');
      $pdf->Cell(58, 10, 'Pemilih Terdaftar', 1, 0, 'L');
      $pdf->Cell(20, 10, '77', 1, 0, 'C');
      $pdf->Cell(20, 10, '19', 1, 0, 'C');
      $pdf->Cell(20, 10, '96', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(10, 10, '2', 1, 0, 'C');
      $pdf->Cell(58, 10, 'Menggunakan Hak Pilih', 1, 0, 'L');
      $pdf->Cell(20, 10, '77', 1, 0, 'C');
      $pdf->Cell(20, 10, '19', 1, 0, 'C');
      $pdf->Cell(20, 10, '96', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(10, 10, '3', 1, 0, 'C');
      $pdf->Cell(58, 10, 'Tidak Menggunakan Hak Pilih', 1, 0, 'L');
      $pdf->Cell(20, 10, '77', 1, 0, 'C');
      $pdf->Cell(20, 10, '19', 1, 0, 'C');
      $pdf->Cell(20, 10, '96', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');
      $pdf->Cell(20, 10, '80.21%', 1, 0, 'C');

      //tabel bagian A
      $pdf->Ln(13);
      $pdf->SetLeftMargin(10);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 15, 'B. DATA PEROLEHAN SUARA SAH CALON PESERTA PEMILIHAN', 0, 0, 'L');

      $pdf->Ln();
      $pdf->Cell(20, 10, 'NO URUT', 1, 0, 'C');
      $pdf->Cell(74, 10, 'NAMA CALON PESERTA PEMILIHAN', 1, 0, 'C');
      $pdf->Cell(53, 10, 'JUMLAH PEROLEHAN SUARA', 1, 0, 'C');
      $pdf->Cell(38, 10, 'PRESENTASE', 1, 0, 'C');

      $pdf->Ln();
      $pdf->SetFont('Arial', '', 10);
      $pdf->Cell(20, 10, '1', 1, 0, 'C');
      $pdf->Cell(74, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(53, 10, '0', 1, 0, 'C');
      $pdf->Cell(38, 10, '0.00%', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(20, 10, '2', 1, 0, 'C');
      $pdf->Cell(74, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(53, 10, '0', 1, 0, 'C');
      $pdf->Cell(38, 10, '0.00%', 1, 0, 'C');

      $pdf->Ln();
      $pdf->Cell(20, 10, '3', 1, 0, 'C');
      $pdf->Cell(74, 10, 'Andri Safrudin', 1, 0, 'C');
      $pdf->Cell(53, 10, '0', 1, 0, 'C');
      $pdf->Cell(38, 10, '0.00%', 1, 0, 'C');

      //END
      $pdf->Output();
   }
}
