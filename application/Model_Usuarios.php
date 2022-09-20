<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Usuarios extends CI_Model 
{
    public function existe($user)
    {
        $this->db->select('usuario, pass');
        $this->db->from("users_api");
        $this->db->where("usuario",$user);
        $result=$this->db->get()->row();
        return $result;

    }
    public function save($data)
       {     
           return $this->db->insert('users_api', $data);        
       }

       


}