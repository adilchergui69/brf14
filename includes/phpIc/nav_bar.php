<?php session_start(); 

?>

<!doctype html>
<html lang="en">
  <head>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="includes\style\style.allProd.css">
<link rel="stylesheet" href="includes\style\style.product.css">
<link rel="stylesheet" href="includes\style\nav_bar\css\style.css">

<link rel="stylesheet" href="includes\style\Checkout.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="includes\style\footer\footer.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../style/nav_bar/css/style.css">

  </head>
  <body id="nav_body">
    <div class="top_nav"> <h4 style="color: white;padding: 7px;margin-bottom: 0px;">Free Shipping on orders over $35.  ends in <span id="paragraph" class="end_on"> 00:23:69 </span> </h4> </div>
	<section class="ftco-section">
		<div class="container">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
        <a href="index.php" class="navbar-brand" href="index.html" title="Home page"><img src="images\logo.png" alt="Logo" style="width: 177px;"></a>

		    	<div class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">  

            <a  href="index.php" class="d-flex align-items-center justify-content-center"><span class='bx bx-user'><i class="sr-only">user</i></span>  </a> 
            <a   id="icon_search" class="d-flex align-items-center justify-content-center"><span class='bx bx-search'><i class="sr-only">search</i></span></a>
		    			<a href="cart.php" class="d-flex align-items-center justify-content-center nohover"><span class="bx bx-shopping-bag">  <i class="sr-only">cart</i></span> <span id="count_cart"> <?php if (isset($_SESSION['idpro']) || !empty($_SESSION['idpro'])) { print_r(count($_SESSION['idpro']));}  ?></span></a>
            </p>

            
            <?php if (isset($_SESSION['username'])) { echo '<form method="POST" action="index.php"> <input type="submit" name="logout" value="Logout" style="width: 85PX;"> </form>';} if(isset($_POST['logout'])) {
                session_unset();
                session_destroy();
                header("Refresh:0");
                 header('index.php');
} ?>

	        </div>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> 
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
		        	<li class="nav-item"><a href="All_product.php" class="nav-link">All product</a></li>
		        	<li class="nav-item"><a href="balm.php" class="nav-link">Balm</a></li>
		        	<li class="nav-item"><a href="Beard_oil.php" class="nav-link">Beard oil</a></li>
		          <li class="nav-item"><a href="Beard_softener.php" class="nav-link">Beard softener</a></li>
		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
  </div> 

  <?php if (!isset($_SESSION['username'])) {
    # code...
  ?>
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form method="POST" action="includes/dbInc/login.php">
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email1"placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="password1" placeholder="Your password...">
            </div>
            <button  type="submit" name="submit" class="btn btn-info btn-block btn-round">Login</button>
          </form>
          <?php if(isset($_GET['error'])) :?>
					<p id="passwordV">Wrong email or password</p>
				<?php endif ?>
      
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="register.php" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>
<?php }  ?>
	</section>

  <form action="" method="POST">
  <input type="text" name="searchV" placeholder="search" id="search_input" width="100%;" style="display: block;width: 100%;margin-bottom: 30px;">
  <button type="submit" name="search" id="sub_search" class="d_none"></button>
  </form>

<script>






  const p = document.querySelector("#paragraph")
let solde = new Date(`april 01 2022 00:00:00`);
function updateTime(){
const now = new Date();
const remain = solde - now;
let d = Math.floor(remain / 1000 / 60 / 60 / 24);
let h = Math.floor(remain / 1000 / 60 / 60 ) % 24;
let m = Math.floor(remain / 1000 / 60) % 60;
let s = Math.floor(remain / 1000 ) % 60;

p.textContent = `Remaining ${d} days. ${h}:${m}:${s}`
}
setInterval(updateTime, 1000);/*  */
</script>
	<script src="includes\style\nav_bar\js\jquery.min.js"></script>
  <script src="includes\style\nav_bar\js\popper.js"></script>
  <script src="includes\style\nav_bar\js\bootstrap.min.js"></script>
  <script src="includes\style\nav_bar\js\main.js"></script>
