<?php
class Model_testimonio extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function cargar_testimonio_home()
	{
		$this->db->select('ts.idtestimonio, ts.paciente, ts.foto, ts.testimonio_html');
		$this->db->from('testimonio ts');
		$this->db->where('ts.visible_home', 1);
		$this->db->where('ts.visible', 1); 
		return $this->db->get()->result_array();
	}
}
