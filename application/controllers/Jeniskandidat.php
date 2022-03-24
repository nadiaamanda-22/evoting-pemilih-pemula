<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jeniskandidat extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_jeniskandidat');
   }

   public function addJenisKandidat()
   {
   }

   public function editJenisKandidat()
   {
   }
}
