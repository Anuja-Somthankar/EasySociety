<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark">
			<a class="navbar-brand ml-1 font-weight-bold " href="#"><h3>EasySociety</h3></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item p-2">
						<a class="nav-link text-white text-muted" href="#">Home</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link text-white" href="contact.php">Contacts</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link text-white " href="about.php">About Us</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link text-white btn btn-outline-secondary" data-toggle="modal" data-target="#myModal1">Admin</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link text-white btn btn-outline-secondary" data-toggle="modal" data-target="#myModal3">Security</a>
					</li>
				</ul>
			</div>
		</nav>
		<br>
		<div class="container text-center text-white align-middle ">
			<div class="container-fluid text-center text-white col-sm-10 col-lg-8">
				<h1>Welcome to the EasySociety Portal <i class="fas fa-city" aria-hidden="true"></i></h1>
			</div>
			<div class="container text-center p-3 mt-5 col-lg-5 col-sm-10 rounded ">
				<h3>Managing your Society is now on your fingertips!!</h3>
				<?php
				if(isset($_REQUEST["valid"]) && $_REQUEST["valid"] == "false"){ ?>
				<h6 class='text-white bg-danger'>Wrong Login credentials! Try again</h6>
				<?php }
				?>
				
					
					<div class="column">
						<!-- Button to Open the Modal -->
						<a class="btn btn-outline-light m-2 p-3 pl-5 pr-5" href = "login.php">
						<h3>Begin</h3>
						<a>
					
					</div>
			</div>
		</div>
		


<br/>
		
	

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</body>
</html>