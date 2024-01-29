<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroController extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');

		    $this->load->model('UsuarioModel');
		}

		public function index() {
			$this->load->view('includes/header');
			$this->load->view('registro');
			$this->load->view('includes/footer');
		}

		public function login() {
			$this->form_validation->set_rules('name','Name', 'trim|required|alpha');
			$this->form_validation->set_rules('email','Email ID', 'trim|required|valid_email|is_unique[usuarios.email]');
			$this->form_validation->set_rules('telefono','Telefono', 'trim|required|alpha');
			$this->form_validation->set_rules('fecha_nac','Name', 'trim|required|alpha');
			$this->form_validation->set_rules('contraseña','contraseña', 'trim|required');
			$this->form_validation->set_rules('confcontraseña','confcontraseña', 'trim|required|matches[contraseña]');
			if($this->form_validation->run() == FALSE) 
			{ 
			$this->index();
			}
			else
				{ $data= array(
					'nombre' => $this->input->post('nombre'),
					'email' => $this->input->post('email'),
					'contraseña' => $this->input->post('contraseña') );
			$registro_usuario = new UsuarioModel ;
			$checking = $registro_usuario->registro_usuario($data);
			if($checking) {
				$this->sesion->set_flashdata('status','Registro exitoso , inicia sesion ') ;
				redirect(base_url('login')) ;
			}
			else {
				$this->sesion->set_flashdata('status','Falló su registro') ;
				redirect(base_url('entradas')) ;
			}

			}
		}

	}

?>