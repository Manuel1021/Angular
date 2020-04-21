var app = angular.module('myApp',[]);
app.controller('controlador',function($scope,$http){
	
$scope.save = function(){
	console.log($scope.nombre);
	console.log($scope.categoria);
	console.log($scope.cantidad);
	$http({
		uri : "http://127.0.0.1:3006/api/producto",
		method :"POST",
		data : {
			"nombre": $scope.nombre
			"categoria": $scope.categoria
			"cantidad": $scope.catidad
		}

	}).then(function(response){
		alert('seccess');
	}, function(respónse){
        alert('failed');
	});
}


});