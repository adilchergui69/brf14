<?php ob_start();	include 'includes\phpIc\nav_bar.php';

include "includes/dbInc/getItem.php";



?>



<body style="background-color: #F5F5F5;">


<div class="NEW_ARRIVALS">
<h2><span >checkout </span></h2>
</div>

<div class="contener_itm" style="margin: 4% 4% 0%; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);">


<div class="row row_product" style="text-align: center;">
    <div class="col-6">
    Your items
    </div>
    <div class="col">
    Quantty
    </div>
    <div class="col">
    Total price
    </div>
    </div>
    
  
  <?php
  

   
foreach($_SESSION['idpro'] as $sir){

    if (!isset($_SESSION['username']) ) {

        header('Location: cart.php');
        ob_end_flush();

      }
    // echo  $sir . $_GET[$sir];

    $sql = "SELECT * FROM produit  WHERE idProduit = $sir ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Quantty'][] =  $_POST[$sir];

    

?>
    <div class="row white" style="text-align: center;margin-bottom: 20px;padding: 2% 0%;">
    <div class="col-6" >
    <?php echo '<img src="'. 'images/'. $row["image"].'" alt="HTML5 Icon" style="width: 210px;height: 137px;float: left;padding-right: 3%;">';?>
    <div>
        <h5><?php echo $row["libelle"] ?></h5>
        <p> <?php echo substr($row["description"], -90); ?>...</p>
    
    </div>
    </div>
    <div class="col Quanttyselect" style="margin-top: 3%;margin-left: 17PX;">
    <?php echo $_POST[$sir]; ?>
    </div>
    <div class="col" style="margin-top: 3%;margin-left: 17PX;">
 <span class="Priceselect"><?php echo $row["prix"] ?> </span>dh </div>
</div>

<?php }   ?>

    </div>
    </div>



  <div>
    <div>
        <div class="text-center">
           
            <div class="card">
                <h5 class="text-center mb-4">Shipping Details</h5>
                <form action="" method="GET" class="form-card">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name"  value="<?php echo $_SESSION['nom']?>" > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name"  value="<?php echo $_SESSION['prenom']?>" > </div>
                        
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="">Address<span class="text-danger"> *</span></label>  <input type="text" id="fname" name="Address" placeholder="Enter your Address" value="<?php echo $_SESSION['adresse']?>" >  </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="">City<span class="text-danger"> *</span></label> <select name="City" id="cars">
  <option value="Tanger">Tanger</option>
  <option value="Rabat">Rabat</option>
  <option value="Asilah">Asilah</option>
  <option value="Fes">Fes</option>
</select>   </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="">Zip code<span class="text-danger"> *</span></label>  <input type="text" id="fname" name="Zip" placeholder="Enter your Zip code" >  </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="">Phone Number<span class="text-danger"> *</span></label>  <input type="text" id="fname" name="Phone" placeholder="Enter your Phone Number" >  </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="">Email<span class="text-danger"> *</span></label>  <input type="text" id="fname" name="Email" placeholder="Enter your Email" >  </div>
                    </div>
              
                    <div class="row justify-content-end">
                    </div>
               
            </div>
        </div>
    </div>
</div>


<div class="container-fluid px-1  mx-auto">
    <div >
        <div >
           
            <div class="card" style="margin-top: 0px;">
               
                
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex" style="margin-top: 12px;">  </span></label> Shipping Method: </div>
                        <div class="form-group col-sm-6 flex-column d-flex"><select name="cars" id="cars">
                        <option value="free">free shipping</option>
                       
                        </select> </div>
                    </div>
  
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">  </span></label> Subtotal: </div>
                        <div class="form-group col-sm-2 flex-column d-flex"><span class="totalPR"></span> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">  </span></label> Shipping: </div>
                        <div class="form-group col-sm-2 flex-column d-flex">0 DH </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">  </span></label> Total: </div>
                        <div  class="form-group col-sm-2 flex-column d-flex"> <span class="totalPR"></span></div>
                    </div>

                    <div class="row justify-content-end" style="PADDING: 0PX 138PX 0PX  222PX;">
                        <div class="form-group "> <button type="submit" class="btn" name="doneOrder" style="background-color: #B08B66;color: white;padding: 13PX 27PX;" >complete your purchase</button> </div>
                    </div>

                    </form>
            </div>
        </div>
    </div>
</div>
<?php 	include 'includes\phpIc\footer.php';


if (isset($_GET['doneOrder'])) {
    $to_email = $_SESSION['email'];
    $subject = "confirmation order";
    $body = "Hi, thank you for shopping with us ";
    $headers = "From: VKB";
    $idClient = $_SESSION['idClient'];
    $adress = $_GET["Address"];
    
    if (mail($to_email, $subject, $body, $headers)) {
        for ($i=0; $i < count($_SESSION['idpro']) ; $i++) { 
    
        
        
        $quantity = $_SESSION['Quantty'][$i];
        $id_product = $_SESSION['idpro'][$i];
        
        $sql_insert_order = "INSERT INTO `commande`(`idClient`, `date`, `adresseLivraison`) VALUES ($idClient,NOW(),'$adress')";
        
        mysqli_query($conn,$sql_insert_order);
        
        $order_id = $conn->insert_id;
        
        $sql_insert_details = "INSERT INTO detailscommande VALUES (
        $order_id, $id_product, $quantity
        );";
        
        mysqli_query($conn,$sql_insert_details);
        
        // echo '<script>localStorage.clear()</script>';
        }
        unset($_SESSION['Quantty']);
        unset($_SESSION['idpro']);
        header("location: confMessage.php");


    } else {
        echo "Email sending failed...";
    }
    
 }


?>

<script>

$(document).ready(function(){

var rowtotal = [];

function subtootl() {
rowtotal = [];
$('.white').each(function(){ 
 
var l = $(this).find('.Priceselect').text();
var w = $(this).find('.Quanttyselect').text();
var dateTotal = (l * w);
rowtotal.push(dateTotal);

}); 

const reducer = (accumulator, curr) => accumulator + curr;
console.log(rowtotal.reduce(reducer));

$('.totalPR').text(rowtotal.reduce(reducer)+" DH")

  
}

subtootl()
});
</script>
</body>

</html>
</body>

</html>