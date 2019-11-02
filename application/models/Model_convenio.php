<?php
class Model_convenio extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function m_cargar_convenios()
	{
		$this->db->select('cv.idconvenio, cv.descripcion');
		$this->db->from('convenio cv');
		$this->db->where('cv.estado', 1); 
		// $this->db->where('cv.visible', 1); 
		return $this->db->get()->result_array();
	}
}
