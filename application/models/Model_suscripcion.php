<?php
class Model_suscripcion extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function cargar_suscripciones()
	{
		$this->db->select('s.idsuscripcion, s.fecha, s.correo');
		$this->db->from('suscripcion s');
		return $this->db->get()->result_array();
	}
	public function m_registrar($arrData)
	{
		return $this->db->insert('suscripcion', $arrData);
	}
}
