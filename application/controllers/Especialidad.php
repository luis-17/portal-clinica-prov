<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidad extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_medico', 'model_especialidad', 'model_servicio'));
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        // $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'especialidad'; 
        $data['arrEspecialidades'] = $this->model_especialidad->m_cargar_especialidades();
        // $data['arrAbc'] = range('A', 'Z');
        // array_unshift($data['arrAbc'], "TODOS LOS MÉDICOS");
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> '-active',
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('especialidad',$data);
    }
    public function ficha($uri)
    {
        $data['fEspecialidad'] = $this->model_especialidad->get_especialidad_por_uri($uri); 
        $dataMedicos = $this->model_medico->m_cargar_medicos_especialidad($data['fEspecialidad']['idespecialidad']);
        $arrMedicos = array();
        foreach ($dataMedicos as $key => $row) {
            $arrHorarios = $this->model_medico->m_cargar_horario_medico($row['idmedico']);
            array_push($arrMedicos,
                array(
                    'idmedico' => $row['idmedico'],
                    'medico'=> ucwords(replaceAccentMayus($row['nombres'].', '.$row['ap_paterno'].' '.$row['ap_materno'])),
                    'nombres' => $row['nombres'],
                    'ap_paterno' => $row['ap_paterno'],
                    'ap_materno' => $row['ap_materno'],
                    'especialidad'=> $row['especialidad'],
                    'tipo_colegiatura' => $row['tipo_colegiatura'],
                    'cmp' => $row['cmp'],
                    'rne' => $row['rne'],
                    'lema' => $row['lema'],
                    'estudios_html' => base64_encode($row['estudios_html']),
                    'foto' => $row['foto'],
                    'foto_perfil' => $row['foto_perfil'],
                    'horarios'=> $arrHorarios,
                    'json'=> NULL
                )
            );
            $arrMedicos[$key]['json'] = json_encode($arrMedicos[$key]);
        }
        $data['arrServicios'] = $this->model_servicio->m_cargar_servicios_esp();
        $data['arrMedicos'] = $arrMedicos;
        $data['activeSelected'] = 'especialidad'; 
        
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> '-active',
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('ficha-especialidad',$data);
    }
}