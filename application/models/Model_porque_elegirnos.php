<?php
class Model_porque_elegirnos extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function cargar_porque_elegirnos()
	{
		$this->db->select('pe.idporqueelegirnos, pe.nombre, pe.icon, pe.uri, pe.visible');
		$this->db->from('porque_elegirnos pe');
		$this->db->where('pe.visible', 1); 
		return $this->db->get()->result_array();
	}
}
