<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('UsuarioModel');
		$this->load->model('EntradasModel');
	}

	public function index()
		{
			$datos['usuarios']= $this->UsuarioModel->seleccionar_todo();
			$this->load->view('index', $datos);
		}
	public function () {

		}

	public function registro() {
		if($this->input->post()) 
		{	
		$usuario['id'] = $this-> input->post('id');
		$usuario['nombre'] = $this-> input->post('nombre');
		$usuario['email'] = $this-> input->post('email');
		$usuario['telefono'] = $this-> input->post('telefono');
		$usuario['fecha_nac'] = $this-> input->post('fecha_nac');

		$this->UsuarioModel->registro($usuario);
		redirect('Welcome');  } }

	public function eliminar($id) {
		$this->UsuarioModel->eliminar($id);
		redirect('Welcome');
		}

	public function editar($id) {
		$usuario['id'] = $this-> input->post('id');
		$usuario['nombre'] = $this-> input->post('nombre');
		$usuario['email'] = $this-> input->post('email');
		$usuario['telefono'] = $this-> input->post('telefono');
		$usuario['fecha_nac'] = $this-> input->post('fecha_nac');
		$this->UsuarioModel->editar($usuario);
		redirect('Welcome');
		}

	public function ver_listado($id) {
		$datos['entradas'] = $this->UsuarioModel->get_usuario_entradas($id);
		if ($datos['entradas']) {
		$this->load->view('ver_listado', $datos); }
        }
			
	}
	

