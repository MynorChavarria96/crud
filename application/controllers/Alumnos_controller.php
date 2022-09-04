<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Alumnos_model');
	}



	public function index()
	{
		$this->load->view('alumnos/index');
	}

	public function insert()
	{
		if($this->input->is_ajax_request())
		{
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('direccion', 'Direccion', 'required');
			$this->form_validation->set_rules('movil', 'Movil', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('inactivo', 'Inactivo', 'required');

			if ($this->form_validation->run() == FALSE)
			{
					$data = array('responce' => 'error', 'message' => validation_errors());
			}
			else
			{
				$ajax_data = $this->input->post();
				if($this->Alumnos_model->insert_Alumnos($ajax_data)){
					$data = array('responce' => 'success', 'message' => 'Registro insertado exitosamente' );
					
				}
				else{
					$data = array('responce' => 'error', 'message' => 'Error al insertar el registro' );
				}
				
			}
		}
		else
		{
			echo "No direct script access allowed";
		}

		echo json_encode($data);

	}

	public function fetch()
	{
		if($this->input->is_ajax_request())
		{
		$posts = $this->Alumnos_model->get_Alumnos();
		echo json_encode($posts);

		}
	}
	
	public function delete()
	{
		if($this->input->is_ajax_request()){
			$del_id = $this->input->post('del_id');
			if($this->Alumnos_model->delete_Alumnos($del_id))
			{
				$data = array('response'=> "success");
			}
			else
			{
				$data = array('response'=>"error al eliminar");
			
			}


		}
		   
			echo json_encode($data);
	}

	public function edit()
	{
		if($this->input->is_ajax_request()){
			$edit_id = $this->input->post('edit_id');

			if($post = $this->Alumnos_model->obtiene_Id($edit_id))
			{
				$data = array('response'=> "success", 'post'=>$post);
			}
			else
			{
				$data = array('response'=>"error al actualizar", 'message'=>'failed');
			
			}
		}
		echo json_encode($data);

	}
	public function update()
	{
		if($this->input->is_ajax_request())
		{
		
			
			$this->form_validation->set_rules('edit_nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('edit_apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('edit_direccion', 'Direccion', 'required');
			$this->form_validation->set_rules('edit_movil', 'Movil', 'required');
			$this->form_validation->set_rules('edit_email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('edit_inactivo','required');
			
			if ($this->form_validation->run() == FALSE)
			{
					$data = array('responce' => 'error', 'message' => validation_errors());
			}
			else
			{
				$edit_id = $this->input->post('edit_id');
				$data['nombre']=$this->input->post('edit_nombre');
				$data['apellido']=$this->input->post('edit_apellido');
				$data['dpi']=$this->input->post('edit_dpi');
				$data['direccion']=$this->input->post('edit_direccion');
				$data['movil']=$this->input->post('edit_movil');
				$data['email']=$this->input->post('edit_email');
				$data['inactivo']=$this->input->post('edit_inactivo');
				$data['user']=$this->input->post('edit_user');
				if($this->Alumnos_model->update_Alumnos($data, $edit_id)){
					$data = array('responce' => 'success', 'message' => 'Registro actualizado exitosamente' );
					
				}
				else{
					$data = array('responce' => 'error', 'message' => 'Error al actualizar el registro' );
				}
				
			}
		}
		else
		{
			echo "No direct script access allowed";
		}

		echo json_encode($data);
		
	}

	
	
}
