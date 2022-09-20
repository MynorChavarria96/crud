<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** access library REST_Controller, remember is library is a REST Server resource*/
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


class Api_User extends REST_Controller 
{
    public function __construct() {
        parent::__construct();
      
        $this->load->model('Model_Usuarios','user');
     
    }


    function index_get ($usuario)
    {
       
        if( $this->user->existe($usuario))
        {
            $res = array
                (
                    'status'=>1,
                    'data'=>$this->user->existe($usuario),
                    'codigo'=>$this->user->enviaCodigo()
                    
                    
                );
        }
        else
        {
            $res = array
                (
                    'status'=>0
                    
                );

        }
        $this-> response($res,200);
       

    }

    public function index_post(){
       
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$usuario = $this->input->post("usuario");
        $pass = $this->input->post("pass");
		$email = $this->input->post("email");

        $passHas = password_hash($pass, PASSWORD_DEFAULT);
		
		
			$data = array(
				"nombres"=>$nombres,
				"apellidos"=>$apellidos,
				"usuario"=>$usuario,
				"pass"=>$passHas,
				"email"=>$email
			
			);
           
                $datos = $this->user->save($data);
          
            if($datos) {
                $res['status'] = 201;
                $res['message'] = 'Registro Insertado';
                
            } else {
                $res['status'] = 400;
                $res['message'] = 'insert failed';
                $res['datos'] = $data;
               
            }

            
			
            $this-> response($res,200);
		
    }

    public function index_put($codigo = null)
    {

        $codigo = $this->input->post('codigo');
        $id = $this->user->codigo('12345');

    if($this->user->codigo($codigo))
    {
          
$data = array
(
"nombres"=>"sd",
"apellidos"=>"sd",
"usuario"=>"sd",
"pass"=>"sd",
"passold"=>"sd",
"email"=>"sd",
"estado"=>"1"

);
   

     if(!empty($id)) {
           $update = $this->user->update($id, $data);

           if($update) {
                $res['status'] = 201;
                $res['message'] = 'update success';
                $res['data'] = 'verificado';
           } else {
                $res['error'] = true;
                $res['message'] = 'update failed';
                $res['data'] = $id;
           }
        }
         else 
         {
            $st['error'] = true;
            $res['message'] = 'update failed22';
            $res['data'] = null;
        }

        $this->response($res, 200); 

    }


        
       
        //$data2=$this->Model2_alumnos->getAlumnos($id);

               


     


    }



    

}