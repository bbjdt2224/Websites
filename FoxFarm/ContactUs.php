<?php
	include('head.php');
?>
<html>
	<?php
		head('Contact Us');
	?>
	<body>
		<?php
			nav();
		?>
		<div class='container'>
			<div class='page-header'>
				<h1>Contact Us</h1>
			</div>
			<div class='well baige'>
				<form>
					<div class='form-group'>
						<label for='fname'>First Name:</label>
						<input type='text' class='form-control' name='fname' id='fname'>
					</div>
					<div class='form-group'>
						<label for='lname'>Last Name:</label>
						<input type='text' class='form-control' name='lname' id=lname''>
					</div>
					<div class='form-group'>
						<label for='address1'>Adress Line 1:</label>
						<input type='text' class='form-control' name='address1' id='address1'>
					</div>
					<div class='form-group'>
						<label for='address2'>Adress Line 2:</label>
						<input type='text' class='form-control' name='address2' id='address2'>
					</div>
					<div class='form-group'>
						<label for='city'>City:</label>
						<input type='text' class='form-control' name='city' id='city'>
					</div>
					<div class='form-group'>
						<label for='zip'>Zip Code:</label>
						<input type='number' class='form-control' name='zip' id='zip'>
					</div>
					<div class='form-group'>
						<label for='state'>State:</label>
						<select class='form-control' name='state' id='state'>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<div class='form-group'>
						<label for='dayphone'>Daytime Phone:</label>
						<input type='number' class='form-control' name='dayphone' id='dayphone'>
					</div>
					<div class='form-group'>
						<label for='eveningphone'>Evening Phone:</label>
						<input type='number' class='form-control' name='eveningphone' id='eveningphone'>
					</div>
					<div class='form-group'>
						<label for='email'>Email:</label>
						<input type='email' class='form-control' name='email' id='email'>
					</div>
					<div class='form-group'>
						<label for='comments'>Comments:</label>
						<textarea class='form-control' name='comments' id='comments'></textarea>
					</div>
					<button type='submit' class='btn btn-success'>Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>