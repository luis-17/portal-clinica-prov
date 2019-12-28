<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conocenos extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        $data['activeSelected'] = 'conocenos';
        $data['fSeo'] = $this->model_pagina->m_obtener_pagina('conocenos');
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> '-active',
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('conocenos',$data);
    }
}