<!DOCTYPE html>
<html lang="en" ng-app="dashboard">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard - Natal Prais</title>

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
	<script type="text/javascript" src="{{ url('assets/js/plugins/loaders/blockui.min.j') }}s"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/plupload/plupload.full.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/plupload/plupload.queue.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/pages/form_select2.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/media/fancybox.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script type="text/javascript" src="{{ url('assets/js/core/appscript.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/pages/form_layouts.js') }}"></script>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Páginas do E-commerce</span> - Home</h4>
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
				<div class="content" ng-controller="pageHomeController">


					<!-- Centered forms -->
					<div class="row">
						<div class="col-md-12">
							<form action="#">
								<div class="panel panel-flat">
									<div class="panel-heading">
										<div class="row">
											<div class="col-md-10 col-md-offset-1">
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

									<div class="panel-body" ng-repeat="paghome in pagehome">
										<div class="row">
											<div class="col-md-10 col-md-offset-1">
												<div class="form-group">
													<label>Titulo da Home:</label>
													<input type="text" class="form-control" placeholder="Titulo da Home..." value="paghome.title_home" ng-model="paghome.title_home">
												</div>	

												<div class="form-group">
													<label>Subtitulo da Home:</label>
													<input type="text" class="form-control" placeholder="Subtitulo da Home..." value="@{{paghome.subtitle_home}}" ng-model="paghome.subtitle_home">
												</div>

												<div class="form-group">
													<label>Subtexto da Newsletter:</label>
													<input type="text" class="form-control" placeholder="Subtexto da Newsletter..." value="@{{paghome.subtext_newslatter}}" ng-model="paghome.subtext_newslatter">
												</div>			
									            <div class="form-group">
									                <label>Ativar Novidades</label>
									                <select name="new_tours" class="form-control" >     
									                   
								                        <option value="1" data-icon="chrome" selected="selected">Ativo</option>
								                        <option value="2" data-icon="firefox">Desativado</option>    
									                   
									                </select>
									            </div>
												 <div class="form-group">
									                <label>Ativar Destaques</label>
									                <select name="new_tours" class="form-control" >     
									                   
								                        <option value="1" data-icon="chrome" selected="selected">Ativo</option>
								                        <option value="2" data-icon="firefox">Desativado</option>    
									                   
									                </select>
									            </div>
									            <br>
			

												<div class="text-right">
													<input type="hidden" id="id" name="id" value="@{{paghome.id}}"  ng-model="paghome.id">	
													<button type="submit" class="btn btn-primary" ng-click="update(paghome)">Atualizar a Página <i class="icon-arrow-right14 position-right"></i></button>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						
	
					</div>
					<!-- /form centered -->

					<div class="panel">
						<div class="panel-heading">
							<h5 class="panel-title">Banners</h5>
							<div class="heading-elements">
								<ul class="icons-list">
				            		<!--<li><a data-action="collapse"></a></li>-->
				            		<li><a data-action="reload"></a></li>
				            		<!--<li><a data-action="close"></a></li>-->
				            	</ul>
				        	</div>
						</div>

						<div class="panel-body" ng-controller="pageHomeController" >
							<div class="row" >
								<div ng-repeat="paghome in pagehome">
									<div ng-repeat="banner in banners">
										<div ng-if="paghome.id == banner.idPages">
											<div class="col-lg-3 col-sm-6">
												<div class="thumbnail">
													<div class="thumb">
														<img src="{{ url('/img/') }}/@{{banner.name}}" alt="">
														<div class="caption-overflow">
															<span>
																<a href="{{ url('/img/') }}/@{{banner.name}}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
																<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>									
								</div>
								</div>
																
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label text-semibold"></label>
								<div class="col-lg-12">
									<input id="file" type="file" class="file-input-ajax" data-id="1" multiple="multiple">			
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
	/* ------------------------------------------------------------------------------
*
*  # Bootstrap multiple file uploader
*
*  Specific JS code additions for uploader_bootstrap.html page
*
*  Version: 1.2
*  Latest update: Aug 10, 2016
*
* ---------------------------------------------------------------------------- */

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
    // Custom layout
    //

    $('.file-input-custom').fileinput({
        previewFileType: 'image',
        browseLabel: 'Select',
        browseClass: 'btn bg-slate-700',
        browseIcon: '<i class="icon-image2 position-left"></i> ',
        removeLabel: 'Remove',
        removeClass: 'btn btn-danger',
        removeIcon: '<i class="icon-cancel-square position-left"></i> ',
        uploadClass: 'btn bg-teal-400',
        uploadIcon: '<i class="icon-file-upload position-left"></i> ',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        initialCaption: "Please select image",
        mainClass: 'input-group',
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });


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
        initialCaption: "No file selected",
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
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });


    //
    // Always display preview
    //

    $(".file-input-preview").fileinput({
        browseLabel: 'Browse',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        initialPreview: [
            "assets/images/demo/images/1.png",
            "assets/images/demo/images/2.png",
        ],
        initialPreviewConfig: [
            {caption: "Jane.jpg", size: 930321, key: 1, showDrag: false},
            {caption: "Anna.jpg", size: 1218822, key: 2, showDrag: false}
        ],
        initialPreviewAsData: true,
        overwriteInitial: false,
        maxFileSize: 100,
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });


    //
    // Display preview on load
    //

    $(".file-input-overwrite").fileinput({
        browseLabel: 'Browse',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        initialPreview: [
            "assets/images/demo/images/1.png",
            "assets/images/demo/images/2.png"
        ],
        initialPreviewConfig: [
            {caption: "Jane.jpg", size: 930321, key: 1, showDrag: false},
            {caption: "Anna.jpg", size: 1218822, key: 2, showDrag: false}
        ],
        initialPreviewAsData: true,
        overwriteInitial: true,
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });


    //
    // AJAX upload
    //
    var $file = $('#file'); 

    $(".file-input-ajax").fileinput({   

        uploadUrl: "{{ url('/v1/')}}/imagespages", // server upload action
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
            formId: $file.data('id'),
            img_keywords: "happy, places",
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

@include('dashboard/angular-dashboard')

</body>
</html>