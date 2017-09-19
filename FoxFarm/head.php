<?php
	function head($title){
		echo "
			<head>
				<title>".$title."</title>
				<meta charset='utf-8'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
				<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
				<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
				<link rel='stylesheet' type='text/css' href='massstyle.css'> 
				<link rel='shortcut icon' type='image/x-icon' href='logo.ico'>
			</head>
		";
	}
	function nav(){
		echo "
			<nav class='navbar' style='background-color: #327c01'>
			  <div class='container-fluid'>
				<div class='navbar-header'>
				  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span> 
				  </button>
				  <a class='navbar-brand' href='#'><img src='pics\logo.png' style='height: 20px; float: left;'>Fox Farm Nurseries</a>
				</div>
				<div class='collapse navbar-collapse' id='myNavbar'>
				  <ul class='nav navbar-nav'>
					<li><a href='index.php'>Home Page</a></li>
					<li><a href='AboutUs.php'>About Us</a></li> 
					<li><a href='EvergreensCedars.php'>Evergreens/Cedars</a></li>
					<li><a href='Decidous.php'>Deciduous</a></li>
					<li><a href='TermsShipping.php'>Shipping</a></li>
					<li><a href='PlantingInstructions.php'>Planting Instructions</a></li>
					<li><a href='ContactUs.php'>Contact Us</a></li>
					<li><a href='USDAZoneMap.php'>USDA Zone Map</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		";
	}

	
?>