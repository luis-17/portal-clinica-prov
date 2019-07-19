<?php
class Model_slider extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function cargar_sliders_para_home()
	{
		$this->db->select('sh.idsliderhome, sh.lema, sh.lema_alt, sh.link_button, sh.image_background, sh.image_lateral, sh.text_button');
		$this->db->from('slider_home sh');
		$this->db->where('sh.estado_sh', 1); 
		$this->db->where('sh.visible', 1); 
		return $this->db->get()->result_array();
	}
}
