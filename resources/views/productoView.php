<!DOCTYPE html>
<html>
<head>
	<title>Laravel && angular</title>

</head>
<body>
	<div ng-app="myApp" ng-controller="controlador">
		<input type="text" name="nombre" ng-model="nombre">
		<input type="cantidad" name="cantidad" ng-model="cantidad">
		<input type="categoria" name="categoria" ng-model="categoria">

		<button type="button" ng-click="save()">Guardar</button>
	</div>

	<script src="angular16/angular.min.js"></script>
	<script src="js/controller.js"></script>
	


</body>
</html>t