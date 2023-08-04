<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridades extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("usuario");
	}
  public function login(){
  	$this->load->view("seguridades/login");
  }
	public function validarUsuario(){
		$email=$this->input->post("email_usu");
		$password=$this->input->post("password_usu");
		$usuarioEncontrado=$this->usuario->obtenerPorEmailPassword($email,$password);
		if ($usuarioEncontrado){

			$this->session->set_userdata('conectad0',$usuarioEncontrado);

			$this->session->set_flashdata("confirmacion","Bienvenido al sistema");
			redirect("welcome/index");
		} else {

		$this->session->set_flashdata("error","Email o contraseña incorrectos");
		redirect("seguridades/login");
		}
 }
 public function logout(){
	// Destruir la sesión actual
	$this->session->sess_destroy();

	// Redireccionar al formulario de inicio de sesión
	redirect('seguridades/login');
}
}//Cierre de la clase
