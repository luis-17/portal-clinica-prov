<?php
class Model_contacto_pe extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function m_registrar_contacto_pe($arrData)
	{
		return $this->db->insert('contacto_pe', $arrData);
	}

}
