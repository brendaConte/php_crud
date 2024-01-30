<?php

class UsuarioModel extends CI_Model {

	public function registro($usuario) {	
		$usuario['contraseña'] = password_hash($usuario['contraseña'], PASSWORD_DEFAULT);	
		$respuesta = $this->db->insert('usuarios', $usuario);
		return $respuesta;
	}

	public function loginUser($usuario) {
		$this->db->select('*');
		$this->db->where('email', $usuario['email']);
		$this->db->where('contraseña', $usuario['contraseña']);
		$this->db->from('usuarios');
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->row();
		}else {
			return false;
		}
	}


	public function verificar_credenciales($email, $contraseña) {
        $this->db->select('id, contraseña');
        $this->db->from('usuarios');
        $this->db->where('email', $email);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $usuario = $query->row();
            // Verificar la contraseña utilizando password_verify
            if (password_verify($contraseña, $usuario->contraseña)) {
                // Contraseña válida
                return $usuario->id;
            }
        }
        // Credenciales no válidas
        return false;
    }

	public function seleccionar_todo() {

		$this->db->select('*');
		$this->db->from('usuarios');
		return $this->db->get()->result();
	/*
		$sql = "SELECT * from usuarios";                            
		$sql .= " WHERE 1=1";
		if($edad > 10){
			$sql .= " edad>10 ";

		$result = $this->db->query($sql);

		return $result->results(); }*/ }

	public function eliminar($id) {
		$this->db->from('usuarios');
		$this->db->where('id',$id);
		$this->db->delete('usuarios');

	/*	$sql = "DELETE FROM usuarios WHERE id = $id" ;*/
	}

	public function editar($usuario) {
		
		$this->db->where('id',$usuario['id']);
		$this->db->update('usuarios', $usuario);

	/*	$sql = "UPDATE FROM usuarios WHERE id = $usuario[id]" ;*/
	}

	public function get_usuario_entradas($id = 0) {
	
	/* $this->db->select('*, usuarios.id as id_user, entradas.id as id_entrada');
		$this->db->from('entradas');
		$this->db->join('usuarios', 'usuarios.id = entradas.id_usuario', 'left');
		$this->db->where('usuarios.id', $id);
		$query = $this->db->get()->result();
		return $query;  */                                                        

		$sql = "SELECT usuarios.id FROM usuarios INNER jOIN entradas ON entradas.id_usuario=$id " ;

		    $sql = "SELECT entradas.*, usuarios.id as id_user, entradas.id as id_entrada
            FROM entradas
            LEFT JOIN usuarios ON usuarios.id = entradas.id_usuario
            WHERE usuarios.id = ?";

		$query = $this->db->query($sql, array($id));
			return $query->result();

	}
	
}

?>