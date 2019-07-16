<?php
class Model_configuracion extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function m_get_configuraciones() 
	{
		$this->db->select('idconfiguracion,clave,valor1,valor2,descripcion');
		$this->db->from('configuracion');
		return $this->db->get()->result_array();
	}
}