<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conocenos extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        // $this->load->model(array('model_medico', 'model_especialidad', 'model_servicio'));
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        // $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'conocenos'; 
        // $data['arrEspecialidades'] = $this->model_especialidad->m_cargar_especialidades();
        // $data['arrAbc'] = range('A', 'Z');
        // array_unshift($data['arrAbc'], "TODOS LOS MÉDICOS");
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