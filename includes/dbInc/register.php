<?php
	include "dbCon.php";

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if(isset($_POST['submit'])){
		$nom = $_POST['firstName'];
		$prénom =  $_POST['lastName'];
		$adresse = $_POST['adresse'];
		$num = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		if(empty($nom) || empty($prénom) ||empty($adresse) ||empty($num) ||empty($email) ||empty($password)){
				echo "failed";
			} else if ($password !== $passwordConf) {
   				die('Password and Confirm password should match!');   
			}
	else {
		$nom = test_input( $_POST['firstName']);
		$prénom = test_input($_POST['lastName']);
		$adresse = test_input($_POST['adresse']);
		$num = test_input($_POST['phone']);
		$email = test_input($_POST['email']);
		$password = test_input($_POST['password']);
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO `client`(nom, prenom, adresse, telephone, email, pass) VALUES ('$nom','$prénom','$adresse','$num','$email','$hashedPassword')";
		mysqli_query($conn,$sql);
		header('location: ../../index.php?succes');
	}
}