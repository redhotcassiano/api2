angular.module("dashboard").factory('imagensService',function($http){
	return{
		get: function(){
			return $http.get('/v1/imagespages/');
		},
		post: function(data){
			return $http.post('/v1/imagespages/',data,{
				withCredentials: true,
				headers: {"Content-type":undefined},
				transformRequest: angular.identity
			});
		},
		delete: function(id){
			return $http.delete('/v1/imagespages/'+id);
		}
	}
});