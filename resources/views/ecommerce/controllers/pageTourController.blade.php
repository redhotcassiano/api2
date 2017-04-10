<script>
	/*** You must include the dependency on 'ngMaterial' */
	angular.module('pag-produto').controller('TabController', ['$scope', function($scope) {
		$scope.tab = 1;

		$scope.setTab = function(newTab){
		    $scope.tab = newTab;
		};

		$scope.isSet = function(tabNum){
		   return $scope.tab === tabNum;
		};
	}]);


	angular.module('pag-produto').controller('pagProdutoController', function($scope, $http, tourService, ngNotify){
		//Variaveis;

		$scope.dateNow = new Date();	

		$scope.cart = {{ $tourInfo->cart[0]->id }};

		console.log($scope.cart);

		$scope.price = {{  $tourInfo->price_cost }};		

		$scope.parcela = {{  $tourInfo->number_parcela }};

		$scope.itens = [];

		$scope.carts = [];

		$scope.name_user = "{{ $tourInfo->name_user }}";

		$scope.email_user = "{{ $tourInfo->email_user }}";

		$scope.avatar_user = "{{ $tourInfo->avatar_user }}";
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
		//console.log($scope.name_user);
		// Fim Get Session;


		
		//console.log("total: "+ {{ $tourInfo->cart[0]->total_price }});
		$scope.addListCart = function(tour){
			tour['hour_tour'] = "8:00";
			tourService.cadastraTourCart(tour).then(function onSucess(response){
					var id = {{ $tourInfo->cart[0]->id }};
					var total = {{ $tourInfo->cart[0]->total_price }};
					total += tour['price_total_tour'];

					//Atualiza o total do Carrinho;
					updateTotalPrice(id, total);
					//
					
					ngNotify.set('O Passeio ' + tour['title'] +
								 ' Foi Adicionado com Sucesso!<br>', {
					    position: 'top',
					    sticky: true,
					    type: 'success',
					    html: true
				    	
						});
				}, function onError(response){
					ngNotify.set('O Passeio ' + tour['title'] +
								 ' Não Foi Adicionado ao Carrinho!', {
					    position: 'top',
					    sticky: true,
					    type: 'error',
					    html: true
				    	
						});
					console.log("Erro");
				});

			};

		var updateTotalPrice = function(id, total){
			tourService.updatePriceCart(id, total).then(function onSucess(response){
				console.log("total calculado: "+total);
			}, function onError(response){
				console.log("Erro ao atualizar o valor total.");
			});
		};

		$scope.showListCar = function(){
			listarCart({{ $tourInfo->cart[0]->id }});
		}; 

		//Buscar a Localização do usuario;
		$.getJSON("http://ip-api.com/json/?callback=?", function(data) {
			$scope.localization = data;
			//console.log($scope.localization);
		});

		//Buscar os comentarios do Tour;
		$scope.ativarComment = false;
		$scope.enviarComments = function(){
			$scope.ativarComment = !$scope.ativarComment;
			//console.log('ativar comentarios: '+$scope.ativarComment);

		};


		var getComments = function(id){
			tourService.getComments(id).then(function onSuccess(response){			
				$scope.commentsTour = response.data;
				//$scope.parts = $scope.commentsTour.date[0].split('-');
				//console.log($scope.parts);				
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
				$scope.commentsTour = [];
			});

		};

		getComments({{ $tourInfo->id }});
		


		//Salvar os commentarios;
		$scope.saveComments = function(comments){
			comments['date'] = '{{ $tourInfo->dateNow }}';
			comments['state'] = $scope.localization.city;
			comments['country'] = $scope.localization.region;
			
			tourService.saveComments(comments).then(function onSucess(response){
					$scope.comments = [];
					getComments({{ $tourInfo->id }});

					ngNotify.set('O Seu Comentário Foi Adicionado com Sucesso!<br>', {
					    position: 'top',
					    sticky: true,
					    type: 'success',
					    html: true
				    	
						});
				}, function onError(response){
					ngNotify.set('O Seu Comentário Não Foi Adicionado!<br>', {
					    position: 'top',
					    sticky: true,
					    type: 'error',
					    html: true
				    	
						});
					console.log("Erro"+comments);
				});

			};
		//Fim das Funções;
	});
 		

 	

</script>