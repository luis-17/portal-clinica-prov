<?php
class Model_especialidad extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function cargar_especialidades_home()
	{
		$this->db->select('esp.idespecialidad, esp.nombre, esp.icono_home');
		$this->db->from('especialidad esp');
		$this->db->where('esp.visible', 1); 
		$this->db->where('esp.visible_home', 1);
		return $this->db->get()->result_array();
	}
	public function m_cargar_especialidades()
	{
		$this->db->select('esp.idespecialidad, esp.nombre, esp.icono_home');
		$this->db->from('especialidad esp');
		$this->db->where('esp.visible', 1);
		return $this->db->get()->result_array();
	}
}
