var app = angular.module('myApp',[]);
app.controller('controlador',function($scope,$http){
	
$scope.save = function(){
	console.log($scope.nombre);
	$http({
		uri : "http://127.0.0.1:3006/api/insert",
		method :"POST",
		data : {
			"nombre": $scope.nombre
		}

	}).then(function(response){
		alert('seccess');
	}, function(respónse){
        alert('failed');
	});
}


});