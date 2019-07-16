<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function obtener_parametros_configuracion(){
		$ci =& get_instance();
    	$arrConfig = array();
    	$lista = $ci->model_configuracion->m_get_configuraciones();
    	foreach ($lista as $key => $row) {
    		$arrConfig[$row['clave']]['valor1'] = $row['valor1'];
    		$arrConfig[$row['clave']]['valor2'] = $row['valor2'];
    	}
		return $arrConfig;
	}