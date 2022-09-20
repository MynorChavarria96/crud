<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller{
   
    public  function login()
    {
        $this->load->view('alumnos/Login');
       
    }
    public function validar()
    {
        $this->load->view('alumnos/validar');
    }

   
}