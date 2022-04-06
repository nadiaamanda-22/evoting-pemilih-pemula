<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilakun extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'instansi/V_profilakun');
   }
}
