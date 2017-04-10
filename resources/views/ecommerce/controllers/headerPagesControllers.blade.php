<script>
	
	angular.module('mypage').controller('headerPagesController', function($scope, $http, tourService, ngNotify){
		//Variaveis;

		$scope.dateNow = new Date();	

		$scope.cart = {{ $cart }};

		console.log($scope.cart);

		
		// Fim das Variaveis;

		//Funções;
		var listarCart = function(id){
			tourService.getCart(id).then(function onSuccess(response){			
				$scope.carts = response.data;			
				//console.log($scope.carts);				
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
				$scope.carts = [];
			});

		};

		//Get Session;

		

		var getSessionTour = function(name_session, $campo){
			tourService.getSession(name_session).then(function onSuccess(response){			
				$scope.name_user = "test: " + response.data;			
				//console.log($scope.carts);				
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
				return response.statusText;
			});

		};

		//getSessionTour('name_user', 'name_user');
		console.log($scope.name_user);
		// Fim Get Session;		
		
		var updateTotalPrice = function(id, total){
			tourService.updatePriceCart(id, total).then(function onSucess(response){
				console.log("total calculado: "+total);
			}, function onError(response){
				console.log("Erro ao atualizar o valor total.");
			});
		};

		$scope.showListCar = function(){
			listarCart({{ $cart }});
		}; 
		
		//Fim das Funções;
	});
 		

 	

</script>