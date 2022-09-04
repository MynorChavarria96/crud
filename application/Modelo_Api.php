<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_Api extends CI_Model {
    
    public function save($data){
       $s= $this->db->insert("tb_api",$data);
       return $s;
    }

    public function getUsers(){
        $this->db->select("*");
        $this->db->from("tb_api");
        $results=$this->db->get();
        return $results->result();
    }

    public function getUser($id){
        $this->db->select("u.nombre, u.apellido, u.correo, u.token, u.carrera, u.anio, u.correlativo");
        $this->db->from("tb_api u");
        $this->db->where("u.alumno",$id);
        $result=$this->db->get();
        return $result->row();
    }

    public function update($data,$id){
        $this->db->where("alumno",$id);
        $this->db->update("tb_api",$data);
    }

    public function delete($id){
        $this->db->where("alumno",$id);
        $this->db->delete("tb_api");
    }

    public function VerificarExistToken($token){
        $this->db->select("*");
        $this->db->from("tb_api");
        $this->db->where("token", $token);
        $results=$this->db->get();
        return empty($results->result());
    }
    
}