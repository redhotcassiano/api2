<!-- Main navbar -->
<div class="navbar navbar-inverse">
<div class="navbar-header">
<a class="navbar-brand" href="index.html"><img src="{{ url('assets/images/logo_light.png') }}" alt=""></a>

<ul class="nav navbar-nav visible-xs-block">
	<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
	<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
</ul>
</div>

<div class="navbar-collapse collapse" id="navbar-mobile">
<ul class="nav navbar-nav">
	<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="icon-git-compare"></i>
			<span class="visible-xs-inline-block position-right">Git updates</span>
			<span class="badge bg-warning-400">9</span>
		</a>
		
		<div class="dropdown-menu dropdown-content">
			<div class="dropdown-content-heading">
				Git updates
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
						Drop the IE <a href="#">specific hacks</a> for temporal inputs
						<div class="media-annotation">4 minutes ago</div>
					</div>
				</li>

				<li class="media">
					<div class="media-left">
						<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
					</div>
					
					<div class="media-body">
						Add full font overrides for popovers and tooltips
						<div class="media-annotation">36 minutes ago</div>
					</div>
				</li>

				<li class="media">
					<div class="media-left">
						<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
					</div>
					
					<div class="media-body">
						<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
						<div class="media-annotation">2 hours ago</div>
					</div>
				</li>

				<li class="media">
					<div class="media-left">
						<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
					</div>
					
					<div class="media-body">
						<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
						<div class="media-annotation">Dec 18, 18:36</div>
					</div>
				</li>

				<li class="media">
					<div class="media-left">
						<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
					</div>
					
					<div class="media-body">
						Have Carousel ignore keyboard events
						<div class="media-annotation">Dec 12, 05:46</div>
					</div>
				</li>
			</ul>

			<div class="dropdown-content-footer">
				<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
			</div>
		</div>
	</li>
</ul>

<p class="navbar-text">
	<span class="label bg-success">Online</span>
</p>

<div class="navbar-right">
	<ul class="nav navbar-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-people"></i>
				<span class="visible-xs-inline-block position-right">Users</span>
			</a>
			
			<div class="dropdown-menu dropdown-content">
				<div class="dropdown-content-heading">
					Users online
					<ul class="icons-list">
						<li><a href="#"><i class="icon-gear"></i></a></li>
					</ul>
				</div>

				<ul class="media-list dropdown-content-body width-300">
					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading text-semibold">Jordana Ansley</a>
							<span class="display-block text-muted text-size-small">Lead web developer</span>
						</div>
						<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
					</li>

					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading text-semibold">Will Brason</a>
							<span class="display-block text-muted text-size-small">Marketing manager</span>
						</div>
						<div class="media-right media-middle"><span class="status-mark border-danger"></span></div>
					</li>

					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading text-semibold">Hanna Walden</a>
							<span class="display-block text-muted text-size-small">Project manager</span>
						</div>
						<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
					</li>

					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading text-semibold">Dori Laperriere</a>
							<span class="display-block text-muted text-size-small">Business developer</span>
						</div>
						<div class="media-right media-middle"><span class="status-mark border-warning-300"></span></div>
					</li>

					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
							<span class="display-block text-muted text-size-small">UX expert</span>
						</div>
						<div class="media-right media-middle"><span class="status-mark border-grey-400"></span></div>
					</li>
				</ul>

				<div class="dropdown-content-footer">
					<a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
				</div>
			</div>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bubbles4"></i>
				<span class="visible-xs-inline-block position-right">Messages</span>
				<span class="badge bg-warning-400">2</span>
			</a>
			
			<div class="dropdown-menu dropdown-content width-350">
				<div class="dropdown-content-heading">
					Messages
					<ul class="icons-list">
						<li><a href="#"><i class="icon-compose"></i></a></li>
					</ul>
				</div>

				<ul class="media-list dropdown-content-body">
					<li class="media">
						<div class="media-left">
							<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
							<span class="badge bg-danger-400 media-badge">5</span>
						</div>

						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">James Alexander</span>
								<span class="media-annotation pull-right">04:58</span>
							</a>

							<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left">
							<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
							<span class="badge bg-danger-400 media-badge">4</span>
						</div>

						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Margo Baker</span>
								<span class="media-annotation pull-right">12:16</span>
							</a>

							<span class="text-muted">That was something he was unable to do because...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Jeremy Victorino</span>
								<span class="media-annotation pull-right">22:48</span>
							</a>

							<span class="text-muted">But that would be extremely strained and suspicious...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Beatrix Diaz</span>
								<span class="media-annotation pull-right">Tue</span>
							</a>

							<span class="text-muted">What a strenuous career it is that I've chosen...</span>
						</div>
					</li>

					<li class="media">
						<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
						<div class="media-body">
							<a href="#" class="media-heading">
								<span class="text-semibold">Richard Vango</span>
								<span class="media-annotation pull-right">Mon</span>
							</a>
							
							<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
						</div>
					</li>
				</ul>

				<div class="dropdown-content-footer">
					<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
				</div>
			</div>
		</li>

		<li class="dropdown dropdown-user">
			<a class="dropdown-toggle" data-toggle="dropdown">
				<img src="assets/images/placeholder.jpg" alt="">
				<span>{{ Auth::user()->name }}</span>
				<i class="caret"></i>
			</a>

			<ul class="dropdown-menu dropdown-menu-right">
				<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
				<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
				<li><a href="#"><span class="badge bg-blue pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
				<li><a href="{{ url('logout') }}"><i class="icon-switch2"></i> Logout</a></li>
			</ul>
		</li>
	</ul>
</div>
</div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

<!-- Page content -->
<div class="page-content">

<!-- Main sidebar -->
<!-- Main sidebar -->
<div class="sidebar sidebar-main">
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<a href="#" class="media-left"><img src="{{ url('assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></a>
					<div class="media-body">
						<span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
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
							<li><a href="{{url('/dashboard/tours-control')}}">Tours</a></li>
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
							<li><a href="{{url('/dashboard/tours')}}">Ver Passeios</a></li>
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

