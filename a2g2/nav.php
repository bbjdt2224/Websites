<?php
	function nav($page){
	$home = "";
	$pab = "";
	$research = "";
	$gallery = "";
	$contact = "";
	$users = "";
	switch ($page){
		case "home":
			$home = "active";
			break;
		case "features":
			$pab = "active";
			break;
		case "research":
			$research = "active";
			break;
		case "gallery":
			$gallery = "active";
			break;
		case "contact":
			$contact = "active";
			break;
		case "users":
			$users = "active";
			break;
	}
		echo '<nav class="navbar navbar-default">
				<div class="container-fluid" style="background-color: #fcf8e3;">
					<div class="row">
						<div class="col-sm-6">
							<h1><span class="glyphicon glyphicon-tint" style="color: #337ab7"></span><b><i>A2G2-SW, LLC</i></b></h1>
							<h2>The Exclusive Distributor of the Air2G2</h2>
							<h3>For Arizona, California, Colorado, and Las Vegas</h3>
						</div>
						<div class="col-sm-4">
						</div>
						<div class="col-sm-2">
							<h4>Pete Evans</h4>
							<h4><span class="glyphicon glyphicon-envelope"></span> pete@a2g2-sw.com</h4>
							<h4><span class="glyphicon glyphicon-phone-alt"></span> 248-882-1377</h4>
							<h4>John Kirtland</h4>
							<h4><span class="glyphicon glyphicon-envelope"></span> kindianwood@gmail.com</h4>
							<h4><span class="glyphicon glyphicon-phone-alt"></span> 586-839-6762</h4>
						</div>
					</div>
					<div class="container-fluid" style="background-color: #337ab7;">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
								<span class="icon-bar" style="background-color: white;"></span>
								<span class="icon-bar" style="background-color: white;"></span>
								<span class="icon-bar" style="background-color: white;"></span> 
							</button>
						</div>
						<div class="collapse navbar-collapse" id="nav" style="text-align: center; font-size: 20pt;">
							<ul class="nav navbar-nav" style="display:inline-block; float:none;">
								<li class="'.$home.'"><a href="home.php" style="color: black;">Home</a></li>
								<li class="'.$pab.'"><a href="features.php"  style="color: black;">Features</a></li>
								<li class="'.$research.'"><a href="research.php"  style="color: black;">Scientific Research</a></li>
								<li class="'.$gallery.'"><a href="videos.php" style="color: black;">Videos</a></li>
								<li class="'.$contact.'"><a href="contact.php"  style="color: black;">Contact Us</a></li>
								<li class="'.$users.'"><a href="users.php"  style="color: black;">Current U.S. Users</a></li>
							</ul>
						</div>
					</div>
					<br>
				</div>
			</nav>';
	}
?>