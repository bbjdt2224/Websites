<html>
	<head>
		<title>Home</title>
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
			nav("home");
		?>
		<div class="container" style="background-color: #5cd65c">
			<h2 style="text-align: center;">&#12316; Congratulations and Thank You &#12316;</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="pics/1.png" alt="Scott Wackowski and Duncan Golf" style="width: 100%">
				  <div class="carousel-caption">
					<h3>Scott Wackowski and Duncan Golf</h3>
					<p>Recent buyers of the Air2G2</p>
				  </div>
				</div>

				<div class="item">
				  <img src="pics/2.png" alt="Andy Magnasco & his Staff at Carmel Valley Ranch Golf Club" style="width: 100%">
				   <div class="carousel-caption">
					<h3>Andy Magnasco & his Staff at Carmel Valley Ranch Golf Club</h3>
					<p>Recent buyers of the Air2G2</p>
				  </div>
				</div>

				<div class="item">
				  <img src="pics/4.png" alt="Tim Haines, American Golf & their staff at Mountain Meadows GC" style="width: 100%">
				   <div class="carousel-caption">
					<h3>Tim Haines, American Golf & their staff at Mountain Meadows GC</h3>
					<p>Recent buyers of the Air2G2</p>
				  </div>
				</div>
				
				<div class="item">
				  <img src="pics/3.png" alt="Tim loves his Air2G2 and the immediate benefits!" style="width: 100%">
				   <div class="carousel-caption">
					<h3>Tim loves his Air2G2 and the immediate benefits!</h3>
				  </div>
				</div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			<br>
			<div class="panel panel-warning">
				<div class="panel-heading" style="text-align: center;"><h1>How It Works</h1></div>
				<div class="panel-body"><h3>The Air2G2 Aeration Machine is a state of the art turf maintenance machine. This one-of-a-kind machine is revolutionizing turf maintenance for golf course and athletic fields regardless of season, weather or upcoming events - for use all year round.
					Will not disrupt play and does not require post-application clean-up. Immediately relieves compaction, aides in surface water drainage by creating larger pore space in the soil subsurface, balances the water to air ratio within the soil and encourages positive microbial activity. The increase in air space within the soil means there is more room for roots to grow. The deeper the roots grow, the more resistant the turf is to drought conditions.</h3></div>
			</div>
			<button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#programs" style="white-space: normal;"><h1><span class="glyphicon glyphicon-star-empty"></span> New Programs Now Offered <span class="glyphicon glyphicon-star-empty"></span></h1>​</button>
			
			<div id="programs" class="collapse">
				<br>
				<div class="row">
					<div class="col-sm-4">
						<div class="panel panel-warning">
							<div class="panel-heading" style="text-align: center;"><h3><b>Putting Green Program</b></h3></div>
							<div class="panel-body" style="text-align: center;">We will aerify your putting green once a month for 4 months for $1500</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-warning">
							<div class="panel-heading" style="text-align: center;"><h3><b>Problem Greens Program</b></h3></div>
							<div class="panel-body" style="text-align: center;">We will aerify your 2 problem greens once a month for 3 months for $1500</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-warning">
							<div class="panel-heading" style="text-align: center;"><h3><b>Soccer Field Program</b></h3></div>
							<div class="panel-body" style="text-align: center;">We will aerify the Goal  & High Traffic Areas once a month for 3 months for $1500</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</body>
</html>