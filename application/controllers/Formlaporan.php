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
      $pdf->Cell(200, 7, 'PASANGAN CALON KETUA DAN WAKIL KETUA BRM', 0, 1, 'C');
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
      $pdf->Ln(13);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(10, 23, 'I. DATA PEMILIH DAN PENGGUNA HAK PILIH', 0, 0, 'L');


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
      $pdf->Cell(60, 10, '01. Muhammad-Ahmad', 1, 0, 'C');
      $pdf->Cell(60, 10, '02. Habibi-Ainun', 1, 0, 'C');
      $pdf->Cell(60, 10, '03. Romeo-Moreo', 1, 0, 'C');


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
