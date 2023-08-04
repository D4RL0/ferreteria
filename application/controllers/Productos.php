<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("categoria");
		$this->load->model("producto");
	}

  public function index(){
	$data["listadoProductos"]=
	$this->producto->obtenerTodas();
    $this->load->view("header");
    $this->load->view("productos/index",$data);
    $this->load->view("footer");
  }

  public function nueva(){
		$data["listadoCategorias"]=$this->categoria->obtenerTodos();
    $this->load->view("header");
    $this->load->view("productos/nueva",$data);
    $this->load->view("footer");
  }

	public function editar($id_pro){
		$data["producto"]=$this->producto->obtenerPorId($id_pro);
		$data["listadoCategorias"]=$this->categoria->obtenerTodos();
		$this->load->view("header");
		$this->load->view("productos/editar",$data);
		$this->load->view("footer");
	}

	public function guardarProducto(){
		$datos=array(
			"fk_id_cat"=>$this->input->post("fk_id_cat"),
			"codigo_pro"=>$this->input->post("codigo_pro"),
			"nombre_pro"=>$this->input->post("nombre_pro"),
			"precio_pro"=>$this->input->post("precio_pro"),
			"stock_pro"=>$this->input->post("stock_pro")
		);
		//Inicio del proceso de subida  de fotografia
		$this->load->library("upload");//Activando la libreria de subida de archivos
		$new_name = "foto_". time() . "_" . rand(1, 50000);//generando un nombre aleatorio
		$config['file_name'] = $new_name;
		$config['upload_path'] = FCPATH .'uploads/productos/';//ruta de subida
		$config['allowed_types'] = 'jpg|png|jpeg';  //pdf|docx
		$config['max_size'] = 2*1024; //5MB
		$this->upload->initialize($config);//Inicializar la configuracion
		//Validando la subida de archivo
		if ($this->upload->do_upload("foto_pro")) {
			//Que si se subio con exito
			$dataSubida = $this->upload->data();
			$datosNuevoProducto["foto_pro"] = $dataSubida['file_name'];
		}else{
			print_r ($this->upload->display_errors());
		}
		//Fin del proceso de subida de archivos
		print_r($datosNuevoProducto);
		if($this->producto->insertar($datos)){
				$this->session->set_flashdata("confirmacion",
			  "producto Insertada Exitosamente");
		}else{
			$this->session->set_flashdata("error",
			"Error al inserta, verifique e intente otra vez");
		}
		redirect("productos/index");
	}

	public function borrar($id_pro){
		if ($this->producto->eliminarPorId($id_pro)){
			$this->session
			->set_flashdata('confirmacion',
			'Producto ELMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
			'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect("productos/index");
	}


	public function actualizarProducto(){
		$datos=array(
			"fk_id_cat"=>$this->input->post("fk_id_cat"),
			"codigo_pro"=>$this->input->post("codigo_pro"),
			"nombre_pro"=>$this->input->post("nombre_pro"),
			"precio_pro"=>$this->input->post("precio_pro"),
			"stock_pro"=>$this->input->post("stock_pro")
		);
		$id_pro=$this->input->post("id_pro");
		if($this->producto->actualizar($id_pro,$datos)){
				$this->session->set_flashdata("confirmacion",
			  "Producto Actulizado Exitosamente");
				redirect("productos/index");
		}else{
			$this->session->set_flashdata("error",
			"Error al actualizar, verifique e intente otra vez");
			redirect("productos/editar/".$id_pro);
		}

	}

}//Cierre de la clase (No borrar)






//
