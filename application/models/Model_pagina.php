<?php
class Model_pagina extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function m_obtener_pagina($key)
	{
		$this->db->select('pag.idpagina, pag.nombre, pag.titulo_seo, pag.meta_content_seo');
		$this->db->from('pagina pag');
		$this->db->where('pag.key', $key);
		return $this->db->get()->row_array();
	}
}
