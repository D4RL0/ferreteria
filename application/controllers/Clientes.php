<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("cliente");
	}
	//renderiza la vista index de clientes
	public function index()
	{
		$data["listadoClientes"]=
		$this->cliente->obtenerTodos();
		$this->load->view('header');
		$this->load->view('clientes/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de clientes
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('clientes/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarCliente(){
		$datosNuevoCliente=array(
			"cedula_cli"=>$this->input->post('cedula_cli'),
			"apellido_cli"=>$this->input->post('apellido_cli'),
			"nombre_cli"=>$this->input->post('nombre_cli'),
			"telefono_cli"=>$this->input->post('telefono_cli'),
			"direccion_cli"=>$this->input->post('direccion_cli'),
			"email_cli"=>$this->input->post('email_cli')  
		);
		
		if($this->cliente->insertar($datosNuevoCliente)){
				$this->session
				->set_flashdata('confirmacion',
			 'Cliente insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('clientes/index');
	}
	//funcion para eliminar clientes
	public function borrar($id_act){
		if ($this->cliente->eliminarPorId($id_cli)){
			$this->session
			->set_flashdata('confirmacion',
		 'Cliente ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('clientes/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["clienteEditar"]=
			$this->cliente->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("clientes/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosClienteEditado=array(
			"cedula_cli"=>$this->input->post('cedula_cli'),
			"apellido_cli"=>$this->input->post('apellido_cli'),
			"nombre_cli"=>$this->input->post('nombre_cli'),
			"telefono_cli"=>$this->input->post('telefono_cli'),
			"direccion_cli"=>$this->input->post('direccion_cli'),
			"email_cli"=>$this->input->post('email_cli')
		);
	 $id=$this->input->post("id_cli");
		if($this->cliente->actualizar($id,$datosClienteEditado)){
			redirect('clientes/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
