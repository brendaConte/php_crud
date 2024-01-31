<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class LoginController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('UsuarioModel');
	}

	public function index() {
			$this->load->view('includes/header');
			$this->load->view('login');
			$this->load->view('includes/footer');
	}

	public function login() {

			$this->form_validation->set_rules('email','E-mail', 'trim|required|valid_email');
			$this->form_validation->set_rules('contraseña','Contraseña', 'trim|required');
			if ($this->form_validation->run() == FALSE)
				{
					$this->index();
				}
			else
				{ 
					$usuario= [
						'email'=> $this->input->post('email'),
						'contraseña'=> $this->input->post('contraseña')
							];
					$user= new UsuarioModel;
					
					$result = $user->loginUser($usuario);
					
							if($result != FALSE)
							{
								echo 
								$auth_userdetails = [                                                                                                                     
								'nombre' =>$result->nombre,
								'email'=>$result->email ];
								
								$this->session->set_userdata('authenticated', '1');
								$this->session->set_userdata('auth_user', $auth_userdetails);
								$this->session->set_flashdata('status','Inicio de sesión exitoso');
								redirect(base_url('user_page')); //en esta vista traer las entradas del usuario que inicia sesión
							}
							else {
								$this->session->set_flashdata('status','E-mail o password invalido');
								redirect(base_url('login'));
							}
				}
	}

	public function user_page() {
		$this->load->view('user_page') ;
	}

}
