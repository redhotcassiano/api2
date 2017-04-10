<!DOCTYPE html>
<html lang="en" ng-app="pag-produto" ng-controller="pagProdutoController">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Natal Praias - {{ $tourInfo->title_tour }}</title>
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
	<script src="{{ url('layout/js/vendors/angular-rateit/dist/ng-rateit.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('layout/js/vendors/angular-rateit/dist/ng-rateit.css') }}">

	<!-- App Angularjs -->

	<script src="{{ url('layout/js/app/app.js') }}"></script>

	<!--- Controles
	<script src="{{ url('layout/js/controllers/pag-produto-ctrl.js') }}"></script>  -->
	<script src="{{ url('app/vendors/angular-locale-pt-br/angular-locale_pt-br.js') }}"></script>

	<!-- Service -->
	<script src="{{ url('layout/js/services/tourService.js') }}"></script>
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

		.ngrateit-star{
	        background-size: 22px;
	    }

	</style>

	<!-- Controller da Página do produto -->
	@include('ecommerce/controllers/pageTourController')
	
	<!-- /Controller da Página do produto -->


</head>
<body>
	@include('ecommerce/parts/header')
	<!-- Inicio do Main -->
	<main>
		<section id="links">
			<!-- <p><a href="home.html">Home</a>/<a href="passeiosview.html">Passeios</a>/Passeio Selecionado</p> -->			
		</section>
		<section id="info_passeio">
			<div class="container-fluid">
					<!-- test Popover -->

					<!-- ************* -->				
					<div class="links-pages">
						<p><a href="#">Home</a>/<a href="#">Passeios</a>/{{ $tourInfo->title_tour }}</p> 								
					</div>
					<!-- Carousel -->
					<div class="carrousel-passeios">
						<div class="owl-carousel"  >
							@foreach ($tourInfo->banner as $banner)						
						  	<div class="item"><img src="{{ url('img') }}/{{ $banner->name }}" alt="testando imagens"></div>
						  	@endforeach						  						
						</div>					
					</div>
					<!-- Fim do Carousel -->
					<!-- Titulo e Preços -->
					<div class="row">
						<div class="barra-title">
							<div class="left-submargin">
								<h1>{{ $tourInfo->title_tour }}</h1>
								<div class="comments-stars">
									<div class="comments">
										(5 comentários)
									</div>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									
								</div>								
							</div>
							<div class="right-submargin">
								<!-- Card Preço 
								<div class="panel panel-default price-panel text-rigth">
									<div class="panel-body">
										<div class="price-panel-content">
											<h6>A partir de</h6>
											<h3><small>R$</small><span class="from-prince">96,90</span></h3>
											<h6 class="text-muted"><span id="installments-time">3X</span> de R$ <span id="installments-value">32,30</span> sem juros</h6>

										</div>
										<p class="week-booked text-secundary">
											<i class="fa fa-users" aria-hidden="true"></i>
											<strong>102</strong> comprados <br> na útima semana
										</p>
									</div>
									<div class="badge badge-mais-vendido">
										<strong>
											Mais Vendido
										</strong>
									</div>
								</div> -->
								<!-- share -->
								<div class="barra-share">
									<ul>
										<li class="info-share">Compartilhe esta<br> atividade</li>
										<li class="share-line"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="share-line"><a class="gplus" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class="share-line"><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div> 
						</div>
					</div>
					<!-- Fim do Titulo e Preço -->	
					<div class="info-passeio-sessions">											
							<div class="">
							  <div class="row" ng-controller="TabController">
							  	<div class="menu-tab">
							  		<ul class="nav nav-pills nav-stacked">
							       	<li ng-class="{ active: isSet(1) }">
							          	<a href ng-click="setTab(1)">Detalhes</a>
							       	</li>
							       	<li ng-class="{ active: isSet(2) }">
							          	<a href ng-click="setTab(2)">Sobre o Passeio</a>
							       	</li>
							       	<li ng-class="{ active: isSet(3) }">
							          	<a href ng-click="setTab(3)">Perguntas Frequentes</a>
							       	</li>
							       	<li ng-class="{ active: isSet(4) }">
							          	<a href ng-click="setTab(4)">Dicas</a>
							       	</li>
							     	</ul>
							     	<div class="barra-tab"></div>
							  	</div>
							    <div class="row">
							  		<div class="container-tabs">
								       	<div ng-show="isSet(1)">
								         	{!! $tourInfo->details !!}								          									         	
								        </div>
										<div ng-show="isSet(2)">
								          	{!! $tourInfo->about !!}
								     	</div>
								        <div ng-show="isSet(3)">
								          	{!! $tourInfo->questions !!}
								     	</div>
								     	<div ng-show="isSet(4)">
								          	{!! $tourInfo->tips !!}
								     	</div>
								  	</div>
								 </div>
							</div>
						</div>
					</div>
					<!--Recomendações-->
					<div class="recomendacoes-pagpasseio">
						<div class="row">
							<div class="title-recomendacoes">Mais Sugestões Para Você<div class="border"></div></div>
						</div>
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
											<div class="valor-passeio"> R$ 22,00</div>
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
					</div>
					<!--**********************-->
					<!-- Avaliações -->
					<div class="avaliacoes-session">
						<div class="avaliacoes-title">
							O que as pessoas estão dizendo sobre esta atividade
						</div>
						<div class="rating-avaliacoes">
							<div class="rate-left">
								<div class="rate-card">
									4,5
								</div>
								<div class="stars-avaliacoes">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<p>Nota com base na avaliação de <b>37 viajantes</b></p>
								</div>
							</div>
							
							<div class="divicao"></div>
							<div class="nota-comentarios">
								<p><span>50 avaliações</span> com comentários</p>
								<p><span>20 avaliações</span> sem comentários</p>
							</div>
						</div>
						<div ng-repeat="commentTour in commentsTour">

							<div class="comentario-user">
								<img class="img img-round" src="@{{commentTour.img_user}}" alt="@{{commentTour.name_user}}">
								<div class="name-user">@{{commentTour.name_user}}</div>
								<div class="stars">									
									<div ng-rate-it ng-init="model.readonly = commentTour.stars_share" ng-model="model.readonly" read-only="commentTour.stars_share" star-width="22" star-height="22"></div>
								</div>
								<div class="date">@{{commentTour.date}}</div>
								<div class="content-comment">
									<p>@{{commentTour.comment}}</p>
								</div>
							</div>
						</div>

						<div class="comentario-user">

							<img src="{{ url('layout/img/img_comments.png') }}" alt="usuario-natalpraias">
							<div class="name-user">Luiz Fernando</div>
							<div class="stars">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
							</div>
							<div class="date">22 de Janeiro de 2017</div>
							<div class="content-comment">
								<p>Foi um passeio incrível, praias belíssimas, com vista maravilhosa.estive do dia 25 ao dia 31 de Maio 2016.</p>
							</div>
						</div>
						
						<div class="comentario-user">
							<div class="row">
								<div class="col-md-6 col-offset-6">
									<button class="btn btn-primary" ng-click="enviarComments(!ativarComment)" ng-hide="ativarComment">Enviar Comentário</button>
									
								</div>
							</div>
							<div class="row" ng-hide="!ativarComment">
								<div class="col-md-12">
									<form action="#" id="form-comments">
										<a href="{{ url('web/social/google') }}" ng-if="name_user == ''">Acessar com google</a>
                            			<a href="{{ url('web/social/facebook') }}" ng-if="name_user == ''">Acessar com facebook</a>

										<img src="@{{avatar_user}}" alt="@{{name_user}}" ng-if="avatar_user != ''">
										
										<input type="hidden" value="@{{comments.img_user = avatar_user}}"  ng-model="comments.img_user" ng-if="avatar_user != ''">

										<input type="hidden" value="@{{comments.img_user = 'defaulcomments.jpg'}}" ng-model="comments.img_user" ng-if="avatar_user == ''">		

										<div class="col-md-10 form-group">
											<input  type="hidden" class="form-control" value="@{{comments.name_user = name_user }}" placeholder="Informe seu Nome..." ng-model="comments.name_user" ng-if="name_user != ''">
											<input  type="text" class="form-control" placeholder="Informe seu Nome..." ng-model="comments.name_user" ng-if="name_user == ''">								
										</div>
										<div class=" col-md-10 form-group">
											<input type="hidden" class="form-control" value="@{{comments.email_user = email_user }}" placeholder="Informe seu Email..." ng-model="comments.email_user" ng-if="email_user != ''">

											<input type="email" class="form-control" placeholder="Informe seu Email..." ng-model="comments.email_user" ng-if="email_user == ''">
										</div>
										<div class=" col-md-10 form-group">
											<textarea class="form-control" name="" id="" cols="50" rows="10" placeholder="Comentário..." ng-model="comments.comment"></textarea>
										</div>
										<div class=" col-md-6 form-group">									
											<div ng-rate-it star-width="22" star-height="22" ng-model="comments.stars_share"></div>
										</div>
										<div class=" col-md-6 form-group">	
											<input type="hidden" value="@{{comments.idTour = tour_id}}" ng-init="tour_id = {{ $tourInfo->id }}" ng-model="comments.idTour">												

											<button class="btn-primary btn btn-block" ng-click="saveComments(comments)">Enviar</button>
										</div>
										
									</form>
								</div>
							</div>
							


						</div>
						
					</div>
					<!-- Fim das Avaliações -->			
			</div>
		</section>
		<section id="calendario">
			<!-- Card Preços -->
			<div class="panel panel-default price-panel text-rigth">
				<div class="panel-body">
					<div class="price-panel-content">
						<h6>A partir de</h6>
						<h3><small>R$</small><span class="from-prince">@{{ price | number:2 }}</span></h3>
						<h6 class="text-muted"><span id="installments-time">@{{ parcela }}X</span> de R$ <span id="installments-value">@{{ price / parcela | number:2}}</span> sem juros</h6>

					</div>
					<p class="week-booked text-secundary">
						<i class="fa fa-users" aria-hidden="true"></i>
						<strong>102</strong> comprados <br> na útima semana
					</p>
				</div>
				<div class="badge badge-mais-vendido">
					<strong>
						Mais Vendido
					</strong>
				</div>
			</div>
			<!--Datapicker
			<datepicker date-format="dd-MM-yyyy" selector="form-control" datepicker-show="true" date-min-limit="01/22/2017" date-disabled-dates="01/25/2017" date-week-start-day="0" datepicker-toggle="true" date-set="01/22/2017" datepicker-toggle="false" >
			    <div class="input-group">
			        <input class="form-control input_calendario" placeholder="Choose a date" style="display: none;" ng-model="tour.datepi"/>
			        <span class="input-group-addon" style="cursor: pointer; display: none;" >
			        <i class="fa fa-lg fa-calendar"></i>
			        </span>
			    </div>
			</datepicker>-->
			<input type="text" class="datepicker" ng-model="tour.date_tour">
			
			<div class="calendar-height"></div>
			<div class="info-price-user" ng-if="tour.date_tour">
				<div class="adulto-info">				
					<div class="coluna-peq">						
						<span class="adulto-label">Adulto (12+)</span><br>						
						<span class="valor-secund">R$ @{{valor1 = price * countAdult | number: 2}}</span>
					</div>
					<div class="coluna-peq text-right">
						<i class="fa fa-minus spin-minus text-info" ng-init="countAdult = 1" ng-click="countAdult = countAdult - 1" ></i>
						<!--<button ng-init="countAdult = 1" ng-click="countAdult = countAdult - 1">-</button>-->
						<input type="text" class="input-price-info" value="@{{tour.count_adulto = countAdult}}" ng-model="tour.count_adulto">
						<i class="fa fa-plus spin-minus text-info disabled" ng-init="countAdult = 1" ng-click="countAdult = countAdult + 1" ng-model="tour.countAdult"></i>
						<!-- <button ng-init="countAdult = 1" ng-click="countAdult = countAdult + 1">+</button> -->
						@{{tour.Adult}}
					</div>			
					    
				</div>
				<div class="crianca-info">
					<div class="coluna-peq">
						<span class="adulto-label">Criança (6 - 11)</span><br>
						<span class="valor-secund">R$ @{{valor2 = price / 2 * contCrian | number: 2}}</span>
					</div>
					<div class="coluna-peq text-right">
						<i class="fa fa-minus spin-minus text-info" ng-init="contCrian = 0" ng-click="contCrian = contCrian - 1"></i>
						<!--<button ng-init="countAdult = 1" ng-click="countAdult = countAdult - 1">-</button>-->
						<input type="text" class="input-price-info" value="@{{tour.count_crianca = contCrian}}">
						<i class="fa fa-plus spin-minus text-info disabled" ng-init="contCrian = 0" ng-click="contCrian = contCrian + 1" ng-model="tour.count_crianca"></i>
						<!-- <button ng-init="countAdult = 1" ng-click="countAdult = countAdult + 1">+</button> -->
					</div>					    
				</div>
				<div class="infantil-info">
					<div class="coluna-peq">
						<span class="adulto-label">Infantil (0 - 5 Anos)</span><br>
						<span class="valor-secund">Grátis</span>
					</div>
					<div class="coluna-peq text-right">
						<i class="fa fa-minus spin-minus text-info" ng-init="contInfa = 0" ng-click="contInfa = contInfa - 1"></i>
						<!--<button ng-init="countAdult = 1" ng-click="countAdult = countAdult - 1">-</button>-->
						<input type="text" class="input-price-info"  value="@{{tour.count_infantil = contInfa}}">
						<i class="fa fa-plus spin-minus text-info disabled" ng-init="contInfa = 0" ng-click="contInfa = contInfa + 1" ng-model="tour.count_infantil"></i>
						<!-- <button ng-init="countAdult = 1" ng-click="countAdult = countAdult + 1">+</button> -->
					</div>	
					   
				</div>
				<div class="border-div"></div>
				<div class="valor-total-view">
					<div class="coluna-peq">
						<span class="text-left">Valor Total:</span>
					</div>
					<div class="coluna-peq">
						<span class="valor-total-label text-right" ng-model="tour.price_total_tour">R$ @{{tour.price_total_tour = valor1 + valor2 | number: 2}}</span>
					</div>			
					
				</div>
			</div>
			<!-- Botão de Add ao Carrinho -->
			<div class="btn_carrinho" ng-if="tour.date_tour">
				<input type="hidden" value="@{{tour.tour_id = tour_id}}" ng-init="tour_id = {{ $tourInfo->id }}" ng-model="tour.tour_id">
				<input type="hidden" value="@{{tour.cart_id = cart}}" ng-init="cart = {{ $tourInfo->cart[0]->id }}" ng-model="tour.cart_id">
				<input type="hidden" value="@{{tour.title = title_tour}}" ng-init="title_tour = '{{ $tourInfo->title_tour }}'" ng-model="tour.title">
				<button class="btn btn-primary btn-block btn-add-shopcar" ng-click="addListCart(tour)"><i class="fa fa-shopping-cart"></i>Adicionar ao Carrinho</button>
				
			</div>
			<!-- ********************************************** -->
			<!-- Informações para os Clientes sobre o Passeio -->
			<div class="card-info-user">
				<div class="title-info-user">BOM SABER</div>
				<p>1- Cancelamento GRÁTIS até 24 horas antes do passeio, para compra no Boleto.</p>

				<p>2- Cancelamento para compra no Cartão até 24 horas antes do passeio. Você recebe 85% do valor.</p>

				<p>3- Cancelamento depois de 24 horas, ou no dia do passeio caracteriza NO/SHOW reembolsamos 50% do valor total pago.</p>
				
				<p>4- Você receberá a confirmação com voucher e terá acesso ao eBook de Bônus, logo depois de efetuar sua compra.</p>

			</div>
			<!-- **************************** -->
			<!-- Botão add Lista de Desejos -->
			<div class="card-btn-desejos">
				<button class="btn btn-block btn-lista-desejo btn-primary"><i class="fa fa-heart"></i>Adicionar à minha lista de desejos</button>
			</div>

		</section>
		
		<section id="avaliacoes">
			
			
		</section>
		<section id="relacionados">
			
		</section>

	</main>
	
	<!-- Fim do Main -->
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
		$('.testPo').webuiPopover({url:'#ShopCart', width:560, height:300, animation:'pop'});

		$('.datepicker').pickadate({

		  weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
		  showMonthsShort: true,
		  today: '',
		  clear: '',
		  close: '',
		  min: new Date(),
	  	  max: new Date(2017,7,14),
	  	 format: 'yyyy-mm-dd',

	  	  disable: [
	  	  	 1,
		    new Date(2017,3,13),
		    new Date(2017,3,29)
		  ],
		});
		
		var $input = $('.datepicker').pickadate({});
		var picker = $input.pickadate('picker');

		//Also in the document.ready and just after
		//add this tweaks to display always the calendar without having to click on the input
		picker.$node.addClass('picker__input--active picker__input--target');
		picker.$node.attr('aria-expanded','true');
		picker.$root.addClass('picker--focused picker--opened');
		picker.$root.attr('aria-hidden','false');

	</script>
	<script src="{{ url('layout/js/scripts.js') }}"></script>
	<script src="{{ url('layout/js/vendors/bootstrap.js') }}"></script>
	
	<!-- Fim do Footer -->
</body>
</html>