@extends('dashboard/template_dashboard')
@section('content')
<script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/pages/form_select2.js') }}"></script>

<!--<script type="text/javascript" src="{{ url('assets/js/pages/uploader_bootstrap.js') }}"></script>-->

<!-- Page header -->
<div class="page-header page-header-default">
	<div class="page-header-content">
		<div class="page-title">
			<h4><a href="dashboard"><i class="icon-arrow-left52 position-left"></i></a><span class="text-semibold">Páginas do E-commerce</span> - Home</h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group">
				<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>				
			</div>
		</div>
	</div>

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li><a href="dashboard"><i class="icon-home2 position-left"></i> Dashboard</a></li>			
			<li class="active">Páginas do E-commerce - Home</li>
		</ul>
		
	</div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content" ng-controller="pageHomeController">

<!-- Vertical form options -->
<div class="row">
<div class="col-md-12">

<!-- Basic layout-->
<form action="#">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title"></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<!--<li><a data-action="collapse"></a></li>-->
            		<li><a data-action="reload"></a></li>
            		<!--<li><a data-action="close"></a></li>-->
            	</ul>
        	</div>
		</div>

		<div class="panel-body" ng-repeat="paghome in pagehome">
			
			<div class="form-group">
				<label>Titulo da Home:</label>
				<input type="text" class="form-control" placeholder="Titulo da Home..." value="@{{paghome.title_home}} " ng-model="paghome.title_home">
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
                <label>Ativar </label>
                <select data-placeholder="Select a state..." class="select-icons select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                    <optgroup label="Services">
                        <option value="wordpress2" data-icon="wordpress2">Wordpress</option>
                        <option value="tumblr2" data-icon="tumblr2">Tumblr</option>
                        <option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
                        <option value="pinterest2" data-icon="pinterest2">Pinterest</option>
                        <option value="lastfm2" data-icon="lastfm2">Lastfm</option>
                    </optgroup>
                    <optgroup label="File types">
                        <option value="pdf" data-icon="file-pdf">PDF</option>
                        <option value="word" data-icon="file-word">Word</option>
                        <option value="excel" data-icon="file-excel">Excel</option>
                        <option value="openoffice" data-icon="file-openoffice">Open office</option>
                    </optgroup>
                    <optgroup label="Browsers">
                        <option value="chrome" data-icon="chrome" selected="selected">Chrome</option>
                        <option value="firefox" data-icon="firefox">Firefox</option>
                        <option value="safari" data-icon="safari">Safari</option>
                        <option value="opera" data-icon="opera">Opera</option>
                        <option value="IE" data-icon="IE">IE</option>
                    </optgroup>
                </select><span class="select2 select2-container select2-container--default select2-container--above" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-re07-container"><span class="select2-selection__rendered" id="select2-re07-container" title="Chrome"><i class="icon-chrome"></i>Chrome</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
			<div class="row">
				<div class="form-group col-md-6">
					<label>Novidades da Home:</label>
					<input type="checkbox" name="test" id="test"> Ativado.

				</div>
				<div class="form-group col-md-6">
					<label>Mais Procurados da Home:</label>
					<input type="checkbox" name="test" id="test"> Ativado.
				</div>
			</div><br>
			

			<div class="text-right">
				<input type="hidden" id="id" name="id" value="@{{paghome.id}}"  ng-model="paghome.id">	
				<button type="submit" class="btn btn-primary" ng-click="update(paghome)">Atualizar a Página <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</div>
	</div>
	
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
				<div ng-repeat="banner in banners">
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
			<div class="form-group">
				<label class="col-lg-2 control-label text-semibold"></label>
				<div class="col-lg-10">
					<input id="file" type="file" class="file-input-ajax" data-id="1" multiple="multiple">			
				</div>
			</div>
		</div>
	</div>
</form>


</div>

</div>

<!-- /basic layout -->
<div></div>
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

@endsection