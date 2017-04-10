angular.module("dashboard").directive("uiImages", function(){
	return {
		template: '<input type="text" name="token" id="token" value="{{randCod}}">',
		replace: true
	};
});