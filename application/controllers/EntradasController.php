<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class EntradasController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('EntradasModel');
		$this->load->model('UsuarioModel');
	}

	public function index() {
		$datos['entradas'] = $this->EntradasModel->seleccionar_todo();
		$datos['usuarios'] = $this->UsuarioModel->seleccionar_todo();
		$this->UsuarioModel->get_usuario_entradas();
		$this->load->view('entradas', $datos );
	}

	public function registro() {
		$entradas['id_usuario'] = $this->input->post('id_usuario');
		$entradas['titulo'] = $this->input->post('titulo');
		$entradas['fecha'] = $this->input->post('fecha');
		$entradas['texto'] = $this->input->post('texto');	
		$entradas['imagen'] = $_FILES['imagen']['name'];

		if (isset($_FILES['imagen'])) {
			$archivo = $_FILES['imagen'];
			if (isset($archivo) && $archivo != "") {
				$this->EntradasModel->guardar_imagen($archivo);
			}
		}
		$this->EntradasModel->registro($entradas);
		redirect('EntradasController');
	}
 
	public function eliminar($id) {
			$this->EntradasModel->eliminar($id);
			redirect('EntradasController');
	}

	public function editar($id) {
			$entradas['id'] = $id;
			$entradas['id_usuario'] = $this->input->post('id_usuario');
			$entradas['titulo'] = $this->input->post('titulo');
			$entradas['fecha'] = $this->input->post('fecha');
			$entradas['texto'] = $this->input->post('texto');
			$entradas['imagen'] = $this->input->post('imagen');
			$this->EntradasModel->editar($entradas);
			redirect('EntradasController');
	}

	public function ver_detalle($id = 0){
		$datos['entradas'] = $this->EntradasModel->get_entrada($id);
			if ($datos['entradas']) {
				$this->load->view('ver_detalle', $datos); }
	}
	
}

