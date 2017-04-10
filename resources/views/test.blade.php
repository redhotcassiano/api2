<!DOCTYPE html>
<html lang="en" ng-app="test">
<head>
	<meta charset="UTF-8">
	<title>test page</title>
	<link rel="stylesheet" href="{{ url('layout/js/vendors/pickadate/lib/compressed/themes/classic.css') }}">
	<link rel="stylesheet" href="{{ url('layout/js/vendors/pickadate/lib/compressed/themes/classic.date.css') }}">
	<script src="{{ url('layout/js/vendors/jquery.min.js') }}"></script>
	<script src="{{ url('layout/js/vendors/pickadate/lib/compressed/legacy.js') }}"></script>
	<script src="{{ url('layout/js/vendors/pickadate/lib/picker.js') }}"></script>
	<script src="{{ url('layout/js/vendors/pickadate/lib/compressed/picker.date.js') }}"></script>
	<!-- Angular Js -->
	
    <script src="{{ url('layout/css/owlcarousel/owl.carousel.js') }}"></script>
    <!-- Angular Material requires Angular.js Libraries -->
	<script src="{{ url('app/vendors/angular/angular.js') }}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css">
	<script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>

	<!-- Angular Material Library -->
	<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
	<style>
		.datepicker {
		  visibility: hidden;
		  position: absolute;
		}
	</style>

	<!-- /Angular Js -->
	<script>
		var app = angular.module("test", []);

		app.controller("testController", function($scope){
			$scope.title = "test";
			$scope.itens = 1;
			$scope.dias = [1, 3, 7];
			$scope.moreDate = function(){
				$scope.itens += 1;
				console.log($scope.itens);
			}
		});
	</script>
</head>
<body ng-controller="testController">
	<h1>@{{title}}</h1>
	<div ng-hide="itens <= 1">
		<input type="text" class="datepicker" ng-model="date">
		@{{date}}
	</div>
	<div ng-hide="itens <= 2">
		<input type="text" class="datepicker">
	</div>
	<div ng-hide="itens <= 3">
		<input type="text" class="datepicker">
	</div>
	
	<div ng-hide="itens >= 3">
		<button ng-click="moreDate()">plus</button>
	</div>
	
	<div class="datepicker"></div>
</body>
<div ng-controller="testController">
	<script>
		$('.datepicker').pickadate({

		  weekdaysShort: ['Do', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
		  showMonthsShort: true,
		  today: '',
		  clear: '',
		  close: '',
		  min: new Date(),
	  	  max: new Date(2017,7,14),
	  	  inline: true,

	  	  disable: [
	  	  	 {{ $dias['dia1'] }},
		    new Date(2017,3,13),
		    new Date(2017,3,29)
		  ],
		});


		var $input = $('.datepicker').pickadate({});
		var picker = $input.pickadate('picker');

		//Also in the document.ready and just after
		//add this tweaks to display always the calendar without having to click on the input
		picker.$node.addClass('picker__input--active picker__input--target');
		picker.$node.attr('aria-expanded','true');
		picker.$root.addClass('picker--focused picker--opened');
		picker.$root.attr('aria-hidden','false');






	</script>
</div>
</html>