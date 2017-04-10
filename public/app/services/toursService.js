angular.module("dashboard").factory('toursService',function($http) {
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
		}
	}
});