<?php	
	require 'conection.php';
	require 'funciones.php';

	define("limite", 24);

	$fechalimite  = date('Y-m-d');
	$nuevafecha = strtotime ( '+1 day +5 hours' , strtotime ( $fechalimite ) ) ;
	$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
	$nuevafecha = $nuevafecha." 00:00:00";
	//echo $fecha_final;

	$fechaLimite = new MongoDate(strtotime($nuevafecha));

	$collection = $database->tb_eventoDetalle;
	$documento = $collection->find(array("NumLikes" =>array('$gt'=>limite),"Fecha"=> array('$gt' => $fechaLimite))); 
	$data = array();
		
	foreach ($documento as $doc) {
		$horaLetras = fecha_letras(date("H",$doc["Fecha"]->sec));
		$textoPortada = generar_portada($doc["Descripcion"]);
		

		$doc["Portada"] = $textoPortada;
		$doc["Hora"] = date('h:i',$doc["Fecha"]->sec).$horaLetras;
		$doc["Fecha"] = date('Y-m-d' ,$doc["Fecha"]->sec);
		$data[] = $doc;
	}
	$mongodb->close();
	echo json_encode($data);



?>
