<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat extends CI_Controller
{

   var $api = '';
   var $getid = '';
   public function __construct()
   {
      parent::__construct();
      $this->api = "http://localhost:3000/v1/kandidat/";
   }

   //nampilin halaman
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_kandidat');
   }

   //ambil semua data
   public function getKandidat()
   {
      $api = $this->curl->simple_get($this->api);
      $decode = json_decode($api, true);
      $apikandidat = $decode['data'];

      echo json_encode($apikandidat);
   }

   //ambil data per id
   public function getIdKandidat($id_kandidat)
   {
      $this->getid = "http://localhost:3000/v1/kandidat/" . $id_kandidat;
      $api = $this->curl->simple_get($this->getid);
      $decode = json_decode($api, true);
      $getid = $decode['data'];

      echo json_encode($getid);
   }

   //tambah data
   public function tambahKandidat()
   {

      $namaKetua = $this->input->post('nama_ketua');
      $namaWakil =  $this->input->post('nama_wakil');
      // $fotoKandidat = $this->input->post('foto_kandidat');

      $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required');
      $this->form_validation->set_rules('nama_wakil', 'Nama Wakil', 'required');

      if ($this->form_validation->run() == FALSE) {
         $response = [
            'sukses' => FALSE,
            'alert' => 'Data gagal ditambahkan'
         ];
         echo json_encode($response);
      } else {
         $ch = curl_init();
         $url = "http://localhost:3000/v1/kandidat/insert";
         $postapi = [
            'nama_ketua' => $namaKetua,
            'nama_wakil' => $namaWakil
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
   public function hapusKandidat($id_kandidat)
   {
      $id_kandidat =  $this->input->post('id_kandidat');

      $ch = curl_init();
      $url = "http://localhost:3000/v1/kandidat/hard_delete/" . $id_kandidat;
      $postapi = [
         'id_kandidat' => $id_kandidat
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
   public function editKandidat($id_kandidat)
   {
      $namaKetua =  $this->input->post('nama_ketua');
      $namaWakil = $this->input->post('nama_wakil');
      // $fotoKandidat = $this->input->post('foto_kandidat');

      $this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'required');
      $this->form_validation->set_rules('nama_wakil', 'Nama Wakil', 'required');

      if ($this->form_validation->run() == FALSE) {
         $response = [
            'sukses' => FALSE,
            'alert' => 'Data gagal diubah'
         ];
         echo json_encode($response);
      } else {
         $ch = curl_init();
         $url = "http://localhost:3000/v1/kandidat/update/" . $id_kandidat;
         $postapi = [
            'id_kandidat' => $id_kandidat,
            'nama_ketua' => $namaKetua,
            'nama_wakil' => $namaWakil
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
}
