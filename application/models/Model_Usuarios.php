<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Usuarios extends CI_Model 
{
    public function existe($user)
    {
        $this->db->select('codigo, status');
           $this->db->from("users_api");
           $this->db->where("codigo",$user);
           $result=$this->db->get();
           return $result->result();

    }
    public function save($data)
       {     
           return $this->db->insert('users_api', $data);        
       }
       public function obtieneId()
       {     
        $this->db->select_max('id');
        $this->db->from("users_api");
        $result=$this->db->get()->row();
        return $result;    
       }

       public function codigo($codigo)
       {
           $this->db->select('id');
           $this->db->from("users_api");
           $this->db->where("codigo", $codigo);
           $result=$this->db->get();
           return $result->result();
          
       }

       public function update($id, $data)
       {
       
        $this->db->update('users_api', $data, array('id'=>$id));
        
       
      
       
     
     
       }

   


}