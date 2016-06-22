$collection = $database->tb_eventoDetalle;
	$documento = $collection->find(array("NumLikes" =>array('$gt'=>limite))); 
	$data = array();
		
	foreach ($documento as $doc) {
		$doc["fecha"] = date('Y-m-d' ,$doc["fecha"]->sec);
		$data[] = $doc;
	}
	$mongodb->close();
	echo json_encode($data);

	/*guardar imagenes*/
	//comprobar que el archivo se ha subido correctamente
	/*if($_FILES['image']['error']!==0){
		die("Error al subir imagen. Error codigo:".$_FILES['image']['error']);
	}

	//conectar al servidor de mongoDB
	$gridFS = $mongodb->db_Evento->getGridFS();

	$filename = $_FILES['image']['name'];
	$filetype = $_FILES['image']['type'];
	$tmpfilepath = $_FILES['image']['tmp_name'];//aqui se almacena la imagen
	$caption =$_POST['caption'];

	//almacenar el archivo subido
	$id = $gridFS->storeFile($tmpfilepath,array('filename' => $filename, 'filetype'=>$filetype,'caption'=>$caption));

	echo $id;*/

	/*mostrar imagenes*/

	/*$gridFS = $mongodb->db_Evento->getGridFS();
	$image = $gridFS->findOne(array("filename"=>"header.png"));
	$imageFile = $image->getBytes();
	//header('Content-type:image/png');
	
	echo json_encode($imageFile);*/

	/*
	header("Content-Length: ". strlen($imageFile));
	ob_clean();*/

	//echo $imageFile;