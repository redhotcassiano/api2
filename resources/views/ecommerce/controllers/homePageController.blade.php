
<script>
	angular.module('home').controller('homeController', function($scope, $http, homeService){
		//Variaveis;
		console.log("test ok");

		var getHome = function(){
			homeService.getHome().then(function onSucess(response){
				$scope.data = response.data;
				console.log($scope.data);
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
			});
		}

		getHome();

		$scope.carts = [];


		//Funções;
		var listarCart = function(id){
			homeService.getCart(id).then(function onSuccess(response){			
				$scope.carts = response.data;			
				//console.log($scope.carts);				
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
				$scope.carts = [];
			});

		};

		var getSessionTour = function(name_session, $campo){
			homeService.getSession(name_session).then(function onSuccess(response){			
				$scope.name_user = "test: " + response.data;			
				//console.log($scope.carts);				
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
				return response.statusText;
			});

		};

		var createCart = function(ip){
			homeService.createCart(ip).then(function onSucess(response){
				console.log(response.data);
				$scope.name_user = response.data['name_user'];
				$scope.cart = response.data['cart'][0].id;
				listarCart($scope.cart);
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
			});
		}

		//Buscar a Localização do usuario;
		$.getJSON("http://ip-api.com/json/?callback=?", function(data) {
			$scope.localization = data;
			console.log($scope.localization);
			createCart($scope.localization.query);
		});

		//Buscar Passeios Novidades;
		
		var getToursNews = function(){
			homeService.getToursNews().then(function onSucess(response){
				console.log('Tours: '+response.data);
				$scope.toursNews = response.data;


			}, function onError(response){
				$scope.toursNews = null;
			});
		};

		getToursNews();
		




		
	});
</script>