<?php
class Alumnos_model extends CI_Model {

    public function get_Alumnos()
    {
            $query = $this->db->get('alumnos');
            if(count($query->result())>0)
            {
                return $query->result();
            }
           
    }

    public function insert_Alumnos($data)
    {
   
           return $this->db->insert('alumnos', $data);
    }

    public function update_Alumnos($data, $id)
    {
            return $this->db->update('alumnos', $data, array('alumno' => $id));
    }

    public function obtiene_Id($id)
    {
        $this->db->select("*");
        $this->db->from("alumnos");
        $this->db->where("alumno", $id);
        $query = $this->db->get();
        if(count($query->result())>0)
        {
            return $query->row();
        }
    }

    public function delete_Alumnos($id)
    {
        return $this->db->delete('alumnos', array('alumno'=>$id));
     
   
    }

}

?>