<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilinstansi extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'instansi/V_profilinstansi');
   }

   public function addInstansi()
   {
   }

   public function editInstansi()
   {
   }
}
