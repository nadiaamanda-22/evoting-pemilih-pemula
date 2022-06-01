<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller

{
   var $api = '';
   var $getid = '';
   public function __construct()
   {
      parent::__construct();
   }
   public function index()
   {
      $this->load->view('login/V_login');
   }

   public function login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $ch = curl_init();
      $url = "http://localhost:3000/v1/auth/login";
      $postapi = [
         'username' => $username,
         'password' => $password
      ];
      $data = json_encode($postapi);
      $header = [
         "Content-Type:application/json",
         // "user-email:" . "$email",
         // "user-password:" . "$password"
      ];
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      $result = curl_exec($ch);
      curl_close($ch);

      $data = json_decode($result, true);
      if ($data['status'] == 400) {
         $response = [
            'sukses' => TRUE,
            'alert' => $data['error']
         ];
      } else {
         $response = [
            'sukses' => TRUE,
            'alert' => $data['message']
         ];
      }
      echo json_encode($response);
   }
}
