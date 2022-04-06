<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submenu extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'menu/V_submenu');
   }

   public function addSubmenu()
   {
   }

   public function editSubmenu()
   {
   }
}
