<!DOCTYPE html>
<html lang="pt-br" ng-app="dashboard">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Natal Praias - Dashboard</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/components.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ url('js/blueimp-file-upload/css/jquery.fileupload.css') }}"">
	<link href="{{ url('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery.min.js') }}"></script>	
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ url('assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/pickers/daterangepicker.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/plupload/plupload.full.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/plupload/plupload.queue.min.js') }}"></script>

	<script type="text/javascript" src="{{ url('assets/js/core/appscript.js') }}"></script>
	<script src="{{$scriptpage}}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/media/fancybox.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<!-- /theme JS files > -->

	<!-- Angular Js -->
	<!--<script src="{{ url('app/vendors/jquery/jquery.js') }}"></script>-->
	<script src="{{ url('app/vendors/angular/angular.js') }}"></script>
	<script src="{{ url('app/app.js') }}"></script>	
	<!-- Serviços -->
	<script src="{{ url('app/services/pageHomeService.js') }}"></script>
	<script src="{{ url('app/services/imagensService.js') }}"></script>

	<!-- /Serviços -->
	<!-- Controllers -->
	<script src="{{ url('app/controllers/pageHomeController.js') }}"></script>

	<!-- /Angular Js -->

</head>

<body>
	
	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				<!-- Alterações nos Produtos -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="visible-xs-inline-block position-right">Alterações</span>
						<span class="badge bg-warning-400">9</span>
					</a>
					
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Atualizações de Produtos
							<ul class="icons-list">
								<li><a href="#"><i class="icon-sync"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-350">
							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									O Passeio <a href="#">Passeio em Pipa</a> foi alterado a
									<div class="media-annotation">4 minutos atrás</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									O Passeio <a href="#">Passeio em Pipa</a> foi alterado a
									<div class="media-annotation">4 minutos atrás</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									O Passeio <a href="#">Passeio em Pipa</a> foi alterado a
									<div class="media-annotation">4 minutos atrás</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									O Passeio <a href="#">Passeio em Pipa</a> foi alterado a
									<div class="media-annotation">4 minutos atrás</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									O Passeio <a href="#">Passeio em Pipa</a> foi alterado a
									<div class="media-annotation">31 Janeiro, 18:36 </div>
								</div>
							</li>							
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
			</ul>
			<!-- FIM Alterações nos Produtos -->
			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
			<!--	<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="assets/images/flags/de.png" alt=""> Deutsch</a></li>
						<li><a class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Українська</a></li>
						<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
						<li><a class="espana"><img src="assets/images/flags/es.png" alt=""> España</a></li>
						<li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
					</ul>
				</li>-->
				<!-- Mensagens de Contato -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Mensagens</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Mensagens
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="{{ url('assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">Como Posso realizar a Compra...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="{{url('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Ana Paula</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">Foi ótimo o passeio mas perdi...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{ url('assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Julio Macedo</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">Tem algum passeio para..</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="{{url('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Bruna Diaz</span>
										<span class="media-annotation pull-right">Seg</span>
									</a>

									<span class="text-muted">Estou com o boleto vencido posso...</span>
								</div>
							</li>							
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
				<!-- FIM Mensagens de Contato -->
				<!-- Perfil -->
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{url('assets/images/placeholder.jpg')}}" alt="">
						<span>{{ Auth::user()->name }} </span>
						<i class="caret"></i>
						
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
					<!--<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>-->
						<li><a href="#"><i class="icon-cog5"></i> Configrações</a></li>
						<li><a href="#"><i class="icon-switch2"></i> Sair</a></li>
					</ul>
				</li>
				<!-- FIM Perfil -->
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="{{ url('assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">{{ Auth::user()->name }} </span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Natal, RN
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Principal</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="{{ url('/dashboard') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href=""><i class="icon-stack2"></i> <span>Páginas do E-commerce</span></a>
									<ul>
										<li><a href="{{url('/dashboard/home-control')}}">Home</a></li>
										<li><a href="#">Tours</a></li>
										<li><a href="#">My Account</a></li>
										<li><a href="#">Contact</a></li>
										<li><a href="#">Checkout</a></li>
										<li><a href="#">Final Pay</a></li>
										<li class="navigation-divider"></li>
										<li><a href="#">Head</a></li>
										<li><a href="#">Menu</a></li>
										<li><a href="#">Footer</a></li>
										<li><a href="#">Cart</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-copy"></i> <span>Tours</span></a>
									<ul>
										<li><a href="#">Ver Passeios</a></li>
										<li><a href="#">Criar Passeio</a></li>
										<li><a href="#">Categorias</a></li>
										<li><a href="#">Calendário</a></li>										
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i> <span>Shop</span></a>
									<ul>
										<li><a href="#">Pedidos</a></li>
										<li><a href="#">Cart</a></li>
										<li><a href="#">Cupons</a></li>
										<li class="navigation-divider"></li>
										<li><a href="#">Relatorio de Vendas</a></li>
										<li><a href="#">Relatorio de Acessos</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Marketing</span></a>
									<ul>
										<li><a href="#">Criar Budget</a></li>
										<li><a href="#">Agendar Promoções</a></li>
										<li><a href="#">E-mails</a></li>
										<li><a href="#">Avisos</a></li>
										<li><a href="#">Redes Sociais</a></li>

									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Afiliados</span></a>
									<ul>
										<li><a href="#">Gerenciar Afiliados</a></li>
										<li><a href="#">Registrar Afiliado</a></li>
										<li><a href="#">Relatorio Geral</a></li>
										<li><a href="#">Notificações</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-list-unordered"></i> <span>Comentários <span class="label bg-blue-400">7</span></span></a></li>
								<li><a href="#"><i class="icon-width"></i> <span>Mensagens</span></a></li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Sistema</span> <i class="icon-menu" title="Forms"></i></li>
								<li>
									<a href="#"><i class="icon-pencil3"></i> <span>Usuários</span></a>
									<ul>
										<li><a href="#">Todos os Usuários</a></li>
										<li><a href="#">Adicionar Novo Usuário</a></li>
										<li><a href="#">Editar Perfil</a></li>
									</ul>
								</li>							

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->
			 @yield('content');

			

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2017. <a href="#">Natal Praias</a> by <a href="https://everflyagencia.com.br" target="_blank">Everfly</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->




</body>
</html>
