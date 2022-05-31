<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DPT extends CI_Controller
{

   var $api = '';
   var $getid = '';
   public function __construct()
   {
      parent::__construct();
      $this->api = "http://localhost:3000/v1/pemilih/";
   }


   //nampilin halaman
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_dpt');
   }

   //ambil semua data
   public function ngambilDpt()
   {
      $api = $this->curl->simple_get($this->api);
      $decode = json_decode($api, true);
      $apidpt = $decode['data'];

      echo json_encode($apidpt);
   }


   //ambil data per id
   public function getIdDpt($id_pemilih)
   {
      $this->getid = "http://localhost:3000/v1/pemilih/" . $id_pemilih;
      $api = $this->curl->simple_get($this->getid);
      $decode = json_decode($api, true);
      $getid = $decode['data'];

      echo json_encode($getid);
   }


   //tambah data
   public function tambahDpt()
   {

      $username = $this->input->post('username');
      $namaPemilih =  $this->input->post('nama_pemilih');
      $jkPemilih = $this->input->post('jk_pemilih');
      $namaIbuKandung = $this->input->post('nama_ibu_kandung');
      $nik = $this->input->post('nomor_induk_kependudukan');
      $password = $this->input->post('password');
      $email = $this->input->post('email');
      $imei = $this->input->post('imei');

      $this->form_validation->set_rules('username', 'Username', 'required|numeric');
      $this->form_validation->set_rules('nama_pemilih', 'Nama Pemilih', 'required');
      $this->form_validation->set_rules('jk_pemilih', 'Jenis Kelamin Pemilih', 'required');
      $this->form_validation->set_rules('nama_ibu_kandung', 'Nama Ibu Kandung', 'required');
      $this->form_validation->set_rules('nomor_induk_kependudukan', 'Nomor Induk Kependudukan', 'required|numeric');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('imei', 'Imei', 'required');

      if ($this->form_validation->run() == FALSE) {
         $response = [
            'sukses' => FALSE,
            'alert' => 'Data gagal ditambahkan'
         ];
         echo json_encode($response);
      } else {
         $ch = curl_init();
         $url = "http://localhost:3000/v1/pemilih/insert";
         $postapi = [
            'username' => $username,
            'nama_pemilih' => $namaPemilih,
            'jk_pemilih' => $jkPemilih,
            'nama_ibu_kandung' => $namaIbuKandung,
            'nomor_induk_kependudukan' => $nik,
            'password' => $password,
            'email' => $email,
            'imei' => $imei
         ];
         $data = json_encode($postapi);


         curl_setopt($ch, CURLOPT_URL, $url);
         // curl_setopt($ch, CURLOPT_POST, $data);
         curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type:application/json', 'Content-Length: ' . strlen($data)));
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_HEADER, 1);
         // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36');
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         // curl_setopt($ch, CURLOPT_TIMEOUT, 120);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
         curl_setopt($ch, CURLOPT_TIMEOUT, 1800);
         $result = curl_exec($ch);
         curl_close($ch);
         var_dump($result);
         die;
         $response = [
            'sukses' => TRUE,
            'alert' => 'Data berhasil ditambahkan'
         ];
         echo json_encode($response);
      }
   }


   //hapus data
   public function hapusDpt($id_pemilih)
   {
      $id_pemilih =  $this->input->post('id_pemilih');

      $ch = curl_init();
      $url = "http://localhost:3000/v1/pemilih/hard_delete/" . $id_pemilih;
      $postapi = [
         'id_pemilih' => $id_pemilih
      ];
      $data = json_encode($postapi);


      curl_setopt($ch, CURLOPT_URL, $url);
      // curl_setopt($ch, CURLOPT_POST, $data);
      curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type:application/json', 'Content-Length: ' . strlen($data)));
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, 1);
      // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      // curl_setopt($ch, CURLOPT_TIMEOUT, 120);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
      curl_setopt($ch, CURLOPT_TIMEOUT, 1800);
      $result = curl_exec($ch);
      curl_close($ch);

      $response = [
         'sukses' => TRUE,
         'alert' => 'Data berhasil dihapus'
      ];
      echo json_encode($response);
   }


   //edit data
   public function editDpt($id_pemilih)
   {
      $nama_pemilih =  $this->input->post('nama_pemilih');
      $jkPemilih = $this->input->post('jk_pemilih');
      $namaIbuKandung = $this->input->post('nama_ibu_kandung');
      $nomorInduk = $this->input->post('nomor_induk');
      $noIndukKependudukan = $this->input->post('nomor_induk_kependudukan');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $email = $this->input->post('email');
      $imei = $this->input->post('imei');

      $this->form_validation->set_rules('nama_ibu_kandung', 'Nama Ibu Kandung', 'required');

      if ($this->form_validation->run() == FALSE) {
         $response = [
            'sukses' => FALSE,
            'alert' => 'Data gagal diubah'
         ];
         echo json_encode($response);
      } else {
         $ch = curl_init();
         $url = "http://localhost:3000/v1/pemilih/update/" . $id_pemilih;
         $postapi = [
            'id_pemilih' => $id_pemilih,
            'nama_pemilih' => $nama_pemilih,
            'jk_pemilih' => $jkPemilih,
            'nama_ibu_kandung' => $namaIbuKandung,
            'nomor_induk' => $nomorInduk,
            'nomor_induk_kependudukan' => $noIndukKependudukan,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'imei' => $imei
         ];
         $data = json_encode($postapi);

         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type:application/json', 'Content-Length: ' . strlen($data)));
         curl_setopt($ch, CURLOPT_HEADER, 1);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
         curl_setopt($ch, CURLOPT_TIMEOUT, 1800);
         $result = curl_exec($ch);
         curl_close($ch);

         $response = [
            'sukses' => TRUE,
            'alert' => 'Data berhasil diubah'
         ];
         echo json_encode($response);
      }
   }

   //import data
   public function importData()
   {
   }

   //cetak pdf
   public function cetakDptPdf()
   {

      //get data dari api
      $api = $this->curl->simple_get($this->api);
      $decode = json_decode($api, true);
      $dpt = $decode['data'];

      $pdf = new PDF();
      $pdf->SetTitle('DPT ' . date('d-m-Y'));
      $pdf->SetMargins(10, 20, 20, 10);
      $pdf->SetAutoPageBreak(true, 30);

      // membuat halaman baru
      $pdf->AddPage('L');


      // header
      $pdf->Image('assets/gambar/logokpu.png', 13, 6, 25, 26);

      $pdf->SetFont('Arial', 'B', 11);
      $pdf->Cell(270, -10, 'DAFTAR PEMILIH TETAP', 0, 1, 'C');
      $pdf->Cell(270, 20, 'PEMILIHAN UMUM KETUA DAN WAKIL KETUA BEM', 0, 1, 'C');
      $pdf->Cell(270, -10, 'UNIVERSITAS IBN KHALDUN BOGOR PERIODE 2022-2023', 0, 0, 'C');

      $pdf->Image('assets/gambar/logouika.png', 257, 6, 25, 26);
      // end header

      $pdf->Ln(33);

      //buat garis horisontal
      $pdf->Line(10, 40, 286, 40);

      $pdf->Ln(-15);

      // Judul tabel
      $pdf->SetFont('Arial', 'B', 10);

      $pdf->Cell(10, 10, 'No', 1, 0, 'C');
      $pdf->Cell(40, 10, 'Username', 1, 0, 'C');
      $pdf->Cell(40, 10, 'Nama', 1, 0, 'C');
      $pdf->Cell(33, 10, 'Status Pemilihan', 1, 0, 'C');
      $pdf->Cell(33, 10, 'Jenis Kelamin', 1, 0, 'C');
      $pdf->Cell(30, 10, 'Email', 1, 0, 'C');
      $pdf->Cell(40, 10, 'Nama Ibu Kandung', 1, 0, 'C');
      $pdf->Cell(35, 10, 'NIK', 1, 0, 'C');
      $pdf->Cell(15, 10, 'Imei  ', 1, 1, 'C');

      //isi tabel
      $pdf->SetFont('Arial', '', 10);
      $no = 1;
      foreach ($dpt as $d) {

         $pdf->Cell(10, 10, $no, 1, 0, 'C');
         $pdf->Cell(40, 10, $d['username'], 1, 0, 'C');
         $pdf->Cell(40, 10, $d['nama_pemilih'], 1, 0, 'C');
         $pdf->Cell(33, 10, $d['status_pemilihan'], 1, 0, 'C');
         $pdf->Cell(33, 10, $d['jk_pemilih'], 1, 0, 'C');
         $pdf->Cell(30, 10, $d['email'], 1, 0, 'C');
         $pdf->Cell(40, 10, $d['nama_ibu_kandung'], 1, 0, 'C');
         $pdf->Cell(35, 10, $d['nomor_induk_kependudukan'], 1, 0, 'C');
         $pdf->Cell(15, 10, $d['imei'], 1, 0, 'C');
         $no++;
         $pdf->Ln();
      }
      $pdf->Output();
   }

   //cetak csv
   public function cetakDptCsv()
   {
      $file_name = 'DPT ' . date('d-m-Y') . '.csv';
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file_name");
      header("Content-Type: application/csv;");

      // get data 
      $api = $this->curl->simple_get($this->api);
      $decode = json_decode($api, true);
      $dpt = $decode['data'];

      // file creation 
      $file = fopen('php://output', 'w');

      //judul tabel
      $header = array("Nomor", "Username", "Nama", "Status Pemilihan", "Jenis Kelamin", "Email", "Nama Ibu Kandung", "NIK", "Imei");
      fputcsv($file, $header);

      //isi tabel
      $no = 1;
      foreach ($dpt as $d) {
         fputcsv($file, [
            $no,
            $d['username'],
            $d['nama_pemilih'],
            $d['status_pemilihan'],
            $d['jk_pemilih'],
            $d['email'],
            $d['nama_ibu_kandung'],
            $d['nomor_induk_kependudukan'],
            $d['imei']
         ]);
         $no++;
      }

      fclose($file);
      exit;
   }


   //cetak xlsx
   public function cetakDptXlsx()
   {
      // get data
      $api = $this->curl->simple_get($this->api);
      $decode = json_decode($api, true);
      $dpt = $decode['data'];

      include_once APPPATH . '/third_party/excelXlsx/xlsxwriter.class.php';
      ini_set('display_errors', 0);
      ini_set('log_errors', 1);
      error_reporting(E_ALL & ~E_NOTICE);

      $filename = "DPT " . date('d-m-Y') . ".xlsx";

      header('Content-disposition: attachment; filename="' . XLSXWriter::sanitize_filename($filename) . '"');
      header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
      header('Content-Transfer-Encoding: binary');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');

      $styles = array('widths' => [3, 30, 30, 20, 20, 25, 20, 20], 'font' => 'Arial', 'font-size' => 10, 'font-style' => 'bold', 'fill' => '#eee', 'halign' => 'center', 'border' => 'left,right,top,bottom');

      // judul tabel
      $header = array(
         'No' => 'integer',
         'Username' => 'string',
         'Nama' => 'string',
         'Jenis Kelamin' => 'string',
         'Status Pemilihan' => 'string',
         'Email' => 'string',
         'Nama Ibu Kandung' => 'string',
         'NIK' => 'string',
         'Imei' => 'string'
      );

      $writer = new XLSXWriter();
      $writer->setAuthor('Me');

      $writer->writeSheetHeader('Sheet1', $header, $styles);

      // isi tabel
      $no = 1;
      foreach ($dpt as $dpt) {
         $writer->writeSheetRow(
            'Sheet1',
            [
               $no,
               $dpt['username'],
               $dpt['nama_pemilih'],
               $dpt['jk_pemilih'],
               $dpt['status_pemilihan'],
               $dpt['email'],
               $dpt['nama_ibu_kandung'],
               $dpt['nomor_induk_kependudukan'],
               $dpt['imei']
            ]
         );
         $no++;
      }

      $writer->writeToStdOut();
   }
}
