<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

   var $api = '';
   var $getid = '';
   public function __construct()
   {
      parent::__construct();
      $this->api = "http://localhost:3000/v1/role/";
   }

   public function index()
   {
      $this->template->load('templates/template_backend', 'user/V_role');
   }

   public function ngambilRole()
   {
      $api = $this->curl->simple_get($this->api);
      $decode = json_decode($api, true);
      $apirole = $decode['data'];

      echo json_encode($apirole);
   }

   public function tambahRole()
   {

      $role =  $this->input->post('role');

      $this->form_validation->set_rules('role', 'Role', 'required');

      if ($this->form_validation->run() == FALSE) {
         $response = [
            'sukses' => FALSE,
            'alert' => 'Data gagal ditambahkan'
         ];
         echo json_encode($response);
      } else {
         $ch = curl_init();
         $url = "http://localhost:3000/v1/role/insert";
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
            'alert' => 'Data berhasil ditambahkan'
         ];
         echo json_encode($response);
      }
   }

   public function hapusRole($id_role)
   {
      $id_role =  $this->input->post('id_role');

      $ch = curl_init();
      $url = "http://localhost:3000/v1/role/hard_delete/" . $id_role;
      $postapi = [
         'id_role' => $id_role
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

   public function getIdRole($id_role)
   {
      $this->getid = "http://localhost:3000/v1/role/" . $id_role;
      $api = $this->curl->simple_get($this->getid);
      $decode = json_decode($api, true);
      $getid = $decode['data'];

      echo json_encode($getid);
   }

   public function editRole($idRole)
   {
      $role =  $this->input->post('role');

      $this->form_validation->set_rules('role', 'Role', 'required');

      if ($this->form_validation->run() == FALSE) {
         $response = [
            'sukses' => FALSE,
            'alert' => 'Data gagal diubah'
         ];
         echo json_encode($response);
      } else {
         $ch = curl_init();
         $url = "http://localhost:3000/v1/role/update/" . $idRole;
         $postapi = [
            'id_role' => $idRole,
            'role' => $role
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
