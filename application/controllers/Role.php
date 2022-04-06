<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

   var $api = '';
   public function __construct()
   {
      parent::__construct();
      $this->api = "http://localhost:4000/v2/tampilrole";
   }

   public function index()
   {
      $this->template->load('templates/template_backend', 'user/V_role');
   }

   public function ngambilData()
   {
      $api = $this->curl->simple_get($this->api);
      $decode = json_decode($api, true);
      $apirole = $decode['values'];

      echo json_encode($apirole);
   }

   public function tambahData()
   {
      $role =  $this->input->post('role');

      $ch = curl_init();
      $url = "http://localhost:4000/tambahrole";
      $postapi = [
         'role' => $role
      ];
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, $postapi);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postapi);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      curl_close($ch);

      $response = [
         'sukses' => TRUE,
         'alert' => 'Anda Berhasil Memilih'
      ];
      echo json_encode($response);
   }
}
