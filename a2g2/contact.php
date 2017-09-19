<html>
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			body{
				background-image: url(pics/1fade1.png);
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				font-family: Verdana, Geneva, sans-serif;
				}
		</style>
	</head>
	<body>
		<?php
			include "nav.php";
			nav("contact");
		?>
		<div class="container" style="background-color: #5cd65c">
		<br>
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-lable col-sm-1" for="name">Name: *</label>
					<div class="col-sm-11">
						<input type="name" class="form-control" id="name" placeholder="Enter Name Here" required ></input>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-lable col-sm-1" for="email">Email: *</label>
					<div class="col-sm-11">
						<input type="email" class="form-control" id="email" placeholder="Enter Email Here" required ></input>
					</div>
					<div class="col-sm-1">
						<input type="checkbox" class="form-control"></input>
					</div>
					<label for="updates" class="control-lable col-sm-11">Check here to recieve email updates</label>
				</div>
				
				
				<div class="form-group">
					<label class="control-lable col-sm-1" for="subject">Subject:</label>
					<div class="col-sm-11">
						<input type="text" class="form-control" id="subject" placeholder="Enter Text Here" ></input>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="control-lable col-sm-1" for="message">Name: *</label>
					<div class="col-sm-11">
						<textarea class="form-control" rows="5" id="message" placeholder="Enter Your comment Here" required ></textarea>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="control-lable col-sm-1" for="phone">Phone: </label>
					<div class="col-sm-11">
						<input type="tel" class="form-control" id="phone" placeholder="Enter Phone Number" ></input>
					</div>
				</div>
				
				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
		</div>
	</body>
</html>