<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_slider', 'model_especialidad'));
    }
	public function index()
	{
        $data['arrSliders'] = $this->model_slider->cargar_sliders_para_home();
        $data['arrEspecialidades'] = $this->model_especialidad->cargar_especialidades_home();
        $data['activeSelected'] = 'inicio'; 
		$data['active'] = array(
            'inicio'=> '-active',
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'noticias'=> NULL,
            'contactanos'=> NULL,
        );
		$this->load->template('inicio',$data);
	}

}
