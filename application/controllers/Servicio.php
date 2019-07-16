<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }
    public function servicio($alias)
    {
        $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'servicios'; 
        $data['active'] = array(
            'inicio'=> NULL,
            'nosotros'=> NULL,
            'servicios'=> '-active',
            'clientes'=> NULL,
            'contacto'=> NULL
        );
        
        $this->load->template('detalle-servicio',$data);
    }
}
