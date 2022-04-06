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
      $url = "http://localhost:4000/v2/tambahrole";
      $postapi = [
         'role' => $role
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
         'alert' => 'Anda Berhasil Memilih'
      ];
      echo json_encode($response);
   }
}
