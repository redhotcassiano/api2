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
							<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Lista de Desejos</a></li>
							<!--<li><a href="#" class="testPo" data-placement="bottom" ng-click="showListCar()"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Carrinho</a></li>-->
							@if(Auth::user()->name == null)
							<li><a href="{{ url('login') }}"><i class="fa fa-user" aria-hidden="true"></i>Entrar</a></li>
							@endif
							@if(Auth::user()->name != null)
							<li><a href="{{ url('minha-pagina') }}"><i class="fa fa-user" aria-hidden="true"></i>{{ Auth::user()->name }}</a></li>
							@endif
							<!--<li><a class="btn" href="#">Cadastre-se</a></li>-->
							<li><a class="btn-idioma" href="#"><span><img style="margin-bottom: 3px;" src="{{ url('layout/img/portugues.png') }}" alt="idioma português"> Português</span></a></li> 
						</ul>
					</nav>
				</div>					
			</div>							
		</div>	
		
			
	</header>
	<!-- Fim do Header -->