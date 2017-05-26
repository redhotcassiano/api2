angular.module("home",['angucomplete-alt', 'ngDialog', 'toastr']);
angular.module("checkout",['ngDialog', 'toastr', 'ngNotify', 'credit-cards', 'angular-page-loader']).filter('yesNo', function () {
  return function (boolean) {
    return boolean ? 'Yes' : 'No';
  }
}).run(function($timeout, $rootScope) {

    $timeout(function() { // simulate long page loading
        $rootScope.isLoading = false; // turn "off" the flag
    }, 3000)

});
angular.module("pag-produto",['ui.bootstrap', '720kb.datepicker','ngNotify', 'ngRateIt', 'angucomplete-alt', 'ngDialog', 'toastr']);
angular.module("mypage",['ui.bootstrap', '720kb.datepicker','ngNotify']);
