<?php
	function fecha_letras($hora){
		if ( $hora >= 12)
			return " PM";
		else
			return " AM";
	}


	function generar_portada($texto){
		$sizeDescripcion = strlen($texto);
		if ($sizeDescripcion > 162){
			$portada = substr($texto,0, 163)."...";
			return $portada;
		}
		else{
			$texto;
		}
	}

?>