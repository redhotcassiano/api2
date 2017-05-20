<!DOCTYPE html>
<html lang="pt-br" ng-app="checkout" ng-controller="checkoutController">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Natal Praias - Checkout</title>
	<!--<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="{{ url('layout/css/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('layout/css/owlcarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('layout/css/animate.css') }}">
	<link rel="stylesheet" href="{{ url('layout/css/plugins.css') }}">
	<!--<link rel="stylesheet" href="css/ferramentas/badget.css"> -->

	<script src="{{ url('layout/js/vendors/jquery.min.js') }}"></script>
    <script src="{{ url('layout/css/owlcarousel/owl.carousel.js') }}"></script>

     <!-- *************** Vegas ********************** -->
    <link rel="stylesheet" href="{{ url('layout/js/vendors/vegas/vegas.min.css') }}">
    <script src="{{ url('layout/js/vendors/vegas/vegas.min.js') }}"></script>

    <!-- ************* Popover ********************** -->
    <script src="{{ url('layout/js/vendors/popover/jquery.webui-popover.min.js') }}"></script>

    <!-- Angular Material requires Angular.js Libraries -->
	<script src="{{ url('app/vendors/angular/angular.js') }}"></script>

	<!-- ************* Popover ********************** -->
	<script src="{{ url('layout/js/vendors/popover/jquery.webui-popover.min.js') }}"></script>

	 <!-- Your application bootstrap  -->
	<script src="{{ url('layout/js/app/modules/ui-bootstrap.min.js') }}"></script>
	<script src="{{ url('layout/js/app/modules/datapicker/angular-datepicker.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('layout/js/app/modules/datapicker/angular-datepicker.min.css') }}">

	<!-- **************** App AngularJS ******************** -->
	<!-- App Angularjs -->
	<script data-require="angular-credit-cards@*" data-semver="3.0.1" src="https://rawgit.com/bendrucker/angular-credit-cards/v3.0.1/release/angular-credit-cards.js"></script>

	<script src="{{ url('layout/js/app/app.js') }}"></script>

	<script src="{{ url('app/vendors/angular-sanitize/angular-sanitize.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('app/vendors/ng-notify/dist/ng-notify.min.css') }}">
	<script src="{{ url('app/vendors/ng-notify/dist/ng-notify.min.js') }}"></script>
	<script src="{{ url('layout/js/vendors/angular-rateit/dist/ng-rateit.min.js') }}"></script>
	<script src="{{ url('app/vendors/angular-autocomplete/angucomplete-alt.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('layout/js/vendors/angular-rateit/dist/ng-rateit.css') }}">
	<!--Dialog-->
	<link rel="stylesheet" href="{{ url('layout/js/vendors/ng-dialog/css/ngDialog.min.css') }}">
	<link rel="stylesheet" href="{{ url('layout/js/vendors/ng-dialog/css/ngDialog-theme-default.min.css') }}">
	<script src="{{ url('layout/js/vendors/ng-dialog/js/ngDialog.min.js') }}"></script>

	<!--Toast-->
	<link rel="stylesheet" type="text/css" href="{{ url('layout/js/vendors/angular-toastr/dist/angular-toastr.css') }}" />
	<script type="text/javascript" src="{{ url('layout/js/vendors/angular-toastr/dist/angular-toastr.tpls.js') }}"></script>

	<!--- Controles -->

	<script src="{{ url('layout/bower_components/angular-locale-pt-br/angular-locale_pt-br.js') }}"></script>
	<!-- ********************** -->
	<link rel="stylesheet" href="{{ url('layout/css/templates/checkout.css') }}">
	<!-- Service -->
	<script src="{{ url('layout/js/services/checkoutService.js') }}"></script>
	<!-- Controller do Checkout -->
@include('ecommerce/controllers/checkoutController')

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

	.angucomplete-dropdown{
		background-color: #fff !important;
		width: 40% !important;
		cursor: pointer;
		margin: 0 auto;
		margin-top: 2px;
		z-index: 100;
		position: relative;
	}

	header .search_home button {
			height: 42px;
			margin-top: -1px !important;
			margin-left: 200px !important;
			width: 70px;
			position: absolute;
	}



</style>

<!-- Dialogs -->
<script type="text/ng-template" id="dialog01">
	<h1>Template heading</h1>
	<p>Content goes here</p>
</script>

<script type="text/ng-template" id="form-login">
	<form role="form" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			<div class="login-form">
					<div class="text-center">
							<div class=""><img src="{{ url('layout/img/logo_natalpraias.png')}}" alt="natal praias"></div>
							<h5 class="content-group-lg"><small class="display-block"></small></h5>
					</div>

					<div class="form-group has-feedback has-feedback-left">

							<input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

							@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
							@endif
							<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
							</div>
					</div>

					<div class="form-group has-feedback has-feedback-left">
							<input id="password" type="password" class="form-control input-lg" placeholder="Password" name="password" required>

							@if ($errors->has('password'))
									<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
							@endif
							<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
							</div>
					</div>

					<div class="form-group login-options">
							<div class="row">
									<div class="col-sm-6">
											<label class="checkbox-inline">

													<input type="checkbox" name="remember" class="styled" {{ old('remember') ? 'checked' : '' }}>
													Lembra-me
											</label>
									</div>

									<div class="col-sm-6 text-right">
											<a class="btn btn-link" href="{{ route('password.request') }}">
													Esqueceu sua sehna?
											</a>
									</div>
							</div>
					</div>

					<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Login <i class="icon-arrow-right14 position-right"></i></button>
					</div>
					<a href="{{ url('web/social/google') }}">Acessar com google</a>
					<a href="{{ url('web/social/facebook') }}">Acessar com facebook</a>

			</div>
	</form>
	<!-- /advanced login -->
</script>

</head>
<body>
	<!-- Inicio do Header -->
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
							<!--<li><a href="#" class="testPo" data-placement="bottom" ng-click="showListCar()"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho</a></li>-->
							<li ng-if="name_user == null || name_user == 'Visitante'"><a href="#login" ng-click="formLogin()"><div ng-show="name_user != 'Visitante' ">
								<i class="fa fa-user" aria-hidden="true"></i>	Entrar </div>
								<div ng-show="name_user == 'Visitante' "><i class="fa fa-user" aria-hidden="true"></i> @{{ name_user}} </div>
							</a></li>
							<li ng-if="name_user != null && name_user != 'Visitante'"><a href="{{ url('minha-pagina') }}"><i class="fa fa-user" aria-hidden="true"></i>@{{ name_user }}</a></li>
							<li><a class="btn" href="#">Cadastre-se</a></li>
							<li><a class="btn-idioma" href="#"><span><img style="margin-bottom: 3px;" src="{{ url('layout/img/portugues.png') }}" alt="idioma português"> Português</span></a></li>

						</ul>
					</nav>
					<ul>
						<li class="toogle_mobile"><a href="#menu_mobile"><span></span></a></li>
					</ul>

				</div>
			</div>

			<!--<nav id="menu_mobile" style="z-index: 99;">
				<ul style="margin-top: 40px;">
					<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Início</a></li>
					<li><a href="#" class="listheart"><i class="fa fa-heart" aria-hidden="true"></i> Lista de Desejos</a></li>
					<li><a href="#" class="carshop"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho</a></li>
					<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Entrar</a></li>
					<li><a class="btn btn-primary" href="#">Cadastre-se</a></li>
					<li><a class="btn-idioma" href="#"><span><img style="margin-bottom: 3px;" src="{{ url('layout/img/portugues.png') }}" alt="idioma português"> Português</span></a></li>
				</ul>
			</nav>-->

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
		<div class="container header-checkout">
			<div class="title_page_home">
				<h2>Os Melhores Passeios de Natal</h2>
				<!--<h1>PASSEIOS EM NATAL</h1>-->
			</div>
		</div>


	</header>
	<!-- Fim do Header -->
	<!-- Inicio do Main -->
	<main>
		<div class="atividades">
			<div class="row">
				<div class="container">
					<ul class="progressbar">
						<li class="active">Escolha Suas Atividades</li>
						<li class="action">Complete sua Compra</li>
						<li>Confirmação</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- Carrinho -->
		<div class="carrinho">
			<div class="row">
				<div class="container">
					<div class="titulo-session-carrinho">
						MEU CARRINHO
						<div class="border"></div>
					</div>
					<div class="top-list-car">
						<div class="row">
							<div class="link">
								<a href="#">Continuar Comprando </a>
							</div>
							<div class="desc-list">
								<label for="" style="padding-left: 0">Data da Atividade</label>
								<label for="">Quantidade</label>
								<label for="">Valor Unit. (R$)</label>
								<label for="">Valor Total (R$)</label>
							</div>
						</div>
					</div>
					<!-- Cart -->
					<div class="painel painel-default xs-stretch">
						<div class="painel-body" ng-repeat="list in listInfo">
							<article class="row product-row">
								<!-- Parte esquerda -->
								<div ng-repeat="img in list.Tour.imgs">
									<div ng-if="img.token_tour == list.Tour.tours[0].token_tour">
											<div class="part-left">
												<div class="media">
															<div class="media-left">
																<img src="img/@{{img.name}}" alt="@{{list.Tour.tours[0].title_tour}}" class="picture" width="194" height="120">
															</div>

													<div class="media-body">
														<h3 class="media-title">@{{list.Tour.tours[0].title_tour}}</h3>
														<h6 class="text-muted">Pipa - Natal</h6>
														<a href="#Remove" class="text-muted remove-item-cart" ng-click="deleteTour(list.id, list.price_total_tour)">
															<i class="fa fa-times"></i>
															<span>Remover</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<!-- Parte Direita -->
								<div class="part-right">
									<label for="" ng-init="">@{{list.date_tour | date: 'dd/MM/yyyy' }}<br><br>segunda-feira</label>

									<label for="">@{{list.count_adulto}} adulto(s)<br><br>@{{list.count_crianca}} criança(s)</label>
									<label for="">@{{list.price_total_adult | number: 2}}<br><br>@{{list.price_total_crian | number: 2}}</label>
									<label for=""><br>@{{list.price_total_tour}}</label>
								</div>
								<div class="endarticle"><hr></div>
							</article>
						</div>
						<div class="painel-footer text-right">
							<div class="row">
								<div class="reservado"></div><div class="subtotal text-muted">Subtotal</div> <div class="total">R$ @{{ total_price | number:2}}</div>
							</div>
						</div>
					</div>
					<!--/ Cart -->

				</div>
			</div>
		</div>
		<!-- Código Promocional -->
		<div class="cod-promocional">
			<div class="row">
				<div class="container">
					<div class="painel painel-defalt">
						<div class="painel-body">
							<div class="row">
								<div class="painel-left">
									<h2>Código promocional</h2>
									<h6>Insira o código promocional para obter desconto na sua compra</h6>
								</div>
								<div class="painel-right">
									<div class="input-promocional">
										<input type="text" class="form-control" ng-model="cupon">
										<span ng-show="erroCupon">Esse Cupon não é válido!</span>
										<button class="btn btn-primary" ng-click="checkCupon(cupon, total_price)">Aplicar</button>
									</div>
									<div class="label-desconto">Desconto</div>
									<div class="valor-desconto">R$ @{{ desconto | number: 2 }}</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Info Cliente -->
		<div class="info-User">
			<div class="row">
				<div class="container">
					<div class="title-user">
						<h2><span>1.</span> Informações do Comprador</h2>
					</div>
					<div class="painel painel-default">
						<div class="painel-body">
							<form action="#">
								<div class="row">
									<div class="name form-group">
										<label for="nome">Primeiro Nome</label>
										<input type="text" class="form-control" name="name" required="required" ng-pattern="[a-z]+$" placeholder="Primeiro Nome...">
									</div>
									<div class="lastname form-group">
										<label for="sobrenome">Sobrenome</label>
										<input type="text" class="form-control" name="lastname" placeholder="sobrenome...">
									</div>

								</div>

								<div class="row">
									<div class="email form-group">
										<label for="email">E-mail para contato</label>
										<input type="text" class="form-control" name="email" placeholder="E-mail para contato...">
									</div>
									<div class="doc-user form-group">
										<label for="doc-user">Documento de identificação</label>
										<input type="text" class="form-control" name="doc-user" placeholder="Identidade, CPF, CNH ou Passaporte...">
									</div>
									<div class="country form-group">
										<label for="country">Pais</label><br>
										<select name="country" class="form-control" id="country">
											<option value="brazil">Brasil</option>
											<option value="eua">EUA</option>
											<option value="arg">Argentina</option>
											<option value="urg">Uruguai</option>
											<option value="par">Paraguai</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="ddd-phone form-group">
										<label for="ddd-phone">Telefone</label>
										<input type="text" class="form-control" name="ddd-phone" placeholder="XX">
									</div>
									<div class="phone form-group">
										<input type="text" class="form-control" name="phone" placeholder="XXXX-XXXX">
									</div>

									<div ng-show="newPhone >= 2">
										<div class="ddd-phone form-group">
											<label for="ddd-phone">Telefone</label>
											<input type="text" class="form-control" name="ddd-phone" placeholder="XX">
										</div>
										<div class="phone form-group">
											<input type="text" class="form-control" name="phone" placeholder="XXXX-XXXX">
										</div>
									</div>

									<div ng-show="newPhone >= 3">
										<div class="ddd-phone form-group">
											<label for="ddd-phone">Telefone</label>
											<input type="text" class="form-control" name="ddd-phone" placeholder="XX">
										</div>
										<div class="phone form-group">
											<input type="text" class="form-control" name="phone" placeholder="XXXX-XXXX">
										</div>
									</div>


									<div class="link-more-phone" ng-show="newPhone <= 2">
										<a href="#/novo-telefone" ng-click="plusPhone()">Adicionar outro Telefone</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Translado -->
		<div class="info-translado">
			<div class="row">
				<div class="container">
					<div class="title-translado">
						<h2><span>2.</span> Informações para translado</h2>
					</div>
					<div class="painel painel-default">
						<div class="painel-body">
							<div class="row">
								<div class="passeio-translado">
									<h2>Praia do Gunga - Passeio Paradisíaco</h2>
									<h3 class="text-muted">Pipa - Natal</h3>
								</div>
								<div class="input-translado form-group">
									<label for="translado" class="text-muted">Local para translado</label>
									<input type="text" class="form-control" name="translado" placeholder="Informe o nome e/ou endereço completo da sua hospedagem para translado">
								</div>
								<div class="not-translado form-group">
									 <label class="text-muted">
								      <input type="checkbox" class="form-control"> Ainda não decidi sobre a hospedagem
								    </label>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="pagamento">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="title-pagamento">
							<h2><span>3.</span> Pagamento</h2>
							<img src="{{ url('layout/img/visa.png') }}" alt="visa" class="img-cards" width="50">
							<img src="{{ url('layout/img/master.png') }}" alt="master-card" class="img-cards" width="50">
							<img src="{{ url('layout/img/boleto.png') }}" alt="boleto" class="img-cards" width="50">
						</div>
						<div class="seguro-img">
							<img src="{{ url('layout/img/seguranca-checkout.jpg') }}" alt="seguranca" class="img-seguranca">
						</div>

					</div>

					<div class="painel painel-default">
						<div class="painel-body">
							<form name="ccForm">
								<div class="row">
									<div class="number-card form-group">
											 <div class="form-group">
												 <label for="card-number">Número do Cartão</label>
												 <input type="text" class="form-control" id="cardNumber" cc-format cc-number cc-eager-type name="ccNumber" ng-model="card.number" placeholder="xxxx xxxx xxxx xxxx">
											 </div>
									</div>

									<div class="name-card form-group">
										<label for="name-card">Titular do Cartão</label>
										<input type="text" class="form-control" name="name-card" placeholder="Titular do Cartão" ng-model="ccForm.nameCard">
									</div>

								</div>
								<div class="row">
									<div class="vaidate-card form-group">
										<label for="validate-card" style="float: left; width: 100%;">Validade</label>
										 <input style="width: 50%; float: left;" placeholder="MM" type="text" class="form-control" cc-exp-month name="ccExpMonth" ng-model="card.expiration.month">
										 <input style="width: 50%; float: left;" placeholder="YY" type="text" class="form-control" cc-exp-year name="ccExpYear" ng-model="card.expiration.year">
									</div>

									<div class="cod-secure-card form-group">
										<label for="cod-secure-card">Cód de segurança</label>
										<input type="text" class="form-control" id="cvc" cc-cvc cc-type="ccForm.ccNumber.$ccType" name="cod-secure-card" ng-init="showVerso=false" ng-focus="showVerso = true" ng-blur="showVerso = false" ng-model="card.cvc" maxlength="4">
									</div>

									<div class="parcelas form-group">
										<label for="parcelas">Número de parcelas</label><br>
										<select name="parcelas" class="form-control" id="parcelas">
											<option value="1">Á vista</option>
											<option value="2">2x R$ 150,00</option>
											<option value="3">3x R$ 75,60</option>
											<option value="4">4x R$ 23,50</option>
										</select>
									</div>

								</div>
							</form>
								<div class="row">
									<div class="card-info">
										<div class="card-front">
											<div class="number-card" cc-format>
												<span ng-show="card.number == null">0000 0000 0000 0000</span>
												<span ng-show="card.number != null">@{{card.number}}</span> <br>
												<span ng-show="card.expiration.month == null && card.expiration.year == null ">00/00</span>
												<span ng-show="card.expiration.month != null && card.expiration.year != null ">@{{card.expiration.month}}/@{{card.expiration.year}}</span> <br>
												<span ng-show="ccForm.nameCard == null">SEU NOME</span>
												<span ng-show="ccForm.nameCard != null">@{{ccForm.nameCard}}</span>
													<img src="{{ url('layout/img/visa.png') }}" style="float: right;" alt="visa" class="img-cards" width="45" ng-show="ccForm.ccNumber.$ccEagerType == 'Visa'">
													<img src="{{ url('layout/img/master.png') }}" style="float: right;" alt="master-card" class="img-cards" width="45" ng-show="ccForm.ccNumber.$ccEagerType == 'MasterCard'">
											</div>
										</div>
										<div class="card-back" style="display: block;" ng-show="showVerso">
											<div class="cod-secure" style="margin-top: 80px; margin-left: 300px;">
												<span ng-show="card.cvc == null">000</span>
												<span ng-show="card.cvc != null">@{{card.cvc}}</span>
											</div>
										</div>
									</div>
									<div class="painel-total-venda">
										<div class="row">
											<div class="labels">
												Subtotal<br>
												Taxas<br>
												Desconto<br><br>
												Total<br>
											</div>
											<div class="values">
												R$ 260,00<br>
												R$ 0,00<br>
												<span class="desc" ng-show="desconto != null">R$ @{{desconto | number: 2}}</span><br> <br>
												<span class="desc" ng-show="desconto == null">R$ 0,00</span><br> <br>
												<span class="total-painel" ng-show="total_validate == null">R$ @{{total_price | number: 2}}</span><br>
												<span class="total-painel" ng-show="total_validate != null">R$ @{{total_validate | number: 2}}</span><br>
											</div>
										</div>
										<div class="row">
											<button class="btn btn-primary btn-block">Finalizar compra</button>
										</div>
									</div>
								</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-checkout">
			<div class="row">
				<div class="container">
					<div class="termos-link">
						Ao Finalizar a Compra, Você Concorda com os <a href="#" >Termos de Uso</a> do Site.
					</div>
				</div>
			</div>
		</div>
	<!-- main -->
	</main>
	<!-- Fim do Main -->
	<!-- Inicio do Footer -->
	<div class="footer_init">
		<div class="row">
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
	</div>
	<footer>
		<div style="background: #fff" class="footer_secund">
			<div class="container">
				<div class="desc_footer">
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
<!-- Scripts -->
<script>

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
</body>

</html>
