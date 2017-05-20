<script>
angular.module("dashboard").controller('dashAddTourController', function($scope,toursService ,imagensService, ngNotify) {
	$scope.form = {}; //Definido logo no inicio do controller

	var listarTours = function(){
		toursService.lista().then(function onSuccess(response){
			$scope.tours = response.data;
			//$scope.imgs = getImgs($scope.tours.token_tour);
		}, function onError(response){
			console.log(response.data + " erro: " + response.statusText);
			$scope.pageToursController = [];
		});


	}
 	listarTours();

	var getCategory = function(){
		toursService.getCategory().then(function onSuccess(response){
				$scope.categorias = response.data;
			//$scope.imgs = getImgs($scope.tours.token_tour);
		}, function onError(response){
			console.log(response.data + " erro: " + response.statusText);
				$scope.categorias = [];
		});


	}
 	getCategory();

 	$scope.statusTour = [
 		{id: 1, name: "Ativado"},
 		{id: 2, name: "Desativado"}
 	];

 	$scope.parcelas = [
 		{quant: 1},
 		{quant: 2},
 		{quant: 3},
 		{quant: 4},
 		{quant: 5},
 		{quant: 6},
 		{quant: 7},
 		{quant: 8},
 		{quant: 9},
 		{quant: 10},
 		{quant: 11},
 		{quant: 12}
 	];

 	var getImgs = function($token){
		console.log('token: '+$token);

		if($token){
			toursService.getImgs($token).then(function onSuccess(res){

				console.log("Deu Certo Imgs: "+res);

			}, function onError(res){
				console.log("erro Imgs: "+res);

			});

		}else{
			console.log("Erro: não encontrado o Token!");
		}
	}


	$scope.editar = function(data){
		$scope.tours = data;

	}
 	//*** Salvar o Tour ***//
	$scope.salvar = function(toursNew, seasonTour){

			console.log(toursNew)
			var slugNew = slug(toursNew['slug_tour']);

			toursNew['slug_tour'] = slugNew;
			console.log('Correto: '+toursNew['token_tour']);
			if(toursNew['kidsOk'] == true){
				toursNew['kidsOk'] = 1;
			}else{
				toursNew['kidsOk'] = 0;
			}

			if(seasonTour != null){
					console.log(seasonTour);
					//if(pSeason == "A"){
							//$scope.btnSeasonA = false;
					//}
					season['token_tour'] = 111111;
					season['id_user_create'] = 13;
					season['begin_season'] = "2017-02-13";
					season['end_season'] = "2017-04-30";
					season['price_cost'] = 66.90;


					toursService.saveSeason(season).then(function onSuccess(response){
						ngNotify.set('A Temporada Foi Adicionada Com Sucesso!', {
								position: 'top',
								sticky: true,
								type: 'success',
								html: true

						});
					}, function onError(response){
						console.log(response.data + " erro: " + response.statusText);
						ngNotify.set('Erro ao Adicionar a Temporada.', {
								position: 'top',
								sticky: true,
								type: 'error',
								html: true

						});
					});
			}


			var url = "{{ url('/tour') }}/";
			var link = '<a href="'+ url + toursNew['slug_tour'] + '" target="_blank">Click Aqui Para Ver!</a>';

			toursService.cadastra(toursNew).then(function onSuccess(res){
				ngNotify.set('O Passeio ' + toursNew['title_tour'] +
							 ' Foi Adicionado com Sucesso!<br>'
							 + link, {
				    position: 'top',
				    sticky: true,
				    type: 'success',
				    html: true

				});

				toursNew = [];
				delete $scope.toursNew;
				//$scope.form.toursNew.$setPristine()


			}, function onError(res){
				console.log("erro: "+res);
				ngNotify.set('O Passeio ' + toursNew['title_tour'] + ' Não Foi Adicionado.', {
				    position: 'top',
				    sticky: true,
				    type: 'error'
				});

			});
	}
	//**** /Salvar o Tour ***//



///Função para criação de slug;
	var slug = function(input){
		var sluginInput = input.toLowerCase();
         // replace invalid chars with spaces
        slugNew = sluginInput.replace(/[^a-z0-9\s-]/g, ' ');
        // replace multiple spaces or hyphens with a single hyphen
        slugNew = sluginInput.replace(/[\s-]+/g, '-');

        return slugNew;
	};
///** / Função para criar slug **////

//**** Add Mais Season ****//
	$scope.seasonplus = 1;

	$scope.moreSeason = function(){
		$scope.seasonplus += 1;
		console.log($scope.seasonplus);

	}

	$scope.openDates = false;

	$scope.plusDate = function(){
		$scope.openDates = !$scope.openDates;
	}
//**** /Add Mais Season ***//
//variaveis dos btn;
$scope.btnSeasonA = true;

//**** Salva a Season ****//
	$scope.saveSeason = function(seasonTour, pSeason){
		season = [];
		console.log(seasonTour + pSeason);
		if(pSeason == "A"){
				$scope.btnSeasonA = false;
		}
		season['token_tour'] = seasonTour['token_tour'];
		season['id_user_create'] = seasonTour['id_user_create'];
		season['begin_season'] = seasonTour['dateSeasonA'];
		season['end_season'] = seasonTour['dateSeasonAA'];
		season['price_cost'] = seasonTour['price'];

		toursService.saveSeason(season).then(function onSuccess(response){
			ngNotify.set('A Temporada Foi Adicionada Com Sucesso!', {
					position: 'top',
					sticky: true,
					type: 'success',
					html: true

			});

		}, function onError(response){
			console.log(response.data + " erro: " + response.statusText);
			ngNotify.set('Erro ao Adicionar a Temporada.', {
					position: 'top',
					sticky: true,
					type: 'error',
					html: true

			});
		});
	}
//***** /Salva a Season ***//

// Custom top position

	$scope.update = function($data){
		console.log($data);
		if($data.id){
			toursService.edita($data).then(function onSuccess(res){
				listarTours();
				console.log("Deu Certo: "+res);

			}, function onError(res){
				console.log("erro: "+res);
				listarTours();

			});
		}else{
			console.log("Erro: não encontrado o id!");
		}
	}

	//banners
	var banners = function(){

		imagensService.get().then(function onSuccess(response){

			$scope.banners = response.data;
		}, function onError(response){
			console.log(response.data + " erro: " + response.statusText);
			$scope.banners = [];
		});
	}
 	banners();

	//Deletar Tour;

	$scope.desativarTour = function($id, $status){
		toursService.desativar($id, $status).then(function onSuccess(response){
			listarTours();
			ngNotify.set('O Passeio foi desativado com sucesso!', {
					position: 'top',
					sticky: true,
					type: 'success',
					html: true

			});

		}, function onError(response){
			console.log(response.data + " erro: " + response.statusText);
			ngNotify.set('Erro ao desativar o Passeio.', {
					position: 'top',
					sticky: true,
					type: 'error',
					html: true

			});
		});

	}


});
</script>
