<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mision extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
    }
	public function index()
	{
        $data['activeSelected'] = 'nosotros'; 
		$data['active'] = array(
            'inicio'=> NULL,
            'nosotros'=> '-active',
            'servicios'=> NULL,
            'clientes'=> NULL,
            'contacto'=> NULL
        );
		$this->load->template('mision',$data);
	}
}
