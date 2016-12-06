<!--
	File: status.php
	Shows status of application
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Check your application status </title>
	<meta charset="UTF-8">
	<meta http-equiv="X-US-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title> Current Status </title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
</head>

<body ng-app="app">
		
<div class="main" ng-controller="programCtrl">
	<div class="container">
		<nav class="navbar navbar-light" style="background-color: #B74934;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">University of Hawaii at Hilo</a>
			</div><!-- end navbar-header -->

	<!-- main menu items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.html">Home</a>
					</li>
					 <!--drop down menu -->

					 <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">MyUH <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://myuh.hawaii.edu/cp/home/displaylogin">MyUH Portal</a></li>
								<li><a href="https://laulima.hawaii.edu/portal">Laulima</a></li>
								<li><a href="https://www.sis.hawaii.edu/uhdad/avail.classes?i=HIL">Class Schedule</a></li>
							</ul>
					 </li>

					 <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://hilo.hawaii.edu/admissions/">Admission Office</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/apply.php">Apply Now</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/forms/request_info.php">Request Information</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/forms/">Admission Forms</a></li>
								<li><a href="https://hilo.hawaii.edu/admissions/international_instructions.php">International Students</a></li>
							</ul>
					 </li>
					 <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://hilo.hawaii.edu/catalog/degrees-and-certificates-offered.html">Majors/Degree Offered</a></li>
								<li><a href="https://www.sis.hawaii.edu/uhdad/avail.classes?i=HIL">Classes Offered</a></li>
								<li><a href="https://hilo.hawaii.edu/registrar/currentterm.php">Admission Calender</a></li>
							</ul>
					 </li>
					<li>
						<a href="https://hilo.hawaii.edu/directory/view/174">Contact Us </a>
							<!--<ul class="dropdown-menu">
								<li><a href="#">Phone</a></li>
								<li><a href="#">Email</a></li>
								<li><a href="#">Set Appointment</a></li>
							</ul>-->
					</li>
				</ul>
				<!-- right align -->
				<ul class="nav navbar-right">
					<li><a href="../index.html">Logout</a></li>
				</ul>
		</div> <!--end mainNavBar-->
	</nav> <!--end navbar-->

		<div class="page-header">
			<h1> Check your status </h1>
		</div>	
		<h2> {{ title }} </h2>	

		<div class="col-md-6" ng-repeat="x in program">
			<h3> {{ x.name }} </h3>
		</div>

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
