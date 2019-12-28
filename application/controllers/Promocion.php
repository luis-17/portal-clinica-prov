<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocion extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_promocion'));
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        $data['activeSelected'] = 'promocion';
        $data['arrPromociones'] = $this->model_promocion->m_cargar_promociones();
        $data['fSeo'] = $this->model_pagina->m_obtener_pagina('promocion');
        $data['arrAbc'] = range('A', 'Z');
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'promocion'=> '-active',
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('promocion',$data);
    }
}
