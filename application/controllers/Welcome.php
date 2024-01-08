<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Usuario');
	}

	public function index()
	{
		$datos['usuarios']= $this->Usuario->seleccionar_todo();
		
		$this->load->view('index', $datos);
	}

	public function registro() {
		$usuario['id'] = $this-> input->post('id');
		$usuario['nombre'] = $this-> input->post('nombre');
		$usuario['email'] = $this-> input->post('email');
		$usuario['telefono'] = $this-> input->post('telefono');
		if($usuario['telefono'] =='' ){
			
		}
		$usuario['fecha_nac'] = $this-> input->post('fecha_nac');

		$this->Usuario->registro($usuario);
		redirect('Welcome');}

	public function eliminar($id) {
		$this->Usuario->eliminar($id);
		redirect('Welcome');
	}

	public function editar($id) {
		$usuario['id'] = $this-> input->post('id');
		$usuario['nombre'] = $this-> input->post('nombre');
		$usuario['email'] = $this-> input->post('email');
		$usuario['telefono'] = $this-> input->post('telefono');
		$usuario['fecha_nac'] = $this-> input->post('fecha_nac');
		
		$this->Usuario->editar($usuario);
		redirect('Welcome');
		}
	}

