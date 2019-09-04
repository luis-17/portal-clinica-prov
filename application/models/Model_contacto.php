<?php
class Model_contacto extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function m_registrar_contacto($arrData)
	{
		return $this->db->insert('contacto', $arrData);
	}

}
