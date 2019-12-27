<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffMedico extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_medico', 'model_especialidad'));
        $this->load->helper(array('otros_helper'));
    }
    public function index()
    {
        // $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'staff_medico'; 
        $data['arrEspecialidades'] = $this->model_especialidad->m_cargar_especialidades();
        $data['arrAbc'] = range('A', 'Z');
        // array_unshift($data['arrAbc'], "TODOS LOS MÉDICOS");
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'staff_medico'=> '-active',
            'servicios'=> NULL,
            'vidasalud'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('staff-medico',$data);
    }
    public function listar_staff_medico()
    { 
        // var_dump('hola');
        $allInputs = json_decode(trim($this->input->raw_input_stream),true);
        $paramPaginate = $allInputs['paginate'];
        $paramDatos = $allInputs['datos'];
        $lista = $this->model_medico->m_cargar_staff_medico($paramPaginate,$paramDatos);
        $fContador = $this->model_medico->m_count_staff_medico($paramPaginate,$paramDatos);
        // var_dump($fContador); exit();
        // var_dump('inicio foreach');
        $arrListado = array();
        foreach ($lista as $row) {
            $arrHorarios = $this->model_medico->m_cargar_horario_medico($row['idmedico']);
            array_push($arrListado,
                array(
                    'idmedico' => $row['idmedico'],
                    'medico'=> ucwords(replaceAccentMayus($row['nombres'].', '.$row['ap_paterno'].' '.$row['ap_materno'])),
                    'nombres' => $row['nombres'],
                    'ap_paterno' => $row['ap_paterno'],
                    'ap_materno' => $row['ap_materno'],
                    'especialidad'=> $row['especialidad'],
                    'reserva_cita'=> $row['reserva_cita'],
                    'tipo_colegiatura' => strtoupper($row['tipo_colegiatura']),
                    'cmp' => $row['cmp'],
                    'rne' => $row['rne'],
                    'lema' => $row['lema'],
                    'estudios_html' => base64_encode($row['estudios_html']),
                    'foto' => $row['foto'],
                    'foto_perfil' => $row['foto_perfil'],
                    'horarios'=> $arrHorarios
                )
            );
        }
        // var_dump('end foreach');
        $arrData['datos'] = $arrListado;
        $arrData['paginate']['totalRows'] = $fContador['contador'];
        $arrData['paginate']['itemsByView'] = $paramPaginate['pageSize'];
        $arrData['message'] = '';
        $arrData['flag'] = 1;
        // var_dump('222'); 
        if(empty($lista)){
            $arrData['flag'] = 0;
        }
        // var_dump($arrData); exit();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($arrData));
        // var_dump($arrData); exit();
    }
}
