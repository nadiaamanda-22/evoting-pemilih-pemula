<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DPT extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_dpt');
   }

   public function cetakPdfDpt()
   {

      //get data dari api
      // $api = $this->curl->simple_get($this->api);
      // $decode = json_decode($api, true);
      // $role = $decode['data'];

      $pdf = new PDF();
      $pdf->SetTitle('DPT ' . date('d-m-Y'));
      $pdf->SetMargins(20, 20, 20, 10);
      $pdf->SetAutoPageBreak(true, 30);

      // membuat halaman baru
      $pdf->AddPage('L');


      // header
      $pdf->Image('assets/gambar/logokpu.png', 30, 14, 20, 20);

      $pdf->SetFont('Arial', 'B', 15);
      $pdf->Cell(110);
      $pdf->Cell(30, 0, 'DATA PEMILIHAN', 0, 1, 'C');
      $pdf->Cell(250, 20, 'KOMISI PEMILIHAN UMUM', 0, 0, 'C');

      $pdf->Image('assets/gambar/logouika.png', 245, 14, 22, 20);
      // end header

      $pdf->Ln(20);

      //buat garis horisontal
      $pdf->Line(30, 40, 273, 40);

      //Judul pdf
      $pdf->SetFont('Arial', 'B', 14);
      $pdf->Cell(250, 13, 'Datar Pemilih Tetap', 0, 10, 'C');
      $pdf->Cell(250, 10, 'Universitas Ibn Khaldun Bogor', 0, 10, 'C');
      $pdf->Cell(10, 3, '', 0, 1);

      // Judul tabel
      $pdf->SetFont('Arial', 'B', 10);

      $pdf->Cell(10, 10, 'No', 1, 0, 'C');
      $pdf->Cell(40, 10, 'Nama', 1, 0, 'C');
      $pdf->Cell(40, 10, 'Nama Ibu', 1, 0, 'C');
      $pdf->Cell(30, 10, 'Nomor Induk', 1, 0, 'C');
      $pdf->Cell(35, 10, 'NIK', 1, 0, 'C');
      $pdf->Cell(35, 10, 'Username', 1, 0, 'C');
      $pdf->Cell(30, 10, 'Email', 1, 0, 'C');
      $pdf->Cell(25, 10, 'Imei  ', 1, 1, 'C');

      //isi tabel
      // $pdf->SetFont('Arial', '', 10);
      // $no = 1;
      // foreach ($role as $r) {

      //    $pdf->Cell(10, 10, $no, 1, 0, 'C');
      //    $pdf->Cell(40, 10, $r['role'], 1, 0, 'C');
      //    $no++;
      // }
      $pdf->Output();
   }


   public function cetakCsvDpt()
   {
      $file_name = 'DPT ' . date('d-m-Y') . '.csv';
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$file_name");
      header("Content-Type: application/csv;");

      // get data 
      // $api = $this->curl->simple_get($this->api);
      // $decode = json_decode($api, true);
      // $role = $decode['data'];

      // file creation 
      $file = fopen('php://output', 'w');

      //judul tabel
      $header = array("Nama", "Nama Ibu", "Nomor Induk", "NIK", "Username", "Email", "Imei");
      fputcsv($file, $header);

      //isi tabel
      // $no = 1;
      // foreach ($role as $r) {
      //    fputcsv($file, [
      //       $no,
      //       $r['role']
      //    ]);
      //    $no++;
      // }

      fclose($file);
      exit;
   }



   public function cetakXlsxDpt()
   {
      //get data
      // $api = $this->curl->simple_get($this->api);
      // $decode = json_decode($api, true);
      // $role = $decode['data'];

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
         'Nama' => 'string',
         'Nama Ibu' => 'string',
         'Nomor Induk' => 'string',
         'NIK' => 'string',
         'Username' => 'string',
         'Email' => 'string',
         'Emai' => 'string'
      );

      $writer = new XLSXWriter();
      $writer->setAuthor('Me');

      $writer->writeSheetHeader('Sheet1', $header, $styles);

      // isi tabel
      // $no = 1;
      // foreach ($role as $row) {
      //    $writer->writeSheetRow(
      //       'Sheet1',
      //       [
      //          $no,
      //          $row['role']
      //       ]
      //    );
      //    $no++;
      // }

      $writer->writeToStdOut();
   }
}
