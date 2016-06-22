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

		function __construct($idUser,$idEvento,$Title,$date,$hour,$address,$city,$country,$likes,$lat,$long,$picture){
			$this->Id_usuario = $idUser;
			$this->Id_evento = $idEvento;
			$this->Titulo = $Title;
			$this->Fecha = $date;
			$this->Hora = $hour;
			$this->Direccion =$address;
			$this->Ciudad = $city;
			$this->Pais = $country;
			$this->NumLikes = $likes;
			$this->Latitud = $lat;
			$this->Longitud = $long;
			$this->Imagen = $picture;
		}

		function almacenarInformacion(){

		}
	}
	
?>