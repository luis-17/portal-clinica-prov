<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffMedico extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_medico', 'model_especialidad'));
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
            'noticias'=> NULL,
            'contactanos'=> NULL,
        );
        $this->load->template('staff-medico',$data);
    }
    public function listar_staff_medico()
    { 
        $allInputs = json_decode(trim($this->input->raw_input_stream),true);
        $paramPaginate = $allInputs['paginate'];
        $paramDatos = $allInputs['datos'];
        $lista = $this->model_medico->m_cargar_staff_medico($paramPaginate,$paramDatos);
        $fContador = $this->model_medico->m_count_staff_medico($paramPaginate,$paramDatos);
        //var_dump('hola'); exit();
        $arrListado = array();
        foreach ($lista as $row) { 
            array_push($arrListado,
                array(
                    'idmedico' => $row['idmedico'],
                    'medico'=> $row['ap_paterno'].' '.$row['ap_materno'].', '.$row['nombres'],
                    'nombres' => $row['nombres'],
                    'ap_paterno' => $row['ap_paterno'],
                    'ap_materno' => $row['ap_materno'],
                    'especialidad'=> $row['especialidad'],
                    'cmp' => $row['cmp'],
                    'rne' => $row['rne'],
                    'lema' => $row['lema'],
                    'estudios_html' => $row['estudios_html'],
                    'foto' => $row['foto']
                )
            );
        }
        
        $arrData['datos'] = $arrListado;
        $arrData['paginate']['totalRows'] = $fContador['contador'];
        $arrData['paginate']['itemsByView'] = $paramPaginate['pageSize'];
        $arrData['message'] = '';
        $arrData['flag'] = 1;
        if(empty($lista)){
            $arrData['flag'] = 0;
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($arrData));
    }
}
