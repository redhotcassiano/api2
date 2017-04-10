<script>
	angular.module('mypage').controller('mypageController', function($scope, $http, tourService,){			
		$scope.cart = {{ $cart }};

		console.log($scope.cart);

		var listarCart = function(id){
			tourService.getCart(id).then(function onSuccess(response){			
				$scope.carts = response.data;			
				//console.log($scope.carts);				
			}, function onError(response){
				console.log(response.data + " erro: " + response.statusText);
				$scope.carts = [];
			});

		};

		listarCart($scope.cart);


		
	});
</script>