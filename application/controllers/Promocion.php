<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocion extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_promocion'));
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        // $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'promocion'; 
        $data['arrPromociones'] = $this->model_promocion->m_cargar_promociones();
        $data['arrAbc'] = range('A', 'Z');
        // array_unshift($data['arrAbc'], "TODOS LOS MÉDICOS");
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'promocion'=> '-active',
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('promocion',$data);
    }
}
