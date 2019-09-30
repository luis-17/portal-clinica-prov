<?php
class Model_video extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function cargar_videos_para_blog()
	{
		$this->db->select('vi.idvideo, vi.titulo, vi.url, vi.embed');
		$this->db->from('video vi');
		$this->db->where('vi.visible', 1);
		$this->db->where('vi.visible_blog', 1);
		$this->db->limit(3);
		return $this->db->get()->result_array();
	}
}
