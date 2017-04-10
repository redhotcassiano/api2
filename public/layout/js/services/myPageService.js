angular.module("mypage").factory('tourService',function($http) {
	return {
		lista: function(){
			return $http.get('/v1/tours');
		},
		cadastra: function(data){
			return $http.post('/v1/tours', data);
		},
		edita: function(data){
			var id = data.id;
			delete data.id;
			return $http.put('/v1/tours/'+id, data);
		},
		exclui: function(id){
			return $http.delete('/v1/tours/'+id);
		},
		getImgs: function(token){
			return $http.get('/v1/tours/imgs/'+token);
		},

		getTour: function(id){
			return $http.get('/v1/tours/'+id);
		},

		getCart: function(id){
			return $http.get('/web/cart/list/'+id);
		},

		getList: function(id){
			return $http.get('/web/listCart/'+id);
		},

		cadastraCart: function(data){
			return $http.post('/web/cart', data);
		},

		updatePriceCart: function(id, total){
			return $http.put('/web/cart/'+id+'/'+total);
		},

		cadastraTourCart: function(data){
			return $http.post('/web/listcart', data);
		},
		
		getSession: function(name_session){
			return $http.get('/session/get/'+name_session);
		},


	}

});