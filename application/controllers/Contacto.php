<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_contacto'));
    }
	public function index()
	{
		
        if( $this->input->post('nombres') ){ 
            $arrData = array(
                'nombres'=> $this->input->post('nombres'),
                'empresa'=> $this->input->post('empresa'),
                'telefono'=> $this->input->post('telefono'),
                'correo'=> $this->input->post('correo'),
                'consulta'=> $this->input->post('consulta'),
                'fecha_registro'=> date('Y-m-d H:i:s') 
            ); 
            if($this->model_contacto->m_registrar_contacto($arrData)){
                $this->session->set_flashdata('bool_info', 'ok');
            }else{
                $this->session->set_flashdata('bool_info', 'error');
            }
            $this->envioCorreo($arrData); 
            redirect('/contactanos'); 
            exit(); 
        }else{
            $data['active'] = array( 
                'inicio'=> NULL,
                'especialidades'=> NULL,
                'conocenos'=> NULL,
                'staff_medico'=> NULL,
                'servicios'=> NULL,
                'noticias'=> NULL,
                'contactanos'=> '-active',
            );
            $this->load->template('contacto',$data); 
        }
	}
    private function envioCorreo($arrData)
    {
        $this->load->library('My_PHPMailer'); 
        $htmlCorreo = '<div class="container-mensaje"> 
            <h2 class="header"> ¡'.strtoupper($arrData['nombres']).' te quiere contactar! </h2> 
            <ul class="list-info">
                <li> <label> NOMBRES Y APELLIDOS </label> <span>'.$arrData['nombres'].'</span> </li> 
                <li> <label> EMPRESA </label> <span>'.$arrData['empresa'].'</span> </li> 
                <li> <label> CORREO </label> <span>'.$arrData['correo'].'</span> </li> 
                <li> <label> TELEFONO </label> <span>'.$arrData['telefono'].'</span> </li>
                <li> <label> CONSULTA: </label> <span>'.$arrData['consulta'].'</span> </li> 
            </ul>
            <p>'.$arrData['fecha_registro'].'</p>
        </div>'; 
        $asunto    = '¡'.$arrData['nombres'].' te quiere contactar!';
        // $mensaje   = 'Hola '.$arrData['nombres']; 
        // $cabeceras = 'From: dcisneros@dcyjvasociados.com' . "\r\n" .
        //     'Reply-To: dcisneros@dcyjvasociados.com' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // mail($para, $titulo, $mensaje, $cabeceras);
        /*
            define('SMTP_HOST','mail.clinicaprovidencia.pe');
            define('SMTP_PORT','587'); // 25 465 587
            define('SMTP_USERNAME','citasenlinea@clinicaprovidencia.pe');
            define('SMTP_PASSWORD','Cp2019xyz');
            define('SMTP_SECURE','tls'); // tls ssl
        */

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
        $mail->Send();
    }
}
