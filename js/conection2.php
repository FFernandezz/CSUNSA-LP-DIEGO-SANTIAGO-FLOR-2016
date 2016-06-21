<?php
	$mongodb = new MongoClient();
	$database = $mongodb->db_Evento;
	//echo "conexion a la base de datos </br>";

	$collection = $database->tb_eventoDetalle;
	$documento = $collection->findOne(array("id_evento" => "event1"));
	$data = array();
	//echo json_encode($hola);
	foreach ($documento as $doc) {
		$data[] = $doc;
	}

	echo json_encode($data);
	//echo "Coleccion seleccionada </br>";

	/*******************ingresar datos*********************/
/*
	$documento  = array("id_usuario" => "user1", 
		                "id_evento" =>"event1",
		                "titulo"=>"Tributo a Pedro Suarez-Vertiz y Los Enanitos Verdes en Arequipa",
		                "descripcion" =>"El Quinque Retro Bar. presenta un especial con lo mejor del pop-rock en español.
Tributo a Pedro Suarez-Vertiz y a Los Enanitos Verdes. Disfruta en vivo con todos los temas de estos espectaculares bandas.",
						"fecha" => new MongoDate(strtotime("2016-06-25 00:00:00")),
						"hora" => "9 pm",
						"Direccion" =>" El Quinque. Av. Dolores L-25(al lado del parque)",
						"Ciudad" =>"Arequipa",
						"Pais" => "Perú",
						"NumLikes" => 20,
						"Latitud" => -16.433575,
						"Longitud" => -71.522274,
	);

	$collection -> insert($documento);
	echo "Se inserto el registro(documento)";*/

	/**********seleccionar datos*********************/
	/*$cursor = $collection->find();

	foreach ($cursor as $doc) {
		echo ($doc["descripcion"]);
	}*/

	/*************actualizar datos********************/
													     //tener cuidado!
	/*$collection->update(array("id_usuario"=>"user1"), array('$set' => array("Ciudad" =>"Trujillo")));
	echo "cambios hechos";*/
	/***********eliminar registros *******************/

	/*$collection->remove(array("Pais" => "Perú"));
	echo "se elimino documento";*/
	//en PHP los documentos estan representados por arrays



?>