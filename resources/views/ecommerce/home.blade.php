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
	<link rel="stylesheet" href="{{ url('assets/css/icons/icomoon/styles.css') }}">		
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
	<style>
		.cartfixo{
			position: absolute;
			top: 0;
		}

		.icon-bascket{
			width: 100%;
			margin: 0 auto;
		}

		.basket{
			font-size: 8em;			
			color: #fe5e22;
		}

		.basket::before {
    		content: "\ea6c";
		}

		.not-cart{
			width: 70%;
			margin:0 auto;
			padding: 0 auto;
			margin-top: 20px;
		}

		.not-cart p{
			font-size: 12px;

		}

		.not-cart p > span{
			font-size: 18px;
			font-weight: bold;
		}

		

	</style>
  	
</head>

<body>
	
	<!-- Inicio do Header -->
	<header>		
		<div class="header_barra  menufixo">
			<div class="container-fluid">
				<div class="logo">
					<img src="{{ url('layout/img/logo_natalpraias.png') }}" alt="Natal Praias">
				</div>

				<div class="menu">
					<nav>
						<ul>
							<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Início</a></li>
							<li><a href="#" class="listheart"><i class="fa fa-heart" aria-hidden="true"></i> Lista de Desejos</a></li>
							<li><a href="#" class="testPo" data-placement="bottom" ng-click="showListCar()"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho</a></li>
							<li ng-if="name_user == null"><a href="{{ url('login') }}"><i class="fa fa-user" aria-hidden="true"></i>Entrar </a></li>
							<li ng-if="name_user != null"><a href="{{ url('minha-pagina') }}"><i class="fa fa-user" aria-hidden="true"></i>@{{ name_user }}</a></li>
							<li><a class="btn" href="#">Cadastre-se</a></li>
							<li><a class="btn-idioma" href="#"><span><img style="margin-bottom: 3px;" src="{{ url('layout/img/portugues.png') }}" alt="idioma português"> Português</span></a></li>

						</ul>
					</nav>
					<ul>
						<li class="toogle_mobile"><a href="#menu_mobile"><span></span></a></li>
					</ul>

				</div>					
			</div>

			<nav id="menu_mobile" style="z-index: 99;">
				<ul style="margin-top: 40px;">
					<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Início</a></li>
					<li><a href="#" class="listheart"><i class="fa fa-heart" aria-hidden="true"></i> Lista de Desejos</a></li>
					<li><a href="#" class="carshop"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho</a></li>
					<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Entrar</a></li>
					<li><a class="btn btn-primary" href="#">Cadastre-se</a></li>
					<li><a class="btn-idioma" href="#"><span><img style="margin-bottom: 3px;" src="{{ url('layout/img/portugues.png') }}" alt="idioma português"> Português</span></a></li> 
				</ul>
			</nav>	

		</div>
		<!-- Cart -->
		<div id="ShopCart">
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
				    		</div>
				    	</div>
						<hr> 
					</div>								
				</div>
										
			</div>	
			<div class="row" ng-if="carts.length > 0">
				<div class="col-md-12">
					<button class="btn btn-primary btn-block">Finalizar Compra</button>
				</div>				
			</div> 

			<div class="painel painel-default" ng-if="carts.length < 1" style="z-index: -1; position: relative; transition: 0;"> 
				<div class="col-md-12">
					<div class="icon-bascket">
						<i class="basket"></i>
					</div>
					<div class="not-cart">
						<p><span>O carrinho não tem nenhum passeio...</span></p>
						<p>Navegue pelo site ou utilize a busca para encontrar os melhores passeios e adicione no seu carrinho! </p>
					</div>
				</div>
				
			</div>  	  	
		    
		</div>
		<!-- /Cart -->
		<!-- Inicio do container -->
		<div class="container" ng-repeat="home in data">			
			<div class="title_page_home">
				<h2> @{{ home.subtitle_home }} </h2>
				<h1> @{{ home.title_home }} </h1>
				<div class="search_home">
					<input class="input_procurar_home" type="text" placeholder="Para onde você vai viajar?">			
				    <button class="btn btn-primary-home"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>				
			</div>		
		</div>
		<!-- Fim do containner -->

	</header>
	<!-- Fim do Header -->
	<!-- Inicio do Main -->
	<main>
		<!-- Inicio do filtros_home -->
		<!--
		<div class="filtros_home">
			<div class="container">
				<select name="destino" id="destino">
					<option value="">Destino</option>
					<option value="">Pipa</option>
					<option value="">Praia</option>
					<option value="">Buggie</option>
				</select>
				<input type="date" name="data_passeio" placeholder="Data do Passeio">
				<input type="text" name="horario_home" placeholder="Horario">
				<select name="opcoes" id="opcoes">
					<option value="">Adulto</option>
					<option value="">Adulto e Criança</option>				
				</select>			
				<a href="#" class="btn btn-primary">Reserva Agora</a>					
			</div>			
		</div>
		-->
		<!-- Fim do filtros_home -->
		<!-- Fim do Header -->
	<!-- Inicio da Section Novidades -->
		<!-- Inicio da Section Novidades -->
		<section name="novidades_home">
			<div class="container">
				<h3>NOVIDADES</h3>
				<div class="border_title"></div>
				<!-- Inicio da Section de Cards -->
				<div class="container">
					<div class="row">
						<!--- Area Test -->
						<div ng-repeat="tourN in toursNews.tours">
							<div>@{{tourN}}</div>
						</div>
						<!--- /Area Test -->								
						<article class="card-product-main">
							<a href="#" class="product thumbnail" title="passeio natal" alt="passeio natal">
								<!-- Badges -->
								<div class="badge badge-mais-vendido">
									<strong>
										Mais Vendido
									</strong>
								</div>
								<!--************-->
								<!-- heart list -->
								<div class="heart-list">
									<button class="tip create-list"></button>
								</div>
								<!--*****************-->
								<!-- Image Passeio -->
								<img src="{{ url('layout/img/passeios.jpg') }}" class="" alt="passeio natal" width="393" height="195">
								<!--***************-->
								<!-- Caption -->
								<div class="caption">
									<div class="rating-stars">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="title">
										Passeio Natal Praias
									</div>
									<div class="regiao-passeio">
										Natal - Brasil
									</div>
									<div class="valor-passeio"> R$ 60,00</div>
									<div class="comprados-semana-passeio">
										<i class="fa fa-users"></i>
										<span>38 Comprados na última semana</span>
									</div>										
									
								</div>
								<!--*********-->

							</a>
						</article>
						<!--******************-->
						<article class="card-product-main">
							<a href="#" class="product thumbnail" title="passeio natal" alt="passeio natal">
								<!-- Badges -->
								<div class="badge badge-mais-vendido">
									<strong>
										Mais Vendido
									</strong>
								</div>
								<!--************-->
								<!-- heart list -->
								<div class="heart-list">
									<button class="tip create-list"></button>
								</div>
								<!--*****************-->
								<!-- Image Passeio -->
								<img src="{{ url('layout/img/passeios.jpg') }}" class="" alt="passeio natal" width="393" height="195">
								<!--***************-->
								<!-- Caption -->
								<div class="caption">
									<div class="rating-stars">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="title">
										Passeio Natal Praias
									</div>
									<div class="regiao-passeio">
										Natal - Brasil
									</div>
									<div class="valor-passeio"> R$ 60,00</div>
									<div class="comprados-semana-passeio">
										<i class="fa fa-users"></i>
										<span>38 Comprados na última semana</span>
									</div>										
									
								</div>
								<!--*********-->

							</a>
						</article>
						<article class="card-product-main">
							<a href="#" class="product thumbnail" title="passeio natal" alt="passeio natal">
								<!-- Badges -->
								<div class="badge badge-mais-vendido">
									<strong>
										Mais Vendido
									</strong>
								</div>
								<!--************-->
								<!-- heart list -->
								<div class="heart-list">
									<button class="tip create-list"></button>
								</div>
								<!--*****************-->
								<!-- Image Passeio -->
								<img src="{{ url('layout/img/passeios.jpg') }}" class="" alt="passeio natal" width="393" height="195">
								<!--***************-->
								<!-- Caption -->
								<div class="caption">
									<div class="rating-stars">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="title">
										Passeio Natal Praias
									</div>
									<div class="regiao-passeio">
										Natal - Brasil
									</div>
									<div class="valor-passeio"> R$ 60,00</div>
									<div class="comprados-semana-passeio">
										<i class="fa fa-users"></i>
										<span>38 Comprados na última semana</span>
									</div>										
									
								</div>
								<!--*********-->

							</a>
						</article>

					</div>
				</div>
				<!-------------------------------->

			</div>
			
			<!-- Fim da Section de Cards -->
		</section>

		<section name="novidades_home">
			<div class="container">
				<h3>PASSEIOS MAIS PROCURADOS</h3>
				<div class="border_title"></div>
				<!-- Inicio da Section de Cards -->
				<div class="container">
					<div class="row">								
						<article class="card-product-main">
							<a href="#" class="product thumbnail" title="passeio natal" alt="passeio natal">
								<!-- Badges -->
								<div class="badge badge-mais-vendido">
									<strong>
										Mais Vendido
									</strong>
								</div>
								<!--************-->
								<!-- heart list -->
								<div class="heart-list">
									<button class="tip create-list"></button>
								</div>
								<!--*****************-->
								<!-- Image Passeio -->
								<img src="{{ url('layout/img/passeios.jpg') }}" class="" alt="passeio natal" width="393" height="195">
								<!--***************-->
								<!-- Caption -->
								<div class="caption">
									<div class="rating-stars">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="title">
										Passeio Natal Praias
									</div>
									<div class="regiao-passeio">
										Natal - Brasil
									</div>
									<div class="valor-passeio"> R$ 60,00</div>
									<div class="comprados-semana-passeio">
										<i class="fa fa-users"></i>
										<span>38 Comprados na última semana</span>
									</div>										
									
								</div>
								<!--*********-->

							</a>
						</article>
						<!--******************-->
						<article class="card-product-main">
							<a href="#" class="product thumbnail" title="passeio natal" alt="passeio natal">
								<!-- Badges -->
								<div class="badge badge-mais-vendido">
									<strong>
										Mais Vendido
									</strong>
								</div>
								<!--************-->
								<!-- heart list -->
								<div class="heart-list">
									<button class="tip create-list"></button>
								</div>
								<!--*****************-->
								<!-- Image Passeio -->
								<img src="{{ url('layout/img/passeios.jpg') }}" class="" alt="passeio natal" width="393" height="195">
								<!--***************-->
								<!-- Caption -->
								<div class="caption">
									<div class="rating-stars">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="title">
										Passeio Natal Praias
									</div>
									<div class="regiao-passeio">
										Natal - Brasil
									</div>
									<div class="valor-passeio"> R$ 60,00</div>
									<div class="comprados-semana-passeio">
										<i class="fa fa-users"></i>
										<span>38 Comprados na última semana</span>
									</div>										
									
								</div>
								<!--*********-->

							</a>
						</article>
						<article class="card-product-main">
							<a href="#" class="product thumbnail" title="passeio natal" alt="passeio natal">
								<!-- Badges -->
								<div class="badge badge-mais-vendido">
									<strong>
										Mais Vendido
									</strong>
								</div>
								<!--************-->
								<!-- heart list -->
								<div class="heart-list">
									<button class="tip create-list"></button>
								</div>
								<!--*****************-->
								<!-- Image Passeio -->
								<img src="{{ url('layout/img/passeios.jpg') }}" class="" alt="passeio natal" width="393" height="195">
								<!--***************-->
								<!-- Caption -->
								<div class="caption">
									<div class="rating-stars">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="title">
										Passeio Natal Praias
									</div>
									<div class="regiao-passeio">
										Natal - Brasil
									</div>
									<div class="valor-passeio"> R$ 60,00</div>
									<div class="comprados-semana-passeio">
										<i class="fa fa-users"></i>
										<span>38 Comprados na última semana</span>
									</div>										
									
								</div>
								<!--*********-->

							</a>
						</article>

					</div>
				</div>
				<!----------------- ------------->

			</div>
			
			<!-- Fim da Section de Cards -->
		</section>		
		
		<section id="newsletter" name="newsletter">
			<div class="container">
				<div class="title-newsletter">NEWSLETTER</div>
				<div class="cont-new">
					<span class="sub_title">Receba as melhores dicas de passeios e atrações para a sua viagem no seu e-mail!</span>
				</div>
				<div class="cont-new-input">
					<input type="text" placeholder="Informe seu e-mail"><button class="btn btn-primary">Enviar</button>
				</div>			
			</div>			
		</section>
	</main>
	

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
			//$('.testPo').webuiPopover({title:'Title',content:'Content'});
			//$('.testPo').webuiPopover({url:'#ShopCart', width:560, height:300, animation:'pop'});

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