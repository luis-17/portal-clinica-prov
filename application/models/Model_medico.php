<?php
class Model_medico extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function m_cargar_staff_medico($paramPaginate, $paramDatos)
	{
		$this->db->select('md.idmedico, md.nombres, md.ap_paterno, md.ap_materno, md.cmp, md.rne, md.lema, md.estudios_html, md.foto');
		$this->db->select('esp.idespecialidad, esp.nombre AS especialidad',FALSE);
		$this->db->from('medico md');
		$this->db->join('especialidad_medico em', 'md.idmedico = em.idmedico');
		$this->db->join('especialidad esp', 'em.idespecialidad = esp.idespecialidad');
		$this->db->where('md.visible', 1);
		$this->db->where('em.estado_em', 1);
		if( !empty($paramDatos['medicoAbc']) ){
			$this->db->like('UPPER(LEFT(md.nombres, 1))', strtoupper($paramDatos['medicoAbc']));
		}
		if( !empty($paramDatos['medicoStr']) ){
			$this->db->like("CONCAT(COALESCE(md.nombres,''), ' ', COALESCE(md.ap_paterno,''), ' ', COALESCE(md.ap_materno,''))", $paramDatos['medicoStr']); 
		}
		if(!empty($paramDatos['idespecialidad']) && $paramDatos['idespecialidad'] !== 'ALL' ){ 
			$this->db->where('esp.idespecialidad', $paramDatos['idespecialidad']); 
		}
		if( $paramPaginate['sortName'] ){
			$this->db->order_by($paramPaginate['sortName'], $paramPaginate['sort']);
		}
		if( $paramPaginate['firstRow'] || $paramPaginate['pageSize'] ){
			$this->db->limit($paramPaginate['pageSize'],$paramPaginate['firstRow'] );
		}
		return $this->db->get()->result_array();
	}
	public function m_count_staff_medico($paramPaginate, $paramDatos)
	{
		$this->db->select('COUNT(*) AS contador');
		$this->db->from('medico md');
		$this->db->join('especialidad_medico em', 'md.idmedico = em.idmedico');
		$this->db->join('especialidad esp', 'em.idespecialidad = esp.idespecialidad');
		$this->db->where('md.visible', 1);
		$this->db->where('em.estado_em', 1);
		// $this->db->where('esp.visible_home', 1);
		if( !empty($paramDatos['medicoAbc']) ){
			$this->db->like('UPPER(LEFT(md.nombres, 1))', strtoupper($paramDatos['medicoAbc']));
		}
		if( !empty($paramDatos['medicoStr']) ){
			$this->db->like("CONCAT(COALESCE(md.nombres,''), ' ', COALESCE(md.ap_paterno,''), ' ', COALESCE(md.ap_materno,''))", $paramDatos['medicoStr']); 
		}
		if(!empty($paramDatos['idespecialidad']) && $paramDatos['idespecialidad'] !== 'ALL' ){ 
			$this->db->where('esp.idespecialidad', $paramDatos['idespecialidad']); 
		}
		return $this->db->get()->row_array();
	}
}
