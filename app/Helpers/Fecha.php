<?php

namespace App\Helpers;

class Fecha {

	public static function formato($fecha){
    	$tiempo = strtotime($fecha);
    	$nFecha = date('d/m/Y H:i a',$tiempo);
    	return $nFecha;
	}
}
