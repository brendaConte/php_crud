<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function users_get()
    {

    }

    public function saludo_get() {
    $this->response( 'hello world',200);

    }

    //funcion que recibe un parametro por medio de la URL :
    public function saludo_url_get() {
        if (isset($_GET['saludo']) && isset($_GET['id'])) {
            $this->response($_GET['saludo'].' '.$_GET['id'], 200);
        }
            $this->response('un saludito', 200);
        }

  //funcion que recibe un parametro por medio del header :
    public function saludo_header_post () {
    $datos = array(
        'saludo'=> $this->head('saludo'));
    $this->response($datos['saludo'],200);
    }

  //funcion que recibe un parametro por medio del body en formato json :
    public function saludo_body_post() {
        $valores= $this->request->body;
        $this->response($valores,200); 
    }

    //funcion que recibe un parametro como si fuera un formulario post :
    public function saludo_bodyform_post() {
    $datos= array (
        'id' => $this->post('id')
    );
    $this->response($datos, 200);
    }
    

}