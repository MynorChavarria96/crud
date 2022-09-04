<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model2_Alumnos extends CI_Model {

    
       public function save($data)
       {     
           return $this->db->insert('alumnos_api', $data);        
       }
    

    public function getAlumnos(){
        $this->db->select("*");
        $this->db->from("alumnos_api");
        $results=$this->db->get();
        return $results->result();
        
    }


    public function existe($correlativo)
    {
        $this->db->select("correlativo");
        $this->db->from("alumnos_api");
        $this->db->where("correlativo",$correlativo);
        $result=$this->db->get()->row();
        return $result;
       
    }
    public function codigo($correlativo)
    {
        $this->db->select('codigo, fecha_creacion');
        $this->db->from("alumnos_api");
        $this->db->where("correlativo",$correlativo);
        $result=$this->db->get();
        return $result->result();
       
    }
    public function existecodigo($codigo)
    {
        $this->db->select('codigo');
        $this->db->from("alumnos_api");
        $this->db->where("codigo",$codigo);
        $result=$this->db->get()->row();
        return $result;

    }

   
}
