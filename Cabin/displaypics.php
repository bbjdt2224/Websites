<html>
	<head>
		<title>Lake Huron Cabin Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel='stylesheet' type='text/css' href='massstyle.css'>
		<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
	</head>
	<body>
		<?php
			include('nav.php');
		?>
		<div class='container'>
			<div class='page-header'>
				<h1>Pictures</h1>
			</div>
			<div class='panel panel-default'>
				<div class='panel-heading'>Main Floor</div>
				<div class='panel-body'>
					<ul class='list-group'>
						<a href='#' data-toggle='modal' data-target='#kitchen'><li class='list-group-item'>Kitchen</li></a>
						<a href='#' data-toggle='modal' data-target='#firstbath'><li class='list-group-item'>Bathroom</li></a>
						<a href='#' data-toggle='modal' data-target='#diningroom'><li class='list-group-item'>Dining Room</li></a>
						<a href='#' data-toggle='modal' data-target='#familyroom'><li class='list-group-item'>Family Room</li></a>
						<a href='#' data-toggle='modal' data-target='#gameroom'><li class='list-group-item'>Game Room</li></a>
						<a href='#' data-toggle='modal' data-target='#laundry'><li class='list-group-item'>Laundry</li></a>
					</ul>
				</div>
			</div>
			<div class='panel panel-default'>
				<div class='panel-heading'>Second Floor</div>
				<div class='panel-body'>
					<ul class='list-group'>
						<a href='#' data-toggle='modal' data-target='#masterbed'><li class='list-group-item'>Master Beadroom</li></a>
						<a href='#' data-toggle='modal' data-target='#secondbed'><li class='list-group-item'>Second Bedroom</li></a>
						<a href='#' data-toggle='modal' data-target='#kidbed'><li class='list-group-item'>Kids Bedroom</li></a>
						<a href='#' data-toggle='modal' data-target='#secondbath'><li class='list-group-item'>Bathroom</li></a>
						<a href='#' data-toggle='modal' data-target='#loft'><li class='list-group-item'>Loft</li></a>
					</ul>
				</div>
			</div>
			<div class='panel panel-default'>
				<div class='panel-heading'>Outside</div>
				<div class='panel-body'>
					<ul class='list-group'>
						<a href='#' data-toggle='modal' data-target='#outside'><li class='list-group-item'>Outside</li></a>
					</ul>
				</div>
			</div>
		</div>
		<?php
			makeModal("kitchen", "Kitchen", array(37,38,39), 3);
			makeModal("firstbath", "First Bath", array(1,2), 2);
			makeModal("diningroom", "Main Room", array(4,5,6), 3);
			makeModal("familyroom", "Main Room", array(3,15), 2);
			makeModal("gameroom", "Game Room", array(8,23), 2);
			makeModal("laundry", "Laundry", array(41), 1);
			makeModal("masterbed", "Master Bed", array(18,19), 2);
			makeModal("secondbed", "Second Bed", array(35,36), 2);
			makeModal("kidbed", "Kid Bed", array(16,17), 2);
			makeModal("secondbath", "Second Bath", array(10,11,12), 3);
			makeModal("loft", "Main Room", array(13), 1);
			makeModal("outside", "Outside", array(40,24,25,26,27,28,29,30,31,32,33), 11);
			function makeModal($room, $file, $picNums, $numOfPics){
				echo "
						<div id='".$room."' class='modal fade' role='dialog'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header' style='background-color: #ffcc00;'>
										<button type='button' class='close' data-dismiss='modal'>&times;</button>
									</div>
									<div class='modal-body' style='background-color: #00bfff;'>
										<div id='".$room."carousel' class='carousel slide' data-ride='carousel'>
											<ol class='carousel-indicators'>";
												for($i = 0; $i<$numOfPics; $i++){
													if($i == 0){
														echo "<li data-target='#".$room."carousel' data-slide-to='".$i."' class='active'></li>";
													}
													else{
														echo "<li data-target='#".$room."carousel' data-slide-to='".$i."'></li>";
													}
													
												}
				echo"						</ol>
											
											<div class='carousel-inner'>";
											for($i = 0; $i < $numOfPics; $i++){
												if($i == 0){
													echo "
														<div class='item active'>
															<img src='Pictures/".$file."/cabin-".$picNums[$i].".jpg' alt='".$room."'>
														</div>";
												}
												else{
													echo "
														<div class='item'>
															<img src='Pictures/".$file."/cabin-".$picNums[$i].".jpg' alt='".$room."'>
														</div>";
												}
												
											}
				echo"						</div>

											<a class='left carousel-control' href='#".$room."carousel' data-slide='prev'>
												<span class='glyphicon glyphicon-chevron-left'></span>
												<span class='sr-only'>Previous</span>
											</a>
											<a class='right carousel-control' href='#".$room."carousel' data-slide='next'>
												<span class='glyphicon glyphicon-chevron-right'></span>
												<span class='sr-only'>Next</span>
											</a>
										</div>
									</div>
									<div class='modal-footer'>
										<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
									</div>
								</div>
							</div>
						</div>
				";
			}
		?>
	</body>
</html>