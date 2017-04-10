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

	 <!-- Include Font Awesome. -->	 
	 
	  <link href="{{ url('app/vendors/editor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<!-- Include Froala Editor styles -->
	  <link rel="stylesheet" href="{{ url('app/vendors/editor/froala-wysiwyg-editor/css/froala_editor.min.css') }}" />
	  <link rel="stylesheet" href="{{ url('app/vendors/editor/froala-wysiwyg-editor/css/froala_style.min.css') }}" />

	<!-- Charts -->
	{!! Charts::assets() !!}		

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->	

	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/plupload/plupload.full.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/plupload/plupload.queue.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/appscript.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/velocity/velocity.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/velocity/velocity.ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/buttons/spin.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/buttons/ladda.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/pages/components_buttons.js') }}"></script>

	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>	
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	
	<script type="text/javascript" src="{{ url('assets/js/plugins/notifications/jgrowl.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/pickers/daterangepicker.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/pickers/anytime.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/pickers/pickadate/picker.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/pickers/pickadate/picker.date.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/pickers/pickadate/picker.time.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/pickers/pickadate/legacy.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/notifications/pnotify.min.js') }}"></script>

	<script type="text/javascript" src="{{ url('assets/js/pages/picker_date.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/pages/form_layouts.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/pages/form_select2.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/pages/components_notifications_pnotify.js') }}"></script>	
	<!--<script type="text/javascript" src="{{ url('assets/js/pages/editor_summernote.js') }}"></script>-->


	
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Dashboard</span></h4>
						</div>						
					</div>					
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content" ng-controller="pageToursController">
					<div class="row">
						<div class="col-lg-7">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Traffic sources</h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="checked">
													Live update:
												</label>
											</div>
										</form>
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-4">
											<ul class="list-inline text-center">
												<li>
													<a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a>
												</li>
												<li class="text-left">
													<div class="text-semibold">Novas Compras</div>
													<div class="text-muted">2349</div>
												</li>
											</ul>

											<div class="col-lg-10 col-lg-offset-1">
												<div class="content-group" id="new-visitors"></div>
											</div>
										</div>

										<div class="col-lg-4">
											<ul class="list-inline text-center">
												<li>
													<a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
												</li>
												<li class="text-left">
													<div class="text-semibold">Visitantes Novos</div>
													<div class="text-muted">2500</div>
												</li>
											</ul>

											<div class="col-lg-10 col-lg-offset-1">
												<div class="content-group" id="new-sessions"></div>
											</div>
										</div>

										<div class="col-lg-4">
											<ul class="list-inline text-center">
												<li>
													<a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
												</li>
												<li class="text-left">
													<div class="text-semibold">Total online</div>
													<div class="text-muted"><span class="status-mark border-success position-left"></span> 5,378</div>
												</li>
											</ul>

											<div class="col-lg-10 col-lg-offset-1">
												<div class="content-group" id="total-online"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="position-relative" id="traffic-sources">
									 {!! $chart->render() !!}
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<!-- Sales stats -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Sales statistics</h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<select class="change-date select-sm" id="select_date">
													<optgroup label="<i class='icon-watch pull-right'></i> Time period">
														<option value="val1">June, 29 - July, 5</option>
														<option value="val2">June, 22 - June 28</option>
														<option value="val3" selected="selected">June, 15 - June, 21</option>
														<option value="val4">June, 8 - June, 14</option>
													</optgroup>
												</select>
											</div>
										</form>
				                	</div>
								</div>

								<div class="container-fluid">
									<div class="row text-center">
										<div class="col-md-4">
											<div class="content-group">
												<h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
												<span class="text-muted text-size-small">orders weekly</span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="content-group">
												<h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
												<span class="text-muted text-size-small">orders monthly</span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="content-group">
												<h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> $23,464</h5>
												<span class="text-muted text-size-small">average revenue</span>
											</div>
										</div>
									</div>
								</div>

								<div class="content-group-sm" id="app_sales">
									{!! $chart_tour->render() !!}
								</div>
								<div id="monthly-sales-stats"></div>
							</div>
							<!-- /sales stats -->
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Acesso aos Tours</h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="">
													Live update:
												</label>
											</div>
										</form>
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Novos Comentarios</h6>
									<div class="heading-elements">
										<!--<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="">
													Live update:
												</label>
											</div>
										</form>-->
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Útimas Vendas</h6>
									<div class="heading-elements">
										<!--<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="">
													Live update:
												</label>
											</div>
										</form>-->
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Útimas Vendas de Afiliados</h6>
									<div class="heading-elements">
										<!--<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="">
													Live update:
												</label>
											</div>
										</form>-->
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Acessos por Redes Sociais</h6>
									<div class="heading-elements">
										<!--<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="">
													Live update:
												</label>
											</div>
										</form>-->
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
									</div>
								</div>
							</div>
						</div>
					</div>
															
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
	<script>
		$(function() {    


		    // Switchery toggles
		    // ------------------------------

		    var switches = Array.prototype.slice.call(document.querySelectorAll('.switch'));
		    switches.forEach(function(html) {
		        var switchery = new Switchery(html, {color: '#4CAF50'});
		    });	    

		});

		// Menu
	        var menu = $("#select_date").multiselect({
	            buttonClass: 'btn btn-link text-semibold',
	            enableHTML: true,
	            dropRight: true,
	            onChange: function() { change(), $.uniform.update(); },
	            buttonText: function (options, element) {
	                var selected = '';
	                options.each(function() {
	                    selected += $(this).html() + ', ';
	                });
	                return '<span class="status-mark border-warning position-left"></span>' + selected.substr(0, selected.length -2);
	            }
	        });

	        // Radios
	        $(".multiselect-container input").uniform({ radioClass: 'choice' });
	</script>


	
@include('dashboard/angular-dashboard')
	 
          
</body>
</html>