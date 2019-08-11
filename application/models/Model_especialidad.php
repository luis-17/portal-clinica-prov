<?php
class Model_especialidad extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function cargar_especialidades_home()
	{
		$this->db->select('esp.idespecialidad, esp.nombre, esp.icono_home, esp.uri');
		$this->db->from('especialidad esp');
		$this->db->where('esp.visible', 1); 
		$this->db->where('esp.visible_home', 1);
		return $this->db->get()->result_array();
	}
	public function m_cargar_especialidades()
	{
		$this->db->select('esp.idespecialidad, esp.nombre, esp.icono_home, esp.uri');
		$this->db->from('especialidad esp');
		$this->db->where('esp.visible', 1);
		return $this->db->get()->result_array();
	}
	public function get_especialidad_por_uri($uri)
	{
		$this->db->select('esp.idespecialidad, esp.nombre, esp.icono_home, esp.uri, esp.descripcion_html, esp.image_banner, esp.tiene_landing');
		$this->db->from('especialidad esp');
		$this->db->where('esp.uri', $uri);
		return $this->db->get()->row_array();
	}
}
