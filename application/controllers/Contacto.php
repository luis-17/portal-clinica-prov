<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
    }
	public function index()
	{
		
        if( $this->input->post('nombres') ){ 
            $arrData = array(
                'nombres'=> $this->input->post('nombres'),
                'telefono'=> $this->input->post('telefono'),
                'mail'=> $this->input->post('mail'),
                'mensaje'=> $this->input->post('mensaje'),
                'fecha_registro'=> date('Y-m-d H:i:s') 
            ); 
            if($this->model_contacto->registrar_contacto($arrData)){
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
                'nosotros'=> NULL,
                'servicios'=> NULL,
                'clientes'=> NULL,
                'contacto'=> '-active' 
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
                <li> <label> TELEFONO </label> <span>'.$arrData['telefono'].'</span> </li> 
                <li> <label> CORREO </label> <span>'.$arrData['mail'].'</span> </li> 
                <li> <label> MENSAJE: </label> <span>'.$arrData['mensaje'].'</span> </li> 
            </ul>
            <p>'.$arrData['fecha_registro'].'</p>
        </div>'; 

        $para      = 'dcisneros@dcyjvasociados.com'; // 'dcisneros@dcyjvasociados.com';
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
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = 'tls'; // ssl tls
        $mail->Host = 'us2.smtp.mailhostbox.com';
        $mail->Port = 25;// 143; // 587; // 25 465 587
        $mail->Username =  'dcisneros@dcyjvasociados.com';
        $mail->Password = 'C1sneros1979';
        $mail->SetFrom('dcisneros@dcyjvasociados.com','DAVIS CISNEROS GOMEZ');
        $mail->AddReplyTo('dcisneros@dcyjvasociados.com','DAVIS CISNEROS GOMEZ');
        $mail->Subject = $asunto;
        $mail->IsHTML(true);
        $mail->AltBody = $htmlCorreo;
        $mail->MsgHTML($htmlCorreo);
        $mail->CharSet = 'UTF-8';

        $mail->addAddress($para);
        $mail->Send();
    }
}
