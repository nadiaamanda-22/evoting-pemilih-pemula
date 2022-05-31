<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
   public function index()
   {
      $this->load->view('login/V_login');
   }

   var $api = '';
   var $getid = '';
   public function __construct()
   {
      parent::__construct();
      $this->api = "http://localhost:3000/v1/auth/login";
   }

   public function login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      // $this->form_validation->set_rules('username', 'Username', 'required');
      // $this->form_validation->set_rules('password', 'Password', 'required');

      // if ($this->form_validation->run() == FALSE) {
      //    $response = [
      //       'sukses' => FALSE,
      //       'alert' => 'Login gagal'
      //    ];
      //    echo json_encode($response);
      // } else {
      $ch = curl_init();
      $url = "http://localhost:3000/v1/auth/login";
      $postapi = [
         // 'username' => $username,
         // 'password' => $password
         'username' => "username",
         'password' => "password"
      ];
      $header = [
         'Content-Langth: 0',
         'Content-Type:application/json'
      ];
      $data = json_encode($postapi);

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, $data);
      // curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type:application/json', 'Content-Length: ' . strlen($data)));
      // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_HEADER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
      $result = curl_exec($ch);
      curl_close($ch);
      echo json_encode($result);
      die;

      $response = [
         'sukses' => TRUE,
         'alert' => 'Data berhasil ditambahkan'
      ];
      // echo json_encode($response);
      // }
   }
}
