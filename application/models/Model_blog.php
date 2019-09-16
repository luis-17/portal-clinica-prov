<?php
class Model_blog extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function m_cargar_entradas_aleatorias($number)
	{
		$this->db->select('SUBSTRING(bl.contenido_html,1,120) AS resumen', FALSE);
		$this->db->select('bl.idblog, bl.uri, bl.titulo, bl.imagen_preview, bl.fecha_publicacion');
		$this->db->from('blog bl');
		$this->db->where('bl.estado', 1);
		$this->db->order_by('rand()', false);
		$this->db->limit($number);
		return $this->db->get()->result_array();
	}
	public function m_cargar_entradas($paramPaginate)
	{
		$this->db->select('SUBSTRING(bl.contenido_html,1,120) AS resumen', FALSE);
		$this->db->select('bl.idblog, bl.uri, bl.titulo, bl.imagen_preview, bl.fecha_publicacion');
		$this->db->from('blog bl');
		$this->db->where('bl.estado', 1);
		if( $paramPaginate['firstRow'] || $paramPaginate['pageSize'] ){
			$this->db->limit($paramPaginate['pageSize'],$paramPaginate['firstRow'] );
		}
		return $this->db->get()->result_array();
	}
	public function m_count_entradas($paramPaginate)
	{
		$this->db->select('COUNT(*) AS contador');
		$this->db->from('blog bl');
		$this->db->where('bl.estado', 1);
		return $this->db->get()->row_array();
	}
	public function get_entrada_por_uri($uri)
	{
		$this->db->select('bl.idblog, bl.uri, bl.titulo, bl.imagen_preview, bl.contenido_html, bl.autor, bl.cargo_autor, 
			bl.fecha_publicacion, bl.fecha_creacion, bl.estado, bl.foto_autor');
		$this->db->from('blog bl');
		$this->db->where('bl.uri', $uri);
		$this->db->limit(1);
		return $this->db->get()->row_array();
	}
}
