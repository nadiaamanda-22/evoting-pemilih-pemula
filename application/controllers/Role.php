<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'user/V_role');
   }

   public function addRole()
   {
   }

   public function editRole()
   {
   }
}
