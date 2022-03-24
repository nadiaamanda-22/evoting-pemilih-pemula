<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'menu/V_menu');
   }

   public function addMenu()
   {
   }

   public function editMenu()
   {
   }
}
