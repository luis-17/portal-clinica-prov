<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_servicio'));
    }
    // public function servicio($alias)
    // {
    //     $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias);
    //     $data['activeSelected'] = 'servicios';
    //     $data['active'] = array(
    //         'inicio'=> NULL,
    //         'especialidades'=> NULL,
    //         'conocenos'=> NULL,
    //         'staff_medico'=> NULL,
    //         'servicios'=> '-active',
    //         'vidasalud'=> NULL,
    //         'contactanos'=> NULL,
    //     );
    //     $this->load->template('detalle-servicio',$data);
    // }
    public function ficha($uri)
    {
        $data['fServicio'] = $this->model_servicio->get_servicio_por_uri($uri);
        $data['arrServicios'] = $this->model_servicio->m_cargar_mas_servicios();
        // var_dump($data['arrMedicos']); exit(); 
        $data['activeSelected'] = 'servicios';
        
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
