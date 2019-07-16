<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
    }
	public function index()
	{
        $data['arrServicios'] = $this->model_servicio->cargar_servicios(); 
        $data['activeSelected'] = 'inicio'; 
		$data['active'] = array(
            'inicio'=> '-active',
            'nosotros'=> NULL,
            'servicios'=> NULL,
            'clientes'=> NULL,
            'contacto'=> NULL
        );
		$this->load->template('inicio',$data);
	}

}
