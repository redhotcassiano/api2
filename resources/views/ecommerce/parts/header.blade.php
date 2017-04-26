<!-- Inicio do Header -->
	<header>

		<div class="header_barra menufixo menu-shadow">
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
							<li ng-if="name_user == null || name_user == '' "><a href="#login" ng-click="formLogin()"><i class="fa fa-user" aria-hidden="true"></i>Entrar </a></li>
							<li ng-if="name_user != null && name_user != ''"><a href="{{ url('minha-pagina') }}"><i class="fa fa-user" aria-hidden="true"></i>@{{ name_user }}</a></li>
							<li><a class="btn" href="#">Cadastre-se</a></li>
							<li><a class="btn-idioma" href="#"><span><img style="margin-bottom: 3px;" src="{{ url('layout/img/portugues.png') }}" alt="idioma português"> Português</span></a></li>

						</ul>
					</nav>
					<ul>
						<li class="toogle_mobile"><a href="#menu_mobile"><span></span></a></li>
					</ul>

				</div>
			</div>
		</div>
		<div id="ShopCart" >
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
			<div class="row">
				<div class="col-md-12">
					<button class="btn btn-primary btn-block">Finalizar Compra</button>
				</div>
			</div>

		</div>
	</header>
	<!-- Fim do Header -->
