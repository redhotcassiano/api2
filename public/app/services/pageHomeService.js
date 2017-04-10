angular.module("dashboard").factory('pageHomeService',function($http) {
	return {
		lista: function(){
			return $http.get('/v1/home-page');
		},
		cadastra: function(data){
			return $http.post('/v1/home-page', data);
		},
		edita: function(data){
			var id = data.id;
			delete data.id;
			return $http.put('/v1/home-page/'+id, data);
		},
		exclui: function(id){
			return $http.delete('/v1/home-page/'+id)
		}
	}
});