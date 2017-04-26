<!DOCTYPE html>
<html lang="en" ng-app="mypage" ng-controller="mypageController">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Natal Praias - Minha Página</title>
	<!--<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="{{ url('layout/css/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('layout/css/owlcarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('layout/css/animate.css') }}">
	<link rel="stylesheet" href="{{ url('layout/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ url('layout/js/vendors/pickadate/lib/compressed/themes/classic.css') }}">
	<link rel="stylesheet" href="{{ url('layout/js/vendors/pickadate/lib/compressed/themes/classic.date.css') }}">
	<!--<link rel="stylesheet" href="css/ferramentas/badget.css"> -->

	<script src="{{ url('layout/js/vendors/jquery.min.js') }}"></script>
    <script src="{{ url('layout/css/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ url('layout/js/vendors/pickadate/lib/compressed/legacy.js') }}"></script>
	<script src="{{ url('layout/js/vendors/pickadate/lib/picker.js') }}"></script>
	<script src="{{ url('layout/js/vendors/pickadate/lib/compressed/picker.date.js') }}"></script>
    <!-- Angular Material requires Angular.js Libraries -->
	<script src="{{ url('app/vendors/angular/angular.js') }}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css">
	<script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>

	<!-- Angular Material Library -->
	<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

	 <!-- Your application bootstrap  -->
	<script src="{{ url('layout/js/app/modules/ui-bootstrap.min.js') }}"></script>
	<script src="{{ url('layout/js/app/modules/datapicker/angular-datepicker.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('layout/js/app/modules/datapicker/angular-datepicker.min.css') }}">
	<script src="{{ url('app/vendors/angular-sanitize/angular-sanitize.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('app/vendors/ng-notify/dist/ng-notify.min.css') }}">
	<script src="{{ url('app/vendors/ng-notify/dist/ng-notify.min.js') }}"></script>

	<!-- App Angularjs -->

	<script src="{{ url('layout/js/app/app.js') }}"></script>

	<!--- Controles
	<script src="{{ url('layout/js/controllers/pag-produto-ctrl.js') }}"></script>  -->
	<script src="{{ url('app/vendors/angular-locale-pt-br/angular-locale_pt-br.js') }}"></script>

	<!-- Service -->
	<script src="{{ url('layout/js/services/myPageService.js') }}"></script>
	<!-- ********************** -->
	<link rel="stylesheet" href="{{ url('layout/css/templates/passeiosdev.css') }}">
	<style>
		.datepicker {
		  visibility: hidden;
		  position: absolute;
		}

		.picker {
		    z-index: 98;
		    width: 309px;
		}

		.picker__holder {
			border-radius: 0 !important;
			border-color: #ddd;
			box-shadow: none !important;
		}

		.picker--focused .picker__day--highlighted, .picker__day--highlighted:hover, .picker__day--infocus:hover, .picker__day--outfocus:hover {
			background: #ff5e00 !important;
		}

		.picker__weekday {
			text-align: center;
		}

	</style>

	<!-- Controller da Página do produto -->
	@include('ecommerce/controllers/mypageController')

	<!-- /Controller da Página do produto -->


</head>
<body>
	@include('ecommerce/parts/headerMypage')
	<!-- Inicio do Main -->
	<main>
		<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
			<div class="col-md-4">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Passeios Comprados</a></li>
					<li><a href="#">Ajuda</a></li>
					<li><a href="{{ url('minha-pagina/logout') }}">Sair</a></li>
				</ul>
			</div>
			<div class="col-md-8">
				<h3 class="text-center">Bem Vindo, {{ Auth::user()->name }}!</h3>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12">
						<painel class="painel">
							<h4>Carrinho</h4>
							<div class="painel painel-default" ng-repeat="listCart in carts">

								<div ng-repeat="cart_info in listCart.cart">
									<div ng-repeat="tour_info in listCart.tour">
										<div class="row">
								    		<div class="col-md-4">
								    			image
								    		</div>
								    		<div class="col-md-4">
								    			@{{tour_info.title_tour}}
								    		</div>
								    		<div class="col-md-4">
								    			@{{cart_info.price_total_tour}}
													<div class="remove">
														<a href="#remove" ng-click="removeTour(tour_info.id)">X Remover</a>
													</div>
								    		</div>
								    	</div>
										<hr>
									</div>
								</div>
						</painel>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- Inicio do Footer -->
	<div class="footer_init">
		<div class="container">
			<div class="footer-primary">
				<img src="{{ url('layout/img/logo_natalpraias.png') }}" alt="">
				<div class="info_contato">
						<h4>CONTATOS</h4>
						<p>Av. Eng. Roberto Freire,</p>
						<p>260 - Natal.</p>
						<p>RN - 59090-000</p>
				</div>
				<div class="certificados">
					<h4 style="text-align: center;">CERTIFICADOS</h4>
					<div class="certificados_img">
						<img src="{{ url('layout/img/google.png') }}" alt="google">
						<img src="{{ url('layout/img/rapidssl.png') }}" alt="Rapid SSL">
						<img src="{{ url('layout/img/alphassl.png') }}" alt="">
					</div>
				</div>
				<div class="forma_pagamento">
					<h4  style="text-align: center;">FORMAS DE PAGAMENTO</h4>
					<div class="bandeiras">
						<img src="{{ url('layout/img/visa.png') }}" alt="visa">
						<img src="{{ url('layout/img/master.png') }}" alt="master card">
						<img src="{{ url('layout/img/boleto.png') }}" alt="boleto">
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div style="background: #fff; margin-top: 0px;" class="footer_secund">
			<div class="container">
				<div style="margin-top: 25px;" class="desc_footer">
					<h4>Natal Praias 2016 Todos os Direitos Reservados CNPJ: 00.893.767/0001-97</h4>
				</div>
				<div class="redesociais">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>

				</div>
			</div>
		</div>

	</footer>


	<script>
		//$('.testPo').webuiPopover({title:'Title',content:'Content'});
		//$('.testPo').webuiPopover({url:'#ShopCart', width:560, height:300, animation:'pop'});
	</script>

	<script src="{{ url('layout/js/scripts.js') }}"></script>
	<script src="{{ url('layout/js/vendors/bootstrap.js') }}"></script>
</body>
</html>
