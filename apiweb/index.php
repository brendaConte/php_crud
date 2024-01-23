<?php 

$host="localhost";
$usuario="root";
$password="";
$basededatos="crud_codeigniter";

$conexion= new mysqli($host, $usuario, $password, $basededatos);

if($conexion-> connect_error) {
	die ("Conexion no establecida". $conexion->connect_error);
}

header("Content-Type: application/json");

$metodo= $_SERVER['REQUEST_METHOD'];

$path= isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';

$buscarId= explode('/', $path ) ;

$id = ($path!=='/') ? end($buscarId) : null;

switch ($metodo) {

	// consulta SELECT

	case 'GET':
	/*	echo" Consulta de registros - GET" ;*/
		consulta($conexion) ;
	break;

	// INSERT
	 case 'POST':
	  /*echo " Insertar registros - POST" ;*/
	 	crear($conexion) ;
	 break;

	 //UPDATE
	 case 'PUT':
		 /*echo " Edicion de registros - PUT" ;*/
		 actualizar($conexion, $id) ;
	 break;

	//DELETE
	 case 'DELETE':
	 	/*echo " Eliminacion de registros - DELETE" ;*/
	 	eliminar($conexion, $id) ;
	 break;

	default:
	echo " Metodo no permitido" ;
	break;

}

function consulta ($conexion) {
	$sql= "SELECT * FROM usuarios";
	$resultado= $conexion->query($sql); 

	if($resultado) {
		$datos= array();
		while($fila= $resultado->fetch_assoc()) {
			$datos[]= $fila;

		}
		echo json_encode($datos);
	}
}

function crear($conexion) {
	$dato= json_decode(file_get_contents('php://input'),true);
	$nombre= $dato['nombre'];

	$sql= "INSERT INTO usuarios(nombre) VALUES ('$nombre')";
	$resultado= $conexion->query($sql) ;

	if($resultado) {
		$dato['id']= $conexion->insert_id;
		echo json_encode($dato);
	}
	else{
		echo json_encode(array('error'=>'Error al crear usuario'));
			}
	}

function eliminar($conexion, $id) {
	//porque no me devuelve el msje de error??
	echo "Eliminado - DELETE";

	$sql="DELETE FROM usuarios WHERE id=$id" ;
	$resultado= $conexion->query($sql) ;

	if($resultado) {
		echo json_encode(array('mensaje'=>'usuario borrado'));
	}
	else{
		echo json_encode(array('error'=>'error al eliminar usuario'));
	}
}

function actualizar($conexion, $id) {

$dato= json_decode(file_get_contents('php://input'),true) ;
$nombre= $dato['nombre'] ;

echo "El id a editar es: ".$id. " con el dato ".$nombre ;

$sql= "UPDATE usuarios SET nombre = '$nombre' WHERE id=$id ";

$resultado= $conexion->query($sql) ;

if($resultado) {
		echo json_encode(array('mensaje'=>'usuario actualizado'));
	}
	else{
		echo json_encode(array('error'=>'error al actualizar usuario'));
	} 
}


?>