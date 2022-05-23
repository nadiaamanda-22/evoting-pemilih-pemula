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
      $apirole = $decode['data'];

      echo json_encode($apirole);
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

      $namaPemilih =  $this->input->post('nama_pemilih');
      $jkPemilih = $this->input->post('jk_pemilih');
      $namaIbuKandung = $this->input->post('nama_ibu_kandung');
      $nomorInduk = $this->input->post('nomor_induk');
      $nik = $this->input->post('nomor_induk_kependudukan');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $email = $this->input->post('email');
      $imei = $this->input->post('imei');

      $this->form_validation->set_rules('nama_pemilih', 'Nama Pemilih', 'required');
      $this->form_validation->set_rules('jk_pemilih', 'Jenis Kelamin Pemilih', 'required');
      $this->form_validation->set_rules('nama_ibu_kandung', 'Nama Ibu Kandung', 'required');
      $this->form_validation->set_rules('nomor_induk', 'Nomor Induk', 'required|numeric');
      $this->form_validation->set_rules('nomor_induk_kependudukan', 'Nomor Induk Kependudukan', 'required|numeric');
      $this->form_validation->set_rules('username', 'Username', 'required');
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
            'nama_pemilih' => $namaPemilih,
            'jk_pemilih' => $jkPemilih,
            'nama_ibu_kandung' => $namaIbuKandung,
            'nomor_induk' => $nomorInduk,
            'nomor_induk_kependudukan' => $nik,
            'username' => $username,
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

      $this->form_validation->set_rules('nama_pemilih', 'Nama Pemilih', 'required');
      $this->form_validation->set_rules('jk_pemilih', 'Jenis Kelamin Pemilih', 'required');
      $this->form_validation->set_rules('nama_ibu_kandung', 'Nama Ibu Kandung', 'required');
      $this->form_validation->set_rules('nomor_induk', 'Nomor Induk', 'required|numeric');
      $this->form_validation->set_rules('nomor_induk_kependudukan', 'Nomor Induk Kependudukan', 'required|numeric');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('imei', 'Imei', 'required');

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
}
