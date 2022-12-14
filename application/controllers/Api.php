<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** access library REST_Controller, remember is library is a REST Server resource*/
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


class Api extends REST_Controller {

    public function __construct() {
        parent::__construct();
      
        $this->load->model('Model2_alumnos','alum');
     
    }

    public function index_get(){
    
        
        $data = array
        (
            'status'=>200,
            'data'=>$this->alum->getAlumnos(),
            'comentario'=>'Todo bien'
        );
        $this->response($data); 

       
    }
  
    public function index_post(){
       
		$carrera = $this->input->post("carrera");
		$anio = $this->input->post("anio");
		$correlativo = $this->input->post("correlativo");
        $nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$email = $this->input->post("email");
		$codigo = $this->CreaCodigo(8);
		
			$data = array(
				"carrera"=>$carrera,
				"anio"=>$anio,
				"correlativo"=>$correlativo,
				"nombre"=> $nombre,
				"apellido"=>$apellido,
				"email"=>$email,
				"codigo"=>$codigo

			);
			if($this->alum->existe($correlativo)){


                $res = array
                (
                    'status'=>400,
                    'data'=>$this->alum->codigo($correlativo),
                    'comentario'=>'El alumno ya existe'
                );
             

            }
            else{
                $datos = $this->alum->save($data);
          
            if($datos) {
                $res['status'] = 201;
                $res['message'] = 'Registro Insertado';
                
            } else {
                $res['status'] = 400;
                $res['message'] = 'insert failed';
               
            }

            }
			
            $this-> response($res,200);
		
    }
   
   
    
function CreaCodigo($num)
{
    $codigo ="";
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        
    $max = strlen($cadena); 

    for ($i=0; $i < $num; $i++) {
        $codigo .= $cadena[mt_rand(0, $max-1)];
    }

    if($this->alum->existecodigo($codigo))
    {
        CreaCodigo(8);
        
    }
    else
    {
        return $codigo;
    }
  

}
    


}









