<?php

class Usuario extends CI_Model {

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

	public function get_usuario_entradas(){
		$get_id = $this->input->post_get('id', TRUE);
		$this->db->select('*');
		$this->db->from('entradas');
		$this->db->join('usuarios', 'usuarios.id = entradas.id_usuario', 'left');
		$this->db->where('id_usuario', $get_id);

		$query = $this->db->get()->result();
		print_r($query);
	}

}

?>