<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroController extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
		    $this->load->library('session');
		    $this->load->model('UsuarioModel');
		}

		public function index() {
			$this->load->view('includes/header');
			$this->load->view('registro');
			$this->load->view('includes/footer');
		}

		public function registro() {
			$this->form_validation->set_rules('nombre','Nombre', 'trim|required|alpha');
			$this->form_validation->set_rules('email','E-mail', 'trim|required|valid_email|is_unique[usuarios.email]');
			$this->form_validation->set_rules('telefono','Telefono','trim|required|numeric');
			$this->form_validation->set_rules('fecha_nac','Fecha de nacimiento', 'trim|required');
			$this->form_validation->set_rules('contraseña','Contraseña', 'trim|required');
			$this->form_validation->set_rules('confcontraseña','Confirmar contraseña', 'trim|required|matches[contraseña]');
			if($this->form_validation->run() == FALSE) { 
				$this->index();
				}
				else{ 
					$usuario= array(
					'nombre' => $this->input->post('nombre'),
					'email' => $this->input->post('email'),
					'telefono' => $this->input->post('telefono'),
					'fecha_nac' => $this->input->post('fecha_nac'),
					'contraseña' => md5($this->input->post('contraseña'))
					$registro_usuario = new UsuarioModel;
					$checking = $registro_usuario->registro($usuario);
					if($checking) {
						$this->session->set_flashdata('status','Registro exitoso , iniciá sesión ') ;
						redirect(base_url('Auth/LoginController')) ;
					}
				else{
					$this->session->set_flashdata('status','Falló su registro') ;
					redirect(base_url('registro')) ;
					}
				}
		}
	}

?>