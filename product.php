<?php 
	include 'includes\phpIc\nav_bar.php';
	include "includes/dbInc/getItem.php";

?>

<body style="background-color: #F5F5F5;">



	<div class="ml-4 mt-3" id="conte_all">
		<p><a href="index.php">HOME</a> > <a href="All_product.php">All product</a> > <?php echo $row["categorie"] ?></p>
	</div>
	<div class="row">
		<div class="col  ml-4">
			<?php echo '<img src="'. 'images/'. $row["image"].'" alt="HTML5 Icon" style="width:50%;">';?>
		</div>

		<div class="col">
			<h2><?php echo $row["libelle"] ?></h2>
			<?php if(!$stock): ?>
		  		<p style="color:red;"><?php echo "out of stock" ?></p>
		  		<?php else: ?> 
		  		<p><b> <?php echo $row["prix"] . " DH"?></b></p>
		  	<?php endif ?>
			<p id="" style="width: 69%;text-align: justify;"><?php echo $row["description"]?></p>

			<!-- checking if the item is available -->

			<?php if(!$stock) :?>
				<a href="#" ><input type="submit" class="button p-1" id="addBtn" name="addCart" value="ADD TO CART" ></a><br>
				<a href="" ><input type="submit" class="button p-1" id="buyBtn" name="buyNow" value="BUY IT NOW" ></a>
				<p style="color: red;">the item You're looking for is no longer available, please check for something else</p>
			<?php else : $id = $_GET['id'];?>

				
				<a href="cart.php<?php echo"?id=$id";?>"><input type="submit" class="button p-1" id="addBtn" name="addCart" value="ADD TO CART"></a><br>
				<a href="Checkoutbuynow.php<?php echo"?idbuynow=$id";?>"><input type="submit" class="button p-1" id="buyBtn" name="buyNow" value="BUY IT NOW"></a>
				

			<?php  endif  ?>
			<details class="summary_pr">
				<summary>RETURNS</summary>
				<ul>
					<li>Full refunds up to 60 days.</li>
					<li>After 60 days, we can do a refund as store credit.</li>
					<li>swaps are always free.</li>
				</ul>
			</details>
		</div>
	</div>
	<link rel="stylesheet" href="includes\style\footer\footer.css">
	<?php 	include 'includes\phpIc\footer.php'; 
	?>
</body>
</html>