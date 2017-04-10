angular.module("dashboard").controller('pageToursController', function($scope,toursService ,imagensService, ngNotify) {
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
	$scope.salvar = function(toursNew){			

			console.log(toursNew)
			var slugNew = slug(toursNew['slug_tour']);

			toursNew['slug_tour'] = slugNew;			
			console.log('Correto: '+toursNew['token_tour']);

			toursService.cadastra(toursNew).then(function onSuccess(res){
				ngNotify.set('O Passeio ' + toursNew['title_tour'] +
							 ' Foi Adicionado com Sucesso!<br>'
							 +'<a href="'+toursNew['url']+slugNew+'">Click Aqui Para Ver!</a>', {
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
				    type: 'success'			    	
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
//**** /Add Mais Season ***//

//**** Salva a Season ****//
	$scope.addSeason = function(seassonTour){

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
 
	$scope.excluir = function(data){
		if(confirm("Tem certeza que deseja excluir?")){
			toursService.exclui(data.id).then(function onSuccess(res){
				listarTours();
			}, function onError(res){
				console.log("erro: "+res);
				listarTours();
				$('#myModal').modal('hide');
			});
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

	
});