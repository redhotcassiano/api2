<script>
    angular.module('checkout').controller('checkoutController', function($scope, $http, checkoutService, ngNotify, ngDialog, toastr){

        $id_user = {!! $user_id !!};
        $scope.name_user = "{{ $user_name }}";
        $scope.dateToDay = "{{ $date }}";
        $scope.showVerso = false;
        console.log($scope.dateToDay);


        //Buscar a Localização do usuario;
    		$.getJSON("http://ip-api.com/json/?callback=?", function(data) {
    			$scope.localization = data;
    			console.log($scope.localization);
          checkoutCart($scope.localization.query, $id_user);

    		});

        $scope.hoverCvc = function(){
          $scope.showVerso = !$scope.showVerso;
        };

        console.log("test ok");

        var checkoutCart = function(ip, user){
          checkoutService.getCart(ip, user).then(function onSuccess(response){
    				$scope.cart = response.data;
    				console.log($scope.cart);
            listTours($scope.cart[0].id);
            $scope.total_price = $scope.cart[0].total_price;
            console.log('Saldo: '+$scope.cart[0].total_price);
    			}, function onError(response){
    				console.log(response.data + " erro: " + response.statusText);
    				$scope.cart = [];
    			});
        }

        var listTours = function(id_cart){
          checkoutService.getList(id_cart).then(function onSuccess(response){
    				$scope.listInfo = response.data;
    				console.log($scope.listInfo);
    			}, function onError(response){
    				console.log(response.data + " erro: " + response.statusText);
    				$scope.listInfo = [];
    			});
        }

        //Scopes Usados no Sistema;

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

        //FUNÇÕES;


        //Dados da Página Checkout;


        //verifica e adiciona o cupon a compra;
        $scope.erroCupon = false;
        $scope.desconto = 0.00;


        $scope.checkCupon = function(cupon, total_price){

          checkoutService.validateCupon(cupon).then(function onSuccess(response){
    				var cuponValido = response.data[0];
            var porcentagem_desconto = total_price * cuponValido.porcentCupon / 100;
            $scope.desconto = porcentagem_desconto;
            checkValuesTotal(total_price, $scope.desconto);
    				console.log($scope.desconto);

    			}, function onError(response){
    				console.log(response.data + " erro: " + response.statusText);

    			});
        }

        //Realiza a Compra;
        var finalizarCompra = function(){}

        //Calcula o valor total da Compra;

        var checkValuesTotal = function(total_price, desconto){
           $scope.total_validate = total_price - desconto;
        }


        //add Novo Telefone;
        $scope.newPhone = 1;

        $scope.plusPhone = function(){
          $scope.newPhone = $scope.newPhone + 1;
          console.log($scope.newPhone);
        }

        $scope.deleteTour = function(id, valor){
          var total = $scope.cart[0].total_price - valor;
          checkoutService.deleteTour(id).then(function onSuccess(response){
            checkoutService.updatePriceCart($scope.cart[0].id, total).then(function onSuccess(response){

            }, function onError(response){
              console.log(response.data + "Erro:" + response.statusText);
            });
              listTours($scope.cart[0].id);

          }, function onError(response){
            console.log(response.data + " erro: " + response.statusText);

          });
        }

    });
</script>
