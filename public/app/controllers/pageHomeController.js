angular.module("dashboard").controller('pageHomeController', function($scope, pageHomeService ,imagensService) {
	var listar = function(){
		pageHomeService.lista().then(function onSuccess(response){
			console.log("text" + response.data);
			$scope.pagehome = response.data;
		}, function onError(response){
			console.log(response.data + " erro: " + response.statusText);
			$scope.pagehome = [];
		});
	}
 	listar(); 
 	

	$scope.editar = function(data){
		$scope.pagehome = data;
		
	}
 
	$scope.salvar = function(){		
			pageHomeService.cadastra($scope.pagehome).then(function onSuccess(res){
				listar();
				$('#myModal').modal('hide');
				
			}, function onError(res){
				console.log("erro: "+res);
				listar();
				$('#myModal').modal('hide');
			});		
	}

	$scope.update = function($data){
		console.log($data);
		if($data.id){
			pageHomeService.edita($data).then(function onSuccess(res){
				listar();				
				console.log("Deu Certo: "+res);
				
			}, function onError(res){
				console.log("erro: "+res);
				listar();
				
			});
		}else{
			console.log("Erro: não encontrado o id!");
		}
	}
 
	$scope.excluir = function(data){
		if(confirm("Tem certeza que deseja excluir?")){
			pageHomeService.exclui(data.id).then(function onSuccess(res){
				listar();
			}, function onError(res){
				console.log("erro: "+res);
				listar();
				$('#myModal').modal('hide');
			});
		}
	}

	//banners
	var banners = function(){
		console.log("banners solicitado");
		imagensService.get().then(function onSuccess(response){
			console.log("banners" + response.data);
			$scope.banners = response.data;
		}, function onError(response){
			console.log(response.data + " erro: " + response.statusText);
			$scope.banners = [];
		});
	}
 	banners();

	
});