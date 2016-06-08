<?php
	$jsondata = $_POST['valor'];
	echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>