<?php
class Model_seguro extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function cargar_seguro_home()
	{
		$this->db->select('sg.idseguro, sg.nombre, sg.descripcion, sg.logo');
		$this->db->from('seguro sg');
		$this->db->where('sg.estado_seg', 1); 
		return $this->db->get()->result_array();
	}
}
