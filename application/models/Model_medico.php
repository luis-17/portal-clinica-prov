<?php
class Model_medico extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function m_cargar_staff_medico($paramPaginate, $paramDatos)
	{
		$this->db->select('md.idmedico, md.nombres, md.ap_paterno, md.ap_materno, md.cmp, md.rne, md.lema, md.estudios_html, md.foto, md.foto_perfil');
		$this->db->select('esp.idespecialidad, esp.nombre AS especialidad',FALSE);
		$this->db->from('medico md');
		$this->db->join('especialidad_medico em', 'md.idmedico = em.idmedico');
		$this->db->join('especialidad esp', 'em.idespecialidad = esp.idespecialidad');
		$this->db->where('md.visible', 1);
		$this->db->where('em.estado_em', 1);
		if( !empty($paramDatos['medicoAbc']) && $paramDatos['medicoAbc'] !== 'ALL' ){
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
		if( !empty($paramDatos['medicoAbc']) && $paramDatos['medicoAbc'] !== 'ALL' ){
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
	public function m_cargar_horario_medico($idmedico)
	{
		$this->db->select('md.idmedico, ho.idhorario, dia, hora_inicio, hora_fin');
		$this->db->from('medico md');
		$this->db->join('horario ho', 'md.idmedico = ho.idmedico');
		$this->db->where('md.idmedico', $idmedico);
		return $this->db->get()->result_array();
	}
	public function m_cargar_medicos_especialidad($idespecialidad)
	{
		// $this->db->select('md.idmedico');
		$this->db->select('md.idmedico, md.nombres, md.ap_paterno, md.ap_materno, md.cmp, md.rne, md.lema, md.estudios_html, md.foto, md.foto_perfil');
		$this->db->select('esp.idespecialidad, esp.nombre AS especialidad',FALSE);
		$this->db->from('medico md');
		$this->db->join('especialidad_medico em', 'md.idmedico = em.idmedico');
		$this->db->join('especialidad esp', 'em.idespecialidad = esp.idespecialidad');
		$this->db->where('em.idespecialidad', (int)$idespecialidad);
		$this->db->where('md.visible', 1);
		$this->db->where('em.estado_em', 1);
		$this->db->limit(3);
		return $this->db->get()->result_array();
	}
}
