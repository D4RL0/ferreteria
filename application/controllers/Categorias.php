<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("categoria");
	}
	//renderiza la vista index de categorias
	public function index()
	{
		$data["listadoCategorias"]=
		$this->categoria->obtenerTodos();
		$this->load->view('header');
		$this->load->view('categorias/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de categorias
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('categorias/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarCategoria(){
		$datosNuevaCategoria=array(
			"nom_cat"=>$this->input->post('nom_cat'),
			"descripcion_cat"=>$this->input->post('descripcion_cat')
		);
		
		if($this->categoria->insertar($datosNuevaCategoria)){
				$this->session
				->set_flashdata('confirmacion',
			 'Categoria insertada exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('categorias/index');
	}
	//funcion para eliminar categorias
	public function borrar($id_act){
		if ($this->categoria->eliminarPorId($id_cat)){
			$this->session
			->set_flashdata('confirmacion',
		 'Categoria ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('categorias/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["categoriaEditar"]=
			$this->categoria->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("categorias/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosCategoriaEditada=array(
			"nom_cat"=>$this->input->post('nom_cat'),
			"descripcion_cat"=>$this->input->post('descripcion_cat')
		);
	 $id=$this->input->post("id_cat");
		if($this->categoria->actualizar($id,$datosCategoriaEditada)){
			redirect('categorias/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
