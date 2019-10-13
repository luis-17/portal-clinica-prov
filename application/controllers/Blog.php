<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_blog', 'model_video'));
        $this->load->helper(array('fechas_helper'));
    }
    public function index()
    {
        // $data['fServicio'] = $this->model_servicio->obtener_servicio_por_alias($alias); 
        $data['activeSelected'] = 'vidasalud';
        $data['arrEntradasAle'] = $this->model_blog->m_cargar_entradas_aleatorias(3);
        // $data['arrAbc'] = range('A', 'Z');
        // array_unshift($data['arrAbc'], "TODOS LOS MÉDICOS");
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> ' -active',
            'contactanos'=> NULL,
        );
        $this->load->template('blog',$data);
    }
    public function entrada($uri)
    {
        $fEntrada = $this->model_blog->get_entrada_por_uri($uri);
        $fEntrada['fechaFormat'] = darFormatoFecha($fEntrada['fecha_publicacion']);
        $listaAle = $this->model_blog->m_cargar_entradas_aleatorias(3);
        $listaVideos = $this->model_video->cargar_videos_para_blog();
        $arrListado = array();
        foreach ($listaAle as $row) {
            $strFechaFormat = darFormatoFecha($row['fecha_publicacion']);
            array_push($arrListado,
                array(
                    'idblog' => $row['idblog'],
                    'uri' => $row['uri'],
                    'fecha_publicacion' => $row['fecha_publicacion'],
                    'imagen_preview' => $row['imagen_preview'],
                    'imagen_portada' => $row['imagen_portada'],
                    'titulo'=> $row['titulo'],
                    'fechaFormat' => $strFechaFormat,
                    'resumen' => $row['resumen'].'...'
                )
            );
        }
        // $arrListadoVideos = array();
        // foreach ($listaVideos as $row) {
        //     $strFechaFormat = darFormatoFecha($row['fecha_publicacion']);
        //     array_push($arrListadoVideos,
        //         array(
        //             'idblog' => $row['idblog'],
        //             'uri' => $row['uri'],
        //             'fecha_publicacion' => $row['fecha_publicacion'],
        //             'imagen_preview' => $row['imagen_preview'],
        //             'titulo'=> $row['titulo'],
        //             'fechaFormat' => $strFechaFormat,
        //             'resumen' => $row['resumen'].'...'
        //         )
        //     );
        // }
        $data['arrEntradasAle'] = $arrListado;
        $data['arrListadoVideos'] = $listaVideos;
        $data['fEntrada'] = $fEntrada;
        $data['activeSelected'] = 'vidasalud';
        $data['active'] = array(
            'inicio'=> NULL,
            'especialidades'=> NULL,
            'conocenos'=> NULL,
            'staff_medico'=> NULL,
            'servicios'=> NULL,
            'vidasalud'=> ' -active',
            'contactanos'=> NULL,
        );
        $this->load->template('ficha-blog',$data);
    }
    public function listar_blogs()
    { 
        $allInputs = json_decode(trim($this->input->raw_input_stream),true);
        $paramPaginate = $allInputs['paginate'];
        // $paramDatos = $allInputs['datos'];
        $lista = $this->model_blog->m_cargar_entradas($paramPaginate);
        $fContador = $this->model_blog->m_count_entradas($paramPaginate);
        //var_dump('hola'); exit();
        $arrListado = array();
        foreach ($lista as $row) {
            $strFechaFormat = darFormatoFecha($row['fecha_publicacion']);
            array_push($arrListado,
                array(
                    'idblog' => $row['idblog'],
                    'uri' => $row['uri'],
                    'fecha_publicacion' => $row['fecha_publicacion'],
                    'imagen_preview' => $row['imagen_preview'],
                    'imagen_portada' => $row['imagen_portada'],
                    'titulo'=> $row['titulo'],
                    'fechaFormat' => $strFechaFormat,
                    'resumen' => $row['resumen'].'...'
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