<?php
	include('head.php');
?>
<html>
	<?php
		head('About Us');
	?>
	<body>
		<?php
			nav();
		?>
		<div class='container'>
			<div class='page-header'>
				<h1>About Us</h1>
			</div>
			<div id="farmpics" class="carousel slide" data-ride="carousel" >
				<ol class="carousel-indicators">
					<li data-target="#farmpics" data-slide-to="0" class="active"></li>
					<li data-target="#farmpics" data-slide-to="1"></li>
					<li data-target="#farmpics" data-slide-to="2"></li>
					<li data-target="#farmpics" data-slide-to="3"></li>
					<li data-target="#farmpics" data-slide-to="4"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="pics\about\1.jpg" alt="" style='width: 100%'>
					</div>

					<div class="item">
						<img src="pics\about\2.jpg" alt="" style='width: 100%'>
					</div>

					<div class="item">
						<img src="pics\about\3.jpg" alt="" style='width: 100%'>
					</div>
					
					<div class="item">
						<img src="pics\about\4.jpg" alt="" style='width: 100%'>
					</div>
					
					<div class="item">
						<img src="pics\about\5.jpg" alt="" style='height: 100%; margin: auto'>
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
			<h1>Fox Farm Nurseries LLC</h1><h3>is a wholesale grower of coniferous and deciduous seedlings and transplants. We are a family owned business established in 1994 by Tom & Cheryle Morin.  In 2005, potted trees and shrubs were added to our operation.  In 2011, we purchased 50 acres in Bear Lake, MI where we now do all of our growing.  We pay special attention to detail every step of the way. From seed to shipping we provide a quality product and experience to make sure our customers are completely satisfied. We look forward to helping you with all of your tree needs.</h3>
			<h1 style='text-align: center; color: green;' class='bold'>Quality Trees Direct From Grower</h1>
		</div>
	</body>
</html>