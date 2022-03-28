<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('M_Role');
   }

   public function index()
   {
      $this->template->load('templates/template_backend', 'user/V_role');
   }

   public function ngambilData()
   {
      $dataRole = $this->M_Role->getDataRole();
      echo json_encode($dataRole);
   }
}
