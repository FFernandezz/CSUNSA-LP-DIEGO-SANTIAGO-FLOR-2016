<?php
	require 'conection.php';
	require 'funciones.php';

	define("limite", 24);

	$fecha = date('Y-m-d h:i:s');
	$fechaLimiteInferior = strtotime('+5 hours +1 hours',strtotime($fecha));
	$fechaLimiteInferior = date('Y-m-d h:i:s',$fechaLimiteInferior);

	$fecha2 = date('Y-m-d h:i:s');
	$fechaLimiteSuperior = strtotime('+5 hours +1 hours +30 minute',strtotime($fecha2));
	$fechaLimiteSuperior = date('Y-m-d h:i:s',$fechaLimiteSuperior);

	$collection = $database->tb_eventoDetalle;
	//$documento = $collection->find(array("Fecha"=> array('$gt' => new MongoDate(strtotime($fechaLimiteInferior)),'$lt' => new MongoDate(strtotime($fechaLimiteSuperior))))); 

	$documento = $collection->find(); 

	$fechaslist=array();

	$inferior = new MongoDate(strtotime($fechaLimiteInferior));
	$inferior = date('Y-m-d h:i:s',$inferior->sec);
	$superior = new MongoDate(strtotime($fechaLimiteSuperior));
	$superior = date('Y-m-d h:i:s',$superior->sec);

	echo $inferior;
	echo "<br>";
	echo $superior;


	$data = array();
		
	foreach ($documento as $doc) {
		$horaLetras = fecha_letras(date("H",$doc["Fecha"]->sec));
		$textoPortada = generar_portada($doc["Descripcion"]);
		///
		$fechaslist[] = $doc["Fecha"];
		///
		$doc["Portada"] = $textoPortada;
		$doc["Hora"] = date('h:i',$doc["Fecha"]->sec).$horaLetras;
		$doc["Fecha"] = date('Y-m-d' ,$doc["Fecha"]->sec);
		$data[] = $doc;

	}

	foreach ($fechaslist as $key) {
		echo "<br>";
		echo date('Y-m-d h:i:s',$key->sec);
	}
	$mongodb->close();
	//echo json_encode($data);
	
?>
