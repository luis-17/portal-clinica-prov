<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_servicio'));
    }
    public function ficha($uri)
    {
        $data['fServicio'] = $this->model_servicio->get_servicio_por_uri($uri);
        $data['arrServicios'] = $this->model_servicio->m_cargar_mas_servicios();
        $data['activeSelected'] = 'servicios';
        $data['fSeo'] = array(
            'titulo_seo'=> $data['fServicio']['titulo_seo'],
            'meta_content_seo'=> $data['fServicio']['meta_content_seo']
        );
        
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> '-active',
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('ficha-servicio',$data);
    }
}
