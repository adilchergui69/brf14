<?php 
session_start(); 
	include 'dbCon.php';

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if(isset($_POST['email'])){
		$email = test_input($_POST['email']);
		$password = test_input($_POST['password']);
		
		$sql = "SELECT * FROM `client` WHERE email = '$email'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

		if($count == 1){
			if(password_verify($password, $row['pass'])){
				$_SESSION['idClient'] = $row["idClient"];
				$_SESSION['username'] = $row["nom"];
				$_SESSION['email'] = $row["email"];
				$_SESSION['adresse'] = $row["adresse"];
				$_SESSION['nom'] = $row["nom"];
				$_SESSION['prenom'] = $row["prenom"];
				$_SESSION['email'] = $row["email"];
				// echo $_SESSION['username']; 
				header('location: ../../cart.php');
			} else {
				header('location: ../../login.php?error=fail');
			}
		}  else {
			header('location: ../../login.php?error=fail');
		}
	}
