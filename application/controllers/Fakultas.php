<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'kampus/V_fakultas');
   }

   public function addFakultas()
   {
   }

   public function editFakultas()
   {
   }
}
