<?php
class Model_promocion extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function m_cargar_promociones()
	{
		$this->db->select('pr.idpromocion, pr.titulo, pr.foto');
		$this->db->from('promocion pr');
		$this->db->where('pr.estado', 1);
		$this->db->where('pr.visible', 1); 
		return $this->db->get()->result_array();
	}
}
