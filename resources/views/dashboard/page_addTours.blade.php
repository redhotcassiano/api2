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

	@include('dashboard/angular-dashboard')
	<!-- Core JS files -->
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/blockui.min.js') }}"></script>
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
	<!-- /theme JS files -->
	<style media="screen">
		._720kb-datepicker-calendar {
				z-index: 9999 !important;
		}
	</style>

</head>

<body>

	@include('dashboard/menus_dashboard')

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Tours</span> - Adicionar Passeio</h4>
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
				<div class="content" ng-controller="dashAddTourController">

					<form action="#" name="form.msgForm">
						<!-- Centered forms -->
						<div class="row">
							<div class="col-md-12">

								<div class="col-md-12">
									<div class="panel panel-default ">
										<div class="panel-heading">
											<h6 class="panel-title">Informações Básicas do Passeio<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="collapse"></a></li>
							                		<li><a data-action="reload"></a></li>
							                		<li><a data-action="close"></a></li>
							                	</ul>
						                	</div>
										</div>

										<div class="panel-body">
											<div class="hiddenInputs">
													<input type="hidden" name="id_user_create" id="id_user_create" ng-init="toursNew.id_user_create={{ Auth::user()->id }}" ng-value="toursNew.id_user_create"/>

													<input type="hidden" name="token_tour" id="token_tour" ng-init="toursNew.token_tour={{ $scriptpage }}" ng-value="toursNew.token_tour"/>
												</div>

												<div class="form-group">
													<label>Titulo do Passeio:</label>
													<input type="text" class="form-control" placeholder="Titulo da Home..." value="" ng-model="toursNew.title_tour" required="true">

												</div>

												<div class="form-group">

													<input type="hidden" class="form-control" placeholder="slug da Home..." value="@{{toursNew.slug_tour = toursNew.title_tour}}" ng-model="toursNew.slug_tour">
												</div>


												<br>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6">
															<label>Categoria:</label>
															<select name="categori" id="categories" class="form-control" ng-model="toursNew.idCategorie" ng-options="categoria.id as categoria.name for categoria in categorias">
																<option value="">Selecione uma Categoria</option>
															</select>
														</div>
														<div class="col-md-6">
															<label>Status:</label>
															<select name="categori" id="categories" class="form-control" ng-model="toursNew.status" ng-options="status.id as status.name for status in statusTour">
																<option value="">Selecione um Status</option>
															</select>
														</div>
													</div>
												</div>
												<br>

												<div class="form-group">
													<label>Detalhes:</label>
													<div summernote ng-model="toursNew.details"></div>

												</div>
												<br>
												<br>
												<div class="form-group">
													<label>Sobre o Passeio:</label>
													<summernote ng-model="toursNew.about"></summernote>

												</div>
												<br>
												<br>
												<div class="form-group">
													<label>Perguntas Frequentes:</label>
													<summernote ng-model="toursNew.questions"></summernote>

												</div>
												<br>
												<br>
												<div class="form-group">
													<label>Dicas:</label>
													<summernote ng-model="toursNew.tips"></summernote>

												</div>

												<div class="form-group">
													<label class="col-lg-4 control-label text-semibold">Capa (Selecione só 1 imagem como Capa):</label>
													<div class="col-lg-12">
														<input id="file" type="file" class="file-input-cape">
													</div>
													<br>
													<label class="col-lg-4 control-label text-semibold">Banners:</label>
													<label class="col-lg-2 control-label text-semibold"></label>
													<div class="col-lg-12">
														<input id="file" type="file" class="file-input-ajax"  multiple="multiple">
													</div>
												</div>

												<br>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="panel panel-default ">
										<div class="panel-heading">
											<h6 class="panel-title">Preços e Ingressos<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="collapse"></a></li>
							                		<li><a data-action="reload"></a></li>
							                		<li><a data-action="close"></a></li>
							                	</ul>
						                	</div>
										</div>

										<div class="panel-body">
											<div class="row">
												<div class="col-md-4">
													<div class="row">
														<label>Preço:</label>
														<div class="input-group bootstrap-touchspin">
															<span class="input-group-btn"></span>
															<span class="input-group-addon bootstrap-touchspin-prefix">R$</span><input type="text" class="touchspin-prefix form-control" style="display: block;" ng-model="toursNew.price_cost"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn">
															</span>
														</div>
													</div>
													<div class="row">
														<span style="Color: red;" ng-show="toursNew.price_cost < 50">Alerta: O valor tem que ser acima de R$ 50.00!</span>
													</div>


												</div>
												<div class="col-md-4">
													<label>Parcelas:</label>
													<select name="categori" id="categories" class="form-control" ng-model="toursNew.number_parcela" ng-options="parcela.quant as parcela.quant for parcela in parcelas">
														<option value="">Selecione um Número de Parcelas</option>
													</select>
												</div>
												<div class="col-md-4">
													<label>Ingressos Por dia:</label>
													<div class="input-group bootstrap-touchspin">
														<span class="input-group-btn"></span><span class="input-group-addon bootstrap-touchspin-prefix"></span><input type="text" value="10" class="touchspin-prefix form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"></span></div>
												</div>
											</div>
											<br>
											<!-- Outros Criterios -->
											<div class="row"  ng-show="toursNew.price_cost != null">
												<div class="col-md-4">
													<label style="font-weight: bold">Crianças 5 a 11 anos: R$ @{{ toursNew.price_cost / 2 | number:2}}</label>

												</div>
												<div class="col-md-4">
													<input type="checkbox" checked="true" value="1" ng-model="toursNew.kidsOk">Permitir Passeios para Crianças.
												</div>
												<div class="col-md-4"></div>
											</div>
											<!-- /Outros Criterios -->

										</div>
									</div>
								</div>
								<!-- /Informações Basicas -->
								<!-- Valores -->
								<div class="col-md-12">
									<div class="panel panel-default ">
										<div class="panel-heading">
											<h6 class="panel-title">Temporadas<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="collapse"></a></li>
							                		<li><a data-action="reload"></a></li>
							                		<li><a data-action="close"></a></li>
							                	</ul>
						                	</div>
										</div>

										<div class="panel-body">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="display-block">Temporadas: </label>

														<div class="col-md-4">
																	<button type="button" class="btn btn-success" ng-click="plusDate()">
																		<i class="icon-calendar22 position-left"></i><span ng-show="seasonA.dateSeasonA == null">Click Para Informa Uma Nova Temporada</span> <span ng-show="seasonA.dateSeasonA != null">@{{seasonA.dateSeasonA}}&nbsp; - &nbsp; @{{seasonA.dateSeasonAA}}</span> <b class="caret"></b>
																	</button>
																	<datepicker date-month-title="selected year" date-format="yyyy-MM-dd" selector="form-control" ng-show="openDates">
																    <input type="text" name="begin_season" class="form-control" ng-model="seasonA.dateSeasonA" placeholder="Inicio"/>
																	</datepicker>
																	<datepicker date-month-title="selected year" date-format="yyyy-MM-dd" selector="form-control" ng-show="openDates">
																    <input type="text" name="end_season" class="form-control" ng-model="seasonA.dateSeasonAA" placeholder="Final"/>
																	</datepicker>
																	<div class="input-group bootstrap-touchspin" ng-show="seasonA.dateSeasonA != null">
																		<span class="input-group-btn">
																			</span><span class="input-group-addon bootstrap-touchspin-prefix">R$</span>
																			<input type="text" name="price_cost" value="0" class="touchspin-prefix form-control" style="display: block;" ng-blur="btnSave = true" ng-model="seasonA.price">
																			<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span>

																	</div>
																	<div class="col-md-12">
																		<input type="hidden" name="id_user_create" id="id_user_create" ng-init="seasonA.id_user_create={{ Auth::user()->id }}" ng-value="toursNew.id_user_create"/>

																		<input type="hidden" name="token_tour" id="token_tour" ng-init="seasonA.token_tour={{ $scriptpage }}" ng-value="toursNew.token_tour"/>
																	</div>
																		<div ng-hide="!btnSave">
																			<a href="#temporadas" type="submit" class="btn btn-primary btn-block" ng-click="saveSeason(seasonA, pSeason='A')" ng-show="btnSeasonA">Add</a>
																		</div>
																	</div>
														</div>


													</div>
												</div>

												<div class="col-md-12">
													<div class="text-right">
														<div ng-if="seasonplus <= 3">
															<input type="hidden" value="{{url('../tours')}}" ng-model="toursNew.url">
																<button type="button" class="btn border-warning text-warning-600 btn-flat btn-icon btn-rounded" ng-click="moreSeason()">
																	<i class="icon-plus2"></i>
																</button>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									@{{toursNew}} / @{{ seasonA }}
									<div class="text-right">
										<button type="button" class="btn btn-primary btn-ladda btn-ladda-progress ladda-button" data-style="zoom-out" ng-click="salvar(toursNew, seasonA)"
										ng-disabled="!toursNew.title_tour || !toursNew.token_tour || !toursNew.status || !toursNew.idCategorie || !toursNew.details || !toursNew.about ||
										 !toursNew.questions || !toursNew.tips || !toursNew.price_cost || !toursNew.number_parcela "><span class="ladda-label">Salvar o Passeio</span><span class="ladda-spinner"></span><div class="ladda-progress" style="width: 135px;"></div></button>
									</div>


								</div>

							</div>

						</div>

						<!-- /form centered -->
					</form>


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

    //
    // Define variables
    //

    // Modal template
    var modalTemplate = '<div class="modal-dialog modal-lg" role="document">\n' +
        '  <div class="modal-content">\n' +
        '    <div class="modal-header">\n' +
        '      <div class="kv-zoom-actions btn-group">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
        '      <h6 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h6>\n' +
        '    </div>\n' +
        '    <div class="modal-body">\n' +
        '      <div class="floating-buttons btn-group"></div>\n' +
        '      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</div>\n';

    // Buttons inside zoom modal
    var previewZoomButtonClasses = {
        toggleheader: 'btn btn-default btn-icon btn-xs btn-header-toggle',
        fullscreen: 'btn btn-default btn-icon btn-xs',
        borderless: 'btn btn-default btn-icon btn-xs',
        close: 'btn btn-default btn-icon btn-xs'
    };

    // Icons inside zoom modal classes
    var previewZoomButtonIcons = {
        prev: '<i class="icon-arrow-left32"></i>',
        next: '<i class="icon-arrow-right32"></i>',
        toggleheader: '<i class="icon-menu-open"></i>',
        fullscreen: '<i class="icon-screen-full"></i>',
        borderless: '<i class="icon-alignment-unalign"></i>',
        close: '<i class="icon-cross3"></i>'
    };

    // File actions
    var fileActionSettings = {
        zoomClass: 'btn btn-link btn-xs btn-icon',
        zoomIcon: '<i class="icon-zoomin3"></i>',
        dragClass: 'btn btn-link btn-xs btn-icon',
        dragIcon: '<i class="icon-three-bars"></i>',
        removeClass: 'btn btn-link btn-icon btn-xs',
        removeIcon: '<i class="icon-trash"></i>',
        indicatorNew: '<i class="icon-file-plus text-slate"></i>',
        indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
        indicatorError: '<i class="icon-cross2 text-danger"></i>',
        indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>'
    };


    //
    // Basic example
    //

    $('.file-input').fileinput({
        browseLabel: 'Browse',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });


    //
    // Custom layout   //



    //
    // Template modifications
    //

    $('.file-input-advanced').fileinput({
        browseLabel: 'Browse',
        browseClass: 'btn btn-default',
        removeClass: 'btn btn-default',
        uploadClass: 'btn bg-success-400',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            main1: "{preview}\n" +
                "<div class='input-group {class}'>\n" +
                "   <div class='input-group-btn'>\n" +
                "       {browse}\n" +
                "   </div>\n" +
                "   {caption}\n" +
                "   <div class='input-group-btn'>\n" +
                "       {upload}\n" +
                "       {remove}\n" +
                "   </div>\n" +
                "</div>",
            modal: modalTemplate
        },
        initialCaption: "Nenhuma Imagem Selecionada!",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });


    //
    // Custom file extensions
    //

    $(".file-input-extensions").fileinput({
        browseLabel: 'Browse',
        browseClass: 'btn btn-primary',
        uploadClass: 'btn btn-default',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        maxFilesNum: 10,
        allowedFileExtensions: ["jpg", "gif", "png", "txt"],
        initialCaption: "Nenhuma Imagem Selecionada!",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });


    //
    // AJAX upload
    //
    var $file = $('#file');

    $(".file-input-ajax").fileinput({

        uploadUrl: "{{ url('/v1/')}}/images", // server upload action
        uploadAsync: true,
        maxFileCount: 5,
        initialPreview: [],
        fileActionSettings: {
            removeIcon: '<i class="icon-bin"></i>',
            removeClass: 'btn btn-link btn-xs btn-icon',
            uploadIcon: '<i class="icon-upload"></i>',
            uploadClass: 'btn btn-link btn-xs btn-icon',
            indicatorNew: '<i class="icon-file-plus text-slate"></i>',
            indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
            indicatorError: '<i class="icon-cross2 text-danger"></i>',
            indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>',
        },
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
         uploadExtraData: {
            formId: {{ $scriptpage }},
            img_keywords: "happy, places",
            fileType: "banner",
        },
        initialCaption: "Nenhuma Imagem Selecionada",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons


    });


    $(".file-input-cape").fileinput({

        uploadUrl: "{{ url('/v1/')}}/images", // server upload action
        uploadAsync: true,
        maxFileCount: 1,
        initialPreview: [],
        fileActionSettings: {
            removeIcon: '<i class="icon-bin"></i>',
            removeClass: 'btn btn-link btn-xs btn-icon',
            uploadIcon: '<i class="icon-upload"></i>',
            uploadClass: 'btn btn-link btn-xs btn-icon',
            indicatorNew: '<i class="icon-file-plus text-slate"></i>',
            indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
            indicatorError: '<i class="icon-cross2 text-danger"></i>',
            indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>',
        },
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
         uploadExtraData: {
            formId: {{ $scriptpage }},
            img_keywords: "happy, places",
            fileType: "cape",
        },
        initialCaption: "Nenhuma Imagem Selecionada",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons


    });


    //
    // Misc
    //

    // Disable/enable button
    $("#btn-modify").on("click", function() {
        $btn = $(this);
        if ($btn.text() == "Disable file input") {
            $("#file-input-methods").fileinput("disable");
            $btn.html("Enable file input");
            alert("Hurray! I have disabled the input and hidden the upload button.");
        }
        else {
            $("#file-input-methods").fileinput("enable");
            $btn.html("Disable file input");
            alert("Hurray! I have reverted back the input to enabled with the upload button.");
        }
    });

});

</script>




</body>
</html>
