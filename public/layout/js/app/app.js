angular.module("home",['angucomplete-alt', 'ngDialog', 'toastr']);
angular.module("checkout",['ngDialog', 'toastr', 'ngNotify', 'credit-cards']).filter('yesNo', function () {
  return function (boolean) {
    return boolean ? 'Yes' : 'No';
  }
});
angular.module("pag-produto",['ui.bootstrap', '720kb.datepicker','ngNotify', 'ngRateIt', 'angucomplete-alt', 'ngDialog', 'toastr']);
angular.module("mypage",['ui.bootstrap', '720kb.datepicker','ngNotify']);
