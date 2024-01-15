<?php

class EntradasModel extends CI_Model {

	public function registro($entradas) {		
		$this->db->insert('entradas', $entradas);

	}

	public function seleccionar_todo() {
		$this->db->select('*');
		$this->db->from('entradas');
		return $this->db->get()->result();
	}

	public function eliminar($id) {
		$this->db->from('entradas');
		$this->db->where('id',$id);
		$this->db->delete('entradas');
	}

	public function editar($entrada) {
		$this->db->where('id',$entrada['id']);
		$this->db->update('entradas', $entrada);
	}

	public function get_entrada($id = 0){

		$this->db->select('*');
		$this->db->from('entradas');
		$this->db->join('usuarios', 'usuarios.id = entradas.id_usuario', 'left');
		$this->db->where('entradas.id', $id);

		$query = $this->db->get()->row();
	
		return $query;
	}
}