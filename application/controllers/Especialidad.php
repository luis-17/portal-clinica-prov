<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidad extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_medico', 'model_especialidad'));
    }
    public function index()
    {
        // $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'especialidad'; 
        $data['arrEspecialidades'] = $this->model_especialidad->m_cargar_especialidades();
        // $data['arrAbc'] = range('A', 'Z');
        // array_unshift($data['arrAbc'], "TODOS LOS MÉDICOS");
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> '-active',
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'noticias'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('especialidad',$data);
    }
    public function ficha($uri)
    {
        $data['fEspecialidad'] = $this->model_especialidad->get_especialidad_por_uri($uri); 
        $data['activeSelected'] = 'especialidad'; 
        // $data['arrEspecialidades'] = $this->model_especialidad->m_cargar_especialidades();
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> '-active',
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'noticias'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('ficha-especialidad',$data);
    }
}