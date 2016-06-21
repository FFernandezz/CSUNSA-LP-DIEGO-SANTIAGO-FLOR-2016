<?php
	try {
		$mongodb = new MongoClient();
		$database = $mongodb->db_Evento;
	} catch (MongoConnectionException $e) {
		echo "Error de conexión";
		exit();
	}
		
?>