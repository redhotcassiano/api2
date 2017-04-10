/*** You must include the dependency on 'ngMaterial' */
angular.module('pag-produto').controller('TabController', ['$scope', function($scope) {
	$scope.tab = 1;

	$scope.setTab = function(newTab){
	    $scope.tab = newTab;
	};

	$scope.isSet = function(tabNum){
	   return $scope.tab === tabNum;
	};
}]);


angular.module('pag-produto').controller('pag-produtoController',  function($scope, $http){
	//********Popover**************//
	$scope.items = [{
	      name: "Action"
	    }, {
	      name: "Another action"
	    }, {
	      name: "Something else here"
	    }];
});