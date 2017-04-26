angular.module("home").factory('homeService',function($http) {
	return {
		lista: function(){
			return $http.get('/v1/tours');
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

		cadastraTourCart: function(data){
			return $http.post('/web/listcart', data);
		},

		getSession: function(name_session){
			return $http.get('/session/get/'+name_session);
		},

		getHome: function(){
			return $http.get('/v1/home-page/');
		},

		createCart: function(data){
			return $http.get('/v1/home-page/cart/'+data);
		},
		//carregar os tours;
		getToursNews: function(){
			return $http.get('/v1/getnewstours');
		},

		getToursViews: function(){
			return $http.get('/v1/getToursViews');
		},

		getSearch: function(){
			return $http.get('/v1/getSearch');
		},

		saveNewEmail: function(data){
			return $http.post('/v1/emails', data);
		},
		
		saveIpClient: function(name, data){
			return $http.get('/session/save/'+name+'/'+data);
		}
	}

});
