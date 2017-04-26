<script>
	angular.module('home').controller('homeController', function($scope, $http, homeService, ngDialog, toastr){
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

		//popup
		var clickToOpen = function () {
        ngDialog.open({ template: 'dialog01', className: 'ngdialog-theme-default' });
    };

		//clickToOpen();

		$scope.formLogin = function(){
			ngDialog.open({ template: 'form-login', className: 'ngdialog-theme-default'});
		}



		//toast
		var toast = toastr.success('Hello world!', 'Toastr fun!');
		//toastr.refreshTimer(toast, 5000);


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

		var saveIpClient = function(ip){
			homeService.saveIpClient("ip_user", ip).then(function onSuccess(response){
				//console.log($scope.carts);
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);

			});
		}

		//Buscar a Localização do usuario;
		$.getJSON("http://ip-api.com/json/?callback=?", function(data) {
			$scope.localization = data;
			console.log($scope.localization);
			createCart($scope.localization.query);
			saveIpClient($scope.localization.query);
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

		var getToursViews = function(){
			homeService.getToursViews().then(function onSucess(response){
				console.log('ToursViews: '+response.data);
				$scope.toursViews = response.data;

			}, function onError(response){
				$scope.toursViews = null;
			});
		};

		getToursViews();

		var GetSearch = function(){
			homeService.getSearch().then(function onSucess(response){
				console.log('Search: '+response.data);
				$scope.toursSearch = response.data;

			}, function onError(response){
				$scope.toursSearch = null;
			});
		};

		GetSearch();

		$scope.searchNow = function(data){
			console.log(data.originalObject.slug);
			$slug = data.originalObject.slug;
			window.location = "{{ url('/tour') }}/"+ $slug;
		}

		$scope.saveEmail = function(data){
			console.log('Salvar: '+data)

			homeService.saveNewEmail(data).then(function onSucess(response){
				console.log('Email: '+response.data);

			}, function onError(response){
				console.log('EmailErro: '+response.data);
			});
		};



		$scope.saveNewEmail = function(email){
			console.log(email);
			if(email['n_email'] == null){
				return;
			}

			homeService.saveNewEmail(email).then(function onSucess(response){
				console.log('Email: '+response.data);

			}, function onError(response){
				console.log('EmailErro: '+response.data);
			});

			$scope.newEmail = null;
		}

		var count = 0;







	});
</script>
