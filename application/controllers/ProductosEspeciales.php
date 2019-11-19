<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosEspeciales extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_servicio', 'model_contacto_pe'));
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        if( $this->input->post('nombres') ){ 
            $arrData = array(
                'tipo_documento'=> $this->input->post('tipo_documento'),
                'numero_documento'=> $this->input->post('numero_documento'),
                'nombres'=> $this->input->post('nombres'),
                'apellidos'=> $this->input->post('apellidos'),
                'celular'=> $this->input->post('celular'),
                'correo'=> $this->input->post('correo'),
                'fecha_registro'=> date('Y-m-d H:i:s') 
            ); 
            if($this->model_contacto_pe->m_registrar_contacto_pe($arrData)){
                $this->session->set_flashdata('bool_info', 'ok');
            }else{
                $this->session->set_flashdata('bool_info', 'error');
            }
            $this->envioCorreo($arrData); 
            redirect('/productos-especiales'); 
            exit(); 
        }else{
            $data['activeSelected'] = 'productos-especiales';
            $data['arrServicios'] = $this->model_servicio->m_cargar_mas_servicios();

            $data['active'] = array(
                'inicio'=> NULL,
                'especialidades'=> NULL,
                'conocenos'=> NULL,
                'promocion'=> NULL,
                'staff_medico'=> NULL,
                'servicios'=> NULL,
                'vidasalud'=> NULL,
                'contactanos'=> NULL
            );
            $this->load->template('productos-especiales',$data);
        }
    }
    private function envioCorreo($arrData)
    {
        $this->load->library('My_PHPMailer'); 
        $htmlCorreo = '<div class="container-mensaje"> 
            <h2 class="header"> ¡'.strtoupper($arrData['nombres']).' se registró desde el Formulario de Productos Especiales! </h2> 
            <ul class="list-info">
                <li> <label> TIPO DE DOC. </label> <span>'.$arrData['tipo_documento'].'</span> </li> 
                <li> <label> NOMBRES </label> <span>'.$arrData['nombres'].'</span> </li> 
                <li> <label> APELLIDOS </label> <span>'.$arrData['apellidos'].'</span> </li> 
                <li> <label> CELULAR </label> <span>'.$arrData['celular'].'</span> </li> 
                <li> <label> CORREO </label> <span>'.$arrData['correo'].'</span> </li>
            </ul>
            <p>'.$arrData['fecha_registro'].'</p>
        </div>'; 
        $asunto    = '¡'.$arrData['nombres'].' te quiere contactar!';
        $mail = new PHPMailer();
        $mail->IsSMTP(true);
        $mail->SMTPDebug = false;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = 'tls'; // ssl tls
        $mail->Host = 'mail.clinicaprovidencia.pe';
        $mail->Port = 587;// 143; // 587; // 25 465 587
        $mail->Username =  'citasenlinea@clinicaprovidencia.pe';
        $mail->Password = 'Cp2019xyz';
        $mail->SetFrom('citasenlinea@clinicaprovidencia.pe','Clinica Providencia');
        $mail->AddReplyTo('citasenlinea@clinicaprovidencia.pe','Clinica Providencia');
        $mail->Subject = $asunto;
        $mail->IsHTML(true);
        $mail->AltBody = $htmlCorreo;
        $mail->MsgHTML($htmlCorreo);
        $mail->CharSet = 'UTF-8';

        $mail->addAddress('jravello@clinicaprovidencia.pe');
        $mail->addAddress('luisls1717@gmail.com');
        $mail->addAddress('marketing@clinicaprovidencia.pe');
        $mail->Send();
    }
}
