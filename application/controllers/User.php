<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
   public function index()
   {
      $this->template->load('templates/template_backend', 'user/V_user');
   }

   public function addUser()
   {
   }

   public function editUser()
   {
   }
}
