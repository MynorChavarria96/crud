<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model2_Alumnos extends CI_Model {

  
       public function save($data)
       {     
           return $this->db->insert('Alumnos_API', $data);        
       }
    

    public function getAlumnos(){
        $this->db->select("*");
        $this->db->from("Alumnos_API");
        $results=$this->db->get();
        return $results->result();
        
    }


    public function existe($correlativo)
    {
        $this->db->select("correlativo");
        $this->db->from("Alumnos_API");
        $this->db->where("correlativo",$correlativo);
        $result=$this->db->get()->row();
        return $result;
       
    }

    public function codigo($correlativo)
    {
        $this->db->select('codigo, fecha_creacion');
        $this->db->from("Alumnos_API");
        $this->db->where("correlativo",$correlativo);
        $result=$this->db->get();
        return $result->result();
       
    }

}
