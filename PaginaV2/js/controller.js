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
		
		$scope.por_iniciar = function(){
			$http.get("./php/por_iniciar.php")
				.success(function(data){			
					$scope.porIniciar = data;
				})
				.error(function(err){

				});
		}


		


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