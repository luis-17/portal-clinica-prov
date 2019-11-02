<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convenio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_convenio', 'model_seguro'));
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        // $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'convenio'; 
        $data['arrConvenios'] = $this->model_convenio->m_cargar_convenios();
        $data['arrSeguros'] = $this->model_seguro->cargar_seguro_home();
        // array_unshift($data['arrAbc'], "TODOS LOS MÉDICOS");
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'promocion'=> NULL,
            'convenio'=> '-active',
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('convenio',$data);
    }
}
