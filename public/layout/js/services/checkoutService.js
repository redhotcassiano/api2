angular.module("checkout").factory('checkoutService',function($http) {
	return {

		getCart: function(ip, user){
			return $http.get('/v1/checkout/getCart/'+ip+'/'+user);
		},

		getList: function(id){
			return $http.get('/v1/checkout/getListCart/'+id);
		},

		updatePriceCart: function(id, total){
			return $http.put('/web/cart/'+id+'/'+total);
		},

		getSession: function(name_session){
			return $http.get('/session/get/'+name_session);
		},

		getTours: function(id){
			return $http.get('/v1/checkout/tour/'+id);
		},

		validateCupon: function(cupon){
			return $http.get('/v1/cupons/validate/'+cupon);
		}

	}

});
