angular.module("Myfirstapp",[])
	.controller("FirstController",function($scope,$http){
		/*$scope.posts=[]; 
		$scope.populares=[];
		$scope.porIniciar=[];*/

		$http.get("./php/populares.php")
			.success(function(data){
				$scope.posts = data;
			})
			.error(function(err){
			});
		

		$scope.eventosPopulares = function(){

			$("#eventosPopulares").remove();
			$("#contenedor").append('<section class="content-header" id="eventosPopulares"><h1>Eventos Populares</h1><ol class="breadcrumb"><li><a href="index2.html"><i class="fa fa-home"></i> Home</a></li><li class="active">Eventos</li></ol></section>');
			$("#eventosPopulares").append('<table id="tabla"><tr><td ng-repeat="post in populares"><section class="evento"><section class="flip"><section class="front"><img src="images/eventos/clei.jpg" alt="Norway" style="width:240px ;height: 200px;"></section><section class="back"><p>{{post.Portada}}</p><button class="boton3" id="even1" data-toggle="modal" data-target={{"#"+post.Id_evento}}>info</button></section></section><section class="titulo" id="title">{{post.Titulo}}</section></td></tr></table>');
			$http.get("./php/populares.php")
			.success(function(data){
				$scope.populares = data;
			})
			.error(function(err){

			});
		}

		$http.get("./php/por_iniciar.php")
			.success(function(data){			
				$scope.porIniciar = data;
			})
			.error(function(err){

			});


		/*******************************************************************/
		/*$scope.addPost = function(){
			$http.post("http://jsonplaceholder.typicode.com/posts",{ //esta parte son los parametros que queremos que se envien
				title: $scope.newPost.title,
				body: $scope.newPost.body,
				userId: 1
			})
			.success(function(data,status,headers,config){//puede recibir mas parametros ademas de data
															//status de la peticion, los encabezados y la configuracion
															//cuando el status de la peticion trae un error,ndeciamos que el callback
															//que se ejecuta es este que viene en error y no el que viene en success
				$scope.posts.push($scope.newPost);
				$scope.newPost = {};
			})
			.error(function(error,status,headers,config){
				console.log(error);
			});
		}*/	

	}); 