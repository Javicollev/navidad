angular.module('app', [])
	.controller('controller', function($scope, $http){
		$http.get('menores.json').success(function(data){
				$scope.menores = data;
		});
	});