<?php
	require 'conection.php';

	class Evento{
		private $Id_usuario;
		private $Id_evento;
		private $Titulo;
		private $Fecha;
		private $Hora;
		private $Direccion;
		private $Ciudad;
		private $Pais;
		private $NumLikes;
		private $Latitud;
		private $Longitud;
		private $Imagen;

		//function __construct($idUser,$idEvento,$Title,$date,$hour,$address,$city,$country,$likes,$lat,$long,$picture){
		function __construct(){
			$this->Id_usuario = $POST['idUsuario'];
			$this->Id_evento = $POST['idEvento'];
			$this->Titulo = $POST['titulo'];
			$this->Fecha = $POST['fecha'];
			$this->Hora = $POST['hora'];
			$this->Direccion =$POST['direccion'];
			$this->Ciudad = $POST['ciudad'];
			$this->Pais = $POST['pais'];
			$this->NumLikes = $POST['likes'];
			$this->Latitud = $POST['latitud'];
			$this->Longitud = $POST['longitud'];
			$this->Imagen = $POST['imagen'];
		}

		function almacenarInformacion(){
			$collection->insert(array($this->Id_usuario,$this->Id_evento,$this->Titulo,$this->Fecha,$this->Hora,$this->Direccion,$this->Ciudad,$this->Pais,$this->NumLikes,$this->Latitud, $this->Longitud,$this->Imagen)); 
			$mongodb->close();
		}

		function modificarEvento(){
			
		}
	}

	$event =  new Evento();

	
?>