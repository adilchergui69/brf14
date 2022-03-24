<?php include 'includes\phpIc\nav_bar.php'; 
include "includes/dbInc/getItem.php";?>
<link rel="stylesheet" href="includes\style\style.register.css">

<body>
	<div class="container" style="padding-left: 41%;">
		<form action="includes/dbInc/register.php" method="POST">
		<div>
			<label for="firstName"></label>
			<input type="text" name="firstName" id="firstName" placeholder="First Name">
		</div>
		<div>
			<label for="lastName"></label>
			<input type="text" name="lastName" id="lastName" placeholder="Last Name">
		</div>
		<div>
			<label for="adresse"></label>
			<input type="text" name="adresse" id="adresse" placeholder="Adresse">
		</div>
		<div>
			<label for="phone"></label>
			<input type="tel" name="phone" id="phone" placeholder="Phone Number">
		</div>
		<div>
			<label for="email"></label>
			<input type="email" name="email" id="email" placeholder="Email">
		</div>
		<div>
			<label for="Password"></label>
			<input type="password" name="password" id="password" placeholder="Please enter a password">
		</div>
		<div>
			<label for="passwordConf"></label>
			<input type="password" name="passwordConf" id="passwordConf" placeholder="please enter your password again">
		</div>
		<div>
			<input type="submit" name="submit" value="Create my account" id="submitBtn">
		</div>
		</form>

	

	</div>
	<?php 	include 'includes\phpIc\footer.php';
	
	?>

</body>
</html>

