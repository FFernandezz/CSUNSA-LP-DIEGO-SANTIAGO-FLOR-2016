angular.module("Myfirstapp",[])
	.controller("FirstController",function($scope,$http){
		
		
			$http.get("./php/por_iniciar.php")
				.success(function(data){			
					$scope.porIniciar = data;
				})
				.error(function(err){
				
				});
	});
		