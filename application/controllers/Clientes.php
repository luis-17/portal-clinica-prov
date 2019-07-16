000<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
    }
	public function index()
	{
		$data['active'] = array(
            'inicio'=> NULL,
            'nosotros'=> NULL,
            'servicios'=> NULL,
            'clientes'=> '-active',
            'contacto'=> NULL
        );
		$this->load->template('cliente',$data);
	}
}
