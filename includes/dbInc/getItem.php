<?php
	// file that gets the selected item from the products page

	include "includes/dbInc/dbCon.php";
	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM PRODUIT WHERE idProduit = $id";
	$item = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($item);

	if($row["stock"] == 0){
		$stock = false;
	}
	else {
		$stock = true;
	}
	  
	  }

	  
	
	