<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formlaporan extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_cSatu');
   }

   public function cLima()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_cLima');
   }
}
