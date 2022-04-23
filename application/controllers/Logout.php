<?php
class Logout extends CI_Controller
{
   public function index()
   {
      $userData = $this->session->userdata('data');
      $this->session->sess_destroy($userData);
      redirect('Login');
   }
}
