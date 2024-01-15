<?php

class UsuarioModel extends CI_Model {

	public function registro($usuario) {		
		$this->db->insert('usuarios', $usuario);

	}

	public function seleccionar_todo() {
		$this->db->select('*');
		$this->db->from('usuarios');
		return $this->db->get()->result();
	}
	public function eliminar($id) {
		$this->db->from('usuarios');
		$this->db->where('id',$id);
		$this->db->delete('usuarios');
		
	}
	public function editar($usuario) {
		
		$this->db->where('id',$usuario['id']);
		$this->db->update('usuarios', $usuario);
	}

	public function get_usuario_entradas($id = 0){

		$this->db->select('*, usuarios.id as id_user, entradas.id as id_entrada');
		$this->db->from('entradas');
		$this->db->join('usuarios', 'usuarios.id = entradas.id_usuario', 'left');
		$this->db->where('usuarios.id', $id);
		$query = $this->db->get()->result();
		return $query;
	}
	

}

?>