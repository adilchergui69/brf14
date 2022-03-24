<?php 	include 'includes\phpIc\nav_bar.php';
	include "includes/dbInc/dbCon.php";

; 

$sql = "SELECT * FROM produit ORDER BY idProduit DESC LIMIT 4";

		$result = mysqli_query($conn,$sql);

    
    ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="includes\style\home.css">
<link rel="stylesheet" href="includes\style\pop up\css\style.css">
<body style="background-color: #F5F5F5;">

<main class="flex">
  <article class="landing-page">
    <div class="darkener">
      <div class="wrapper flex-column">
        <p class="top-logo"></p>
        <h1 class="landing-page-title">MEN DON’T CRY, THEY  <br> WATER THEIR BEARDS</h1>
        <h2 class="page-subtitle">  <p>   <br> <br>  <a href="All_product.php"> <button class="start_shopping" type="submit" style="padding: 0px 52px 0px 53px;">start shopping >></button></a></p>
</h2>
       </div>
      </div>
  </article>
  
  <article class="contact-form">
    <div class="wrapper flex-column">
    <img src="images\home-left.jpg" alt="" srcset="" style="width: 111%;height: 100%;">
    </div>
  </article>
</main>

<div class="NEW_ARRIVALS">
<h2><span >NEW ARRIVALS</span></h2>
</div>




<div class="product-container">
	<?php while ($row = mysqli_fetch_assoc($result)): ?>

		<div class="product-div w-50" style="border-right: solid #B08B66 1px;">
			<a href="product.php?id=<?php echo $row["idProduit"] ?>">
			<?php echo '<img src="'. 'images/'. $row["image"].'" alt="HTML5 Icon" style="width:308px;height:308px">';?>
			<h5><?php echo $row["libelle"]?></h5>
			<p id="categorie"><?php echo $row["categorie"]?></p>
			<?php
			if($row["stock"] == 0): ?>
		  		<p class="price" style="color:red; font-size: 19px;"><?php echo "out of stock" ?></p>
		  		<?php else: ?> 
		  		<p class="price"><?php echo $row["prix"] . ' DH' ?></p>
		  	<?php endif ?>
		  </a>
		</div>
<?php
	endwhile;
?>
	</div>





<hr class="hr">
<div class="About_product">
<div class="row">
<div class="col"><img src="images\original.png" alt="" srcset="" style="width: 100%;"></div>

  <div class="col">
    <h6>THE ORGANIC WAY OF LIFE BECOMES PART OF YOUR DAILY LIFESTYLE</h6>
    <p>For an increasingly conscious lifestyle, choose to welcome a concentrated, protective and biodegradable ally with very high percentages of plant-based raw materials into your daily lifestyle.
</p>
<p>Throughout the month of March, together with the purchase of your agricosmetics, you can choose an Oway Life product to redesign your zero-impact habits.
</p>


<a href="#"> <h5 style="color: black;">FIND OUT HOW TO RECEIVE THEM >></h5>
<hr class="mini_line"> </a>

  </div>
</div>
</div>

<hr class="hr" >

<?php 	include 'includes\phpIc\footer.php';?>

<style>  .containerss{
      margin-top: 0%;
}
  
  </style>
  
  
    <script  src="includes\style\pop up\js\script.js"></script>

</body>
</html>