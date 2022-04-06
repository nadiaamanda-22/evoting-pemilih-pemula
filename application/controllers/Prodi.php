<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'kampus/V_prodi');
   }

   public function addProdi()
   {
   }

   public function editProdi()
   {
   }
}
