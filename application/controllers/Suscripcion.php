<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suscripcion extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_suscripcion'));
    }
	public function registrar()
	{
        $allInputs = json_decode(trim($this->input->raw_input_stream),true);
        // var_dump($allInputs, '$allInputs fgfg');
        $arrData['message'] = 'Error al registrar la suscripción, inténtelo nuevamente';
        $arrData['flag'] = 0;
        // VALIDACIONES
        $this->db->trans_start();
        $arrParams = array(
            'fecha' => date('Y-m-d H:i:s'),
            'correo' => $allInputs['correo'],
        );
        if($this->model_suscripcion->m_registrar($arrParams)) {
            $arrData['message'] = 'Se registraron los datos correctamente';
            $arrData['flag'] = 1;
        }
        $this->db->trans_complete();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($arrData));
	}

}
