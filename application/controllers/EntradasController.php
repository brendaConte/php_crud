<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class EntradasController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('EntradasModel');
		$this->load->model('Usuario');
	}

	public function index() {
		$datos['entradas'] = $this->EntradasModel->seleccionar_todo();
		$datos['usuarios'] = $this->Usuario->seleccionar_todo();
		$this->Usuario->get_usuario_entradas();
		$this->load->view('entradas', $datos ); 

	}

	public function registro() {
			$entradas['id_usuario'] = $this->input->post('id_usuario');
			$entradas['titulo'] = $this->input->post('titulo');
			$entradas['texto'] = $this->input->post('texto');
			$entradas['fecha'] = $this->input->post('fecha');
			$entradas['imagen'] = $this->input->post('imagen');
			if($entradas['imagen'] =='' ){
			
		}
		$entradas['imagen'] = $this->input->post('imagen');

		$this->EntradasModel->registro($entradas);
		redirect('EntradasController');}

	public function eliminar($id) {
		$this->EntradasModel->eliminar($id);
		redirect('EntradasController');
	}

	public function editar($id) {

		$entradas['id_usuario'] = $this->input->post('id_usuario');
		$entradas['titulo'] = $this->input->post('titulo');
		$entradas['texto'] = $this->input->post('texto');
		$entradas['fecha'] = $this->input->post('fecha');
		$entradas['imagen'] = $this->input->post('imagen');
		
		$this->EntradasModel->editar($entradas);
			redirect('EntradasController');
		}
	 public function ver_mas() {
        $datosVista = array(
            'nombre' => 'Juan',
            'edad' => 30
        );

    }

} 

?>



