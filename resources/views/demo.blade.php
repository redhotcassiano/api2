<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="home" ng-controller="homeController">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Natal Praias</title>
	<!--<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">-->
		<link rel="stylesheet" href="{{ url('layout/css/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('layout/css/owlcarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('layout/js/vendors/popover/jquery.webui-popover.min.css') }}">
	<link rel="stylesheet" href="{{ url('layout/css/plugins.css') }}">		
	<script src="{{ url('layout/js/vendors/jquery.min.js') }}"></script>
    <script src="{{ url('layout/css/owlcarousel/owl.carousel.js') }}"></script><script src=""></script>

    <script src="{{ url('app/vendors/angular/angular.js') }}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <!-- ************* Popover ********************** -->
    <script src="{{ url('layout/js/vendors/popover/jquery.webui-popover.min.js') }}"></script>

    <!-- *************** Vegas ********************** -->
    <link rel="stylesheet" href="{{ url('layout/js/vendors/vegas/vegas.min.css') }}">
    <script src="{{ url('layout/js/vendors/vegas/vegas.min.js') }}"></script><script src=""></script>

    <!-- *************** MMenu ********************** -->
    <link rel="stylesheet" href="{{ url('layout/js/vendors/mmenu.all.css') }}" >
	<script src="{{ url('layout/js/vendors/mmenu.all.min.js') }}"></script>

	<!-- **************** App AngularJS ******************** -->
	<script src="{{ url('app/vendors/angular-sanitize/angular-sanitize.min.js') }}"></script>	
	<link rel="stylesheet" href="{{ url('app/vendors/ng-notify/dist/ng-notify.min.css') }}">
	<script src="{{ url('app/vendors/ng-notify/dist/ng-notify.min.js') }}"></script>
	<script src="{{ url('layout/js/vendors/angular-rateit/dist/ng-rateit.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('layout/js/vendors/angular-rateit/dist/ng-rateit.css') }}">
	
	<script src="{{ url('layout/js/app/app.js') }}"></script>

	<!--- Controles -->	
	<script src="{{ url('app/vendors/angular-locale-pt-br/angular-locale_pt-br.js') }}"></script>

	<!-- Service -->
	<script src="{{ url('layout/js/services/homeService.js') }}"></script>


    
  	<!-- ***************** CSS MAIN **************** -->
  	<link rel="stylesheet" href="{{ url('layout/css/home.css') }}"><link rel="stylesheet" href=""> 

  	<!-- Controller da Página do produto -->
	@include('ecommerce/controllers/homePageController')
	
	<!-- /Controller da Página do produto -->
  	
</head>
<body>
	<!-- Inicio do Header -->
	<header>
		
		<div class="header_barra  menufixo">
			<div class="container-fluid">
				<div class="logo">
					<img src="{{ url('layout/img/logo_natalpraias.png') }}" alt="Natal Praias">
				</div>								
			</div>		

		</div>	
			
			
		<!-- Inicio do container -->
		<div class="container">			
			<div class="title_page_home">
				<h2> Loja em Manuntenção </h2>
				<h1> <a href="http://natalpraias.com.br">Visite Nosso Site</a> </h1>					
			</div>		
		</div>
		<!-- Fim do containner -->

	</header>
	<!-- Fim do Header -->
	<!-- Inicio do Main -->
	<main></main>
	

	<!-- Inicio do Footer -->
	<div class="footer_init">
		<div class="container">
			<div class="footer-primary">
				<img src="{{ url('layout/img/logo_natalpraias.png') }}" alt="Natal Praias">
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
		<div style="background: #fff" class="footer_secund">
			<div class="container">
				<div class="desc_footer">
					<h4>Natal Praias - RZ MARKETING TURISTICO 2017 Todos os Direitos Reservados CNPJ: 27.230.533/0001-16</h4>
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
            //popover
           $('.carshop').webuiPopover({
           		type:'async',
    			url:'https://everflyagencia.com.br',
                animation:'pop',
                width:500,
                height:300
                
           	});

           //vegas
           $("header").vegas({
			    slides: [
			        { src: "{{ url('layout/img/back_news.jpg') }}" },
			        { src: "{{ url('layout/img/background_natal.jpg') }}" },
			        { src: "{{ url('layout/img/back_news.jpg') }}" },
			        { src: "{{ url('layout/img/back_news.jpg') }}" }
			    ]
			});

          </script>

	<script src="{{ url('layout/js/scripts.js') }}"></script>
	<script src="{{ url('layout/js/vendors/bootstrap.js') }}"></script>
	<!-- Fim do Footer -->
</body>
</html>