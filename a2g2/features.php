<html>
	<head>
		<title>Features</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			.fade{
				opacity: 0.2;
				transition: 0.5s;
			}
			.show{
				opacity: 1;
				transition: 0.5s;
			}
			.hide{
				opacity: 0;
				transition: 0.5s;
			}
			body{
				background-image: url(pics/1fade1.png);
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
				font-family: Verdana, Geneva, sans-serif;
			}
			img{
				width: 100%;
			}
		</style>
	</head>
	<body>
		<?php
			include "nav.php";
			nav("features");
		?>
		<div class="container" style="background-color: #5cd65c">
			<div class="row">
				<br>
				<div class="page-header">
					<h2 style="text-align: center;">Click pictures to find more information</h2>
				</div>
				<div class="col-sm-5">
					<h3>Features</h3>
					<div>
						<img src="pics/1.jpg" id="one" onclick="black('one')">
						<p style="position: absolute; top: 10%;" id="onet" class="hide">Feature 1</p>
					</div>
					<br>
					<div>
						<img src="pics/2.jpg" id="two" onclick="black('two')">
						<p style="position: absolute; top: 50%;" id="twot" class="hide">Feature 2</p>
					</div>
					<br>
					<div>
						<img src="pics/3.jpg" id="three" onclick="black('three')">
						<p style="position: absolute; top: 75%;" id="threet" class="hide">Feature 3</p>
					</div>
				</div>
				<div class="col-sm-2">
					<hr>
				</div>
				<br>
				<div class="col-sm-5">
					<h3>Benefits</h3>
					<div>
						<img src="pics/4.jpg" id="four" onclick="black('four')">
						<p style="position: absolute; top: 10%;" id="fourt" class="hide">Benefit 1</p>
					</div>
					<br>
					<div>
						<img src="pics/5.jpg" id="five" onclick="black('five')">
						<p style="position: absolute; top: 40%;" id="fivet" class="hide">Benefit 2</p>
					</div>
					<br>
					<div>
						<img src="pics/6.jpg" id="six" onclick="black('six')">
						<p style="position: absolute; top: 75%;" id="sixt" class="hide">Benefit 3</p>
					</div>
				</div>
			</div>
			<br>
		</div>
		
		
		<script>

			function black(id){
				var img = document.getElementById(id);
				if(img.classList.contains("fade")){
					img.setAttribute("class", "show");
					document.getElementById(id+"t").setAttribute("class", "hide");

				}
				else{
					img.setAttribute("class", "fade");
					document.getElementById(id+"t").setAttribute("class", "show");
					i = 0;
				}
				
				
			}
		</script>
	</body>
</html>