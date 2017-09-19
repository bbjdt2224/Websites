<?php
	include('head.php');
?>
<html>
	<?php
		head('Fox Farm Nurseries LLC');
	?>
	<body>
		<?php
			nav();
		?>
		<div class='container'>
			<br>
			<div class='jumbotron baige'>
				<img style='float: right;' src='pics\logo.png'>
				<h1>Fox Farm Nurseries LLC</h1>
				<p style='font-weight: bold'>Tom & Cheryle Morin</p>
				<p style='font-weight: bold'>7615 Eleven Mile Rd, Bear Lake, MI  49614</p>
				<p style='font-weight: bold'>Office/Cell: (231) 907-2172</p>
				<p style='font-weight: bold'>Email : tom@foxfarmnurseries.com</p>
			</div>
			<div id="farmpics" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#farmpics" data-slide-to="0" class="active"></li>
					<li data-target="#farmpics" data-slide-to="1"></li>
					<li data-target="#farmpics" data-slide-to="2"></li>
					<li data-target="#farmpics" data-slide-to="3"></li>
					<li data-target="#farmpics" data-slide-to="4"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="pics\home\1.jpg" alt="" style='width: 100%'>
					</div>

					<div class="item">
						<img src="pics\home\2.jpg" alt="" style='width: 100%'>
					</div>

					<div class="item">
						<img src="pics\home\3.jpg" alt="" style='width: 100%'>
					</div>
					
					<div class="item">
						<img src="pics\home\4.jpg" alt="" style='width: 100%'>
					</div>
					
					<div class="item">
						<img src="pics\home\5.jpg" alt="" style='width: 100%'>
					</div>
				</div>

				<a class="left carousel-control" href="#farmpics" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#farmpics" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<br>
			<div class='well baige'>
				<h3 style='color: red; text-align: center;' class='bold'>Currently taking orders for Fall 2017~ Spring 2018</h3>
				<h3>Fox Farm Nurseries LLC is a wholesale seedling and transplant tree nursery, located in Bear Lake, Michigan.  We specialize in fast growing privacy screens of Norway Spruce, White Spruce, Hybrid Poplar, Hybrid Willow and many others. Perfect for a windbreak or enhancing your landscape. A large variety of deciduous trees and flowering shrubs are also available. Order today and enjoy the beauty and privacy that these quality trees can deliver for many years to come!</h3>
				<h3 style='color: blue; text-align: center;' class='bold'>*Payments now accepted through Paypal.*</h3>
				<h3 style='color: purple; text-align: center;'>~Think  Earth Day, Arbor Day, Weddings & Graduations~</h3>
				<h2 style='text-align: center;'>Trees make great gifts and also great fundraising items!</h2>
			</div>
			<br>
			<div class='row'>
				<div class='col-sm-4'>
					<img src='pics\home\1.png' style='width:100%'>
				</div>
				<div class='col-sm-4'>
					<img src='pics\home\2.png' style='width:100%'>
				</div>
				<div class='col-sm-4'>
					<img src='pics\home\3.png' style='height:270px'>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
		</div>
	</body>
</html>