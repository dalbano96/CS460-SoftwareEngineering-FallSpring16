<!--
	File: status.php
	Shows status of application
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-US-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title> Current Status </title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
</head>

<body ng-app="app">
		
<div class="main" ng-controller="programCtrl">
	<div class="container">
		<div class="page-header">
			<h1> Check your status </h1>
		</div>	
		<h2> {{ title }} </h2>	
		<h2> {{ data }} </h2>
		<div class="jumbotron">
			<!-- List program  -->
			<h2> Below is your application requirements </h2>
		</div> <!-- end of jumbotron -->
		<div class="col-md-6" ng-repeat="x in requirements">
			<h3> {{ x.name }} </h3>	
			<p> {{ x.desc }} </p>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../app/status/statusController.js"></script>
<script src="../app/controllers/app.js"></script>

</body>
</html>
