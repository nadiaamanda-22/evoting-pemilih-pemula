<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilihan extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'pemilihan/V_pemilihan');
   }
}
