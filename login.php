<?php 
	session_start();
	if(isset($_SESSION['username'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style/style.register.css">
</head>
<body>
	<h3>LOG IN</h3>
	<div class="container">
		<form action="includes\dbInc\login.php" method="POST">
			<div>
				<label for="email"></label>
				<input type="text" name="email" id="email" placeholder="Please enter your email">
			</div>
			<div>
				<label for="password"></label>
				<input type="password" name="password" id="password" placeholder="Please enter your password">
				<?php if(isset($_GET['error'])) :?>
					<p id="passwordV">Wrong email or password</p>
				<?php endif ?>
			</div>
			<div>
				<input type="submit" name="submit" value="LOGIN" id="submitBtn">
			</div>
			<span id="create">Don't have an account yet? <a href="register.html">Create one ></a></span>
		</form>
	</div>
	

</body>
</html>
