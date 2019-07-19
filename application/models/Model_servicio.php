<?php
class Model_servicio extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function cargar_servicios()
	{
		$this->db->select('s.idservicio, s.nombre, s.alias, s.descripcion, s.foto');
		$this->db->from('servicio s');
		$this->db->where('s.estado', 1); 
		return $this->db->get()->result_array();
	}
	public function cargar_servicios_menu()
	{
		$this->db->select('s.idservicio, s.nombre, s.alias, s.image_servicio, s.descripcion_html');
		$this->db->from('servicio s');
		$this->db->where('s.visible', 1); 
		$this->db->where('s.visible_menu', 1);
		return $this->db->get()->result_array();
	}
	// public function obtener_servicio_por_alias($alias)
	// {
	// 	$this->db->select('s.idservicio, s.nombre, s.alias, s.descripcion, s.foto');
	// 	$this->db->from('servicio s');
	// 	$this->db->where('s.alias', $alias); 
	// 	return $this->db->get()->row_array();
	// }
}
