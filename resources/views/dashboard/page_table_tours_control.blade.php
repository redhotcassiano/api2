<!DOCTYPE html>
<html lang="en" ng-app="dashboard">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Passeios - Natal Prais</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	 <!-- Core JS files -->
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->	
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

	<script type="text/javascript" src="{{ url('assets/js/core/appscript.js') }}"></script>
	
	<!-- /theme JS files -->
	<!-- include summernote css/js-->
	
	<!-- /theme JS files -->

</head>

<body>

	@include('dashboard/menus_dashboard')

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Páginas do E-commerce</span> - Tours</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_layout_vertical.html">Form layouts</a></li>
							<li class="active">Vertical</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content" >


					<!-- Centered forms -->
					<div class="row">
						<div class="col-md-12">
							<form action="#">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<div class="row">
											<div class="col-md-12">
												<h5 class="panel-title">Informações da Página</h5>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>
										</div>
									</div>

									<div class="panel-body" ng-controller="pageToursController">
										<div class="row">
											<div class="col-md-10 col-md-offset-1">
												<div class="input-group content-group">
													<div class="has-feedback has-feedback-left">
														<input type="text" class="form-control input-xlg" value="" placeholder="Pesquisar Passeios">
														<div class="form-control-feedback">
															<i class="icon-search4 text-muted text-size-base"></i>
														</div>
													</div>

													<div class="input-group-btn">
														<a href="{{ url('dashboard/addtours') }}" class="btn btn-primary btn-xlg">Add Passeio</a>
													</div>
												</div>
											</div>
										</div>
										<div class="row">											
											<div class="col-md-12">										

												<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th class="col-lg-3">Imagem</th>
																	<th class="col-lg-3">Titulo</th>
																	<th class="col-lg-2">Preço</th>
																	<th class="col-lg-2">Última Atualização</th>
																	<th class="col-lg-2">Opções</th>																	
																</tr>
															</thead>
															<tbody ng-repeat="tour in tours">
														        <tr>
													                <td>Airi Satou (33)</td>
													                <td>@{{tour.title_tour}}</td>
													                <td>R$ @{{tour.price_cost}}</td>
													                <td>28/02/2017 por Ricardo</td>
													                <td>
																		<ul class="icons-list">
																			<li class="text-primary-600"><a href="#"><i class="icon-pencil7"></i></a></li>
																			<li class="text-danger-600"><a href="#"><i class="icon-trash"></i></a></li>
																			<li class="text-teal-600"><a href="#"><i class="icon-cog7"></i></a></li>
																		</ul>
																	</td>
													            </tr>
													            <tr>
													                <td>Airi Satou (33)</td>
													                <td>Passeio Natal</td>
													                <td>R$ 96.90</td>
													                <td>28/02/2017 por Ricardo</td>
													                <td>
																		<ul class="icons-list">
																			<li class="text-primary-600"><a href="#"><i class="icon-pencil7"></i></a></li>
																			<li class="text-danger-600"><a href="#"><i class="icon-trash"></i></a></li>
																			<li class="text-teal-600"><a href="#"><i class="icon-cog7"></i></a></li>
																		</ul>
																	</td>
													            </tr>
												            </tbody>
														</table>
													</div>
												</div>
												<!-- /default table -->
											</div>
										</div>
									</div>
							</form>
						</div>
						
	
					</div>
					<!-- /form centered -->

										
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


	@include('dashboard/angular-dashboard')

</body>
</html>