<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_slider', 'model_especialidad', 'model_porque_elegirnos', 'model_testimonio', 'model_seguro'));
    }
	public function index()
	{
        $data['arrSliders'] = $this->model_slider->cargar_sliders_para_home();
        $data['arrEspecialidades'] = $this->model_especialidad->cargar_especialidades_home();
        $data['arrPorqueElegirnos'] = $this->model_porque_elegirnos->cargar_porque_elegirnos();
        $data['arrTestimonios'] = $this->model_testimonio->cargar_testimonio_home();
        $data['arrSeguros'] = $this->model_seguro->cargar_seguro_home();
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
