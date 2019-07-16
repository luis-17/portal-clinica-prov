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
	public function obtener_servicio_por_alias($alias)
	{
		$this->db->select('s.idservicio, s.nombre, s.alias, s.descripcion, s.foto');
		$this->db->from('servicio s');
		$this->db->where('s.alias', $alias); 
		return $this->db->get()->row_array();
	}
}
