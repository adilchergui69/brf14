<?php 
ob_start();
include 'includes\phpIc\nav_bar.php'; 
include "includes/dbInc/getItem.php";
if (isset($_GET['id']) && !isset($_SESSION['idpro']) ) {
 header('Location: cart.php');
 ob_end_flush();
  $_SESSION['idpro'][] =  $_GET['id'];
}
if (isset($_GET['id']) && isset($_SESSION['idpro']) ) {
  header('Location: cart.php');
  ob_end_flush();


  if (in_array($_GET['id'], $_SESSION['idpro'])) {
  
}else if (count($_SESSION['idpro']) == 0  ){

  $_SESSION['idpro'][] =  $_GET['id'];
  header('Location: cart.php');
  ob_end_flush();

}else{

  $_SESSION['idpro'][] =  $_GET['id'];

  header('Location: cart.php');
  ob_end_flush();
}

}

if (isset($_GET['del'])) {
  $key = array_search($_GET['del'],$_SESSION['idpro']);
  unset($_SESSION['idpro'][$key]);
  header('Location: cart.php');

  ob_end_flush();
} 



if (!isset($_SESSION['idpro']) ) {

  echo '<script>localStorage.clear()</script>';
  
}





?>

<body style="background-color: #F5F5F5;">
<div class="NEW_ARRIVALS">
<h2><span >Your Cart</span></h2>
</div>

<form action="Checkout.php" method="POST">

<?php if (isset($_SESSION['idpro']) ) { 

  foreach(array_unique($_SESSION['idpro']) as $value){

  $sql = "SELECT * FROM produit  WHERE idProduit = $value ";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  
  


 ?>
 
 <link rel="stylesheet" href="includes\style\cart.css">
<div class="container_row_cart" style="border-radius: 12px; margin: 4%;padding-bottom: 54PX;background-color: white;">

  <div class="row center">
    <div class="col center ">
      
    </div>
    <div class="col-md-auto center">
     
    </div>
    <div class="col col-lg-2 center" style="margin-right: -50PX;">


    <a class="delet_btn btn" href="cart.php?del=<?php echo $row["idProduit"] ?>">
        
    

<img   id="del_<?php echo $row["idProduit"] ?>"  src="icons\icon_delete.png" style="width: 18PX !important;margin-left: -5px !important;margin-top: -2px !important;">

</a>

    </div>
    </div>
  


  <div class="row center totaltes">
  <div class="col center">
    </div>
    <div class="col center">
    <?php echo '<img src="'. 'images/'. $row["image"].'" alt="HTML5 Icon" style="width: 221px;height: 169px;">';?>
    </div>
    <div class="col-4 center" >
        <h5><?php echo $row["libelle"]?></h5>
     <p><?php echo $row["description"]?></p>

    </div>
    
    <div class="col-4 center">
        <h6>Quantty:</h6>
    	<div class="qty center">
            
                        <span class="minus" id="minus_<?php echo $row["idProduit"];?>">-</span>
                        
                        <input type="number" value="<?php echo 1?>" min="1" max="<?php echo $row["stock"]?>" class="count" id="<?php echo $row["idProduit"];?>" name="<?php echo $row["idProduit"];?>"  style="border: solid 0px;">
                       
                        <span class="plus" id="plus_<?php echo $row["idProduit"];?>" >+</span>
                       
                    </div>
                   

    </div>

    <div class="col center" style="margin-top: 3% !important;">
    <span id="price_row" value="<?php echo $row["prix"]?>"><?php echo "<span class='prix'>". $row["prix"] . "</span>"?></span>dh
    </div>
    
    <div class="col center">
    
    </div>
</div>

</div>
<script>


$(document).ready(function(){

  

  $("#del_<?php echo $row["idProduit"];?>").click(function(event) {
  
  test = event.target.id


thenum = test.match(/\d+/)[0] 

localStorage.removeItem(thenum);


  });
 






});


$("#<?php echo $row["idProduit"];?>").change(function () {



$('input[type="number"]').each(function(){   
 
    var id = $(this).attr('id');
    var value = $(this).val();
   localStorage.setItem(id, value);

});   
});



$(document).ready(function(){

 

$("#plus_<?php echo $row["idProduit"];?>").click(function () {

  
    
  if ($("#<?php echo $row["idProduit"];?>").val() == "") {
  $("#<?php echo $row["idProduit"];?>").val(0);
  
}
      $('#<?php echo $row["idProduit"];?>').val(parseInt($('#<?php echo $row["idProduit"];?>').val()) + 1 );
      
    

    $('input[type="number"]').each(function(){   
 
    var id = $(this).attr('id');
    var value = $(this).val();
   localStorage.setItem(id, value);


});  
      

      });


      $("#minus_<?php echo $row["idProduit"];?>").click(function () {
    

    //  alert("terer")
  $('#<?php echo $row["idProduit"];?>').val(parseInt($('#<?php echo $row["idProduit"];?>').val()) - 1 );
  


$('input[type="number"]').each(function(){   

var id = $(this).attr('id');
var value = $(this).val();
localStorage.setItem(id, value);


});  
  

  });
  

   });


</script>

<?php


// echo $_GET[$row["idProduit"]];


}


} 




if (isset($row["idProduit"]) ){
 

?>



<div class="container_Subtotal" style="margin: 4% 4% 0%;">
<section class="Subtotal">
 <h5><span> <b>Subtotal:</span>  <span id="totalPR" style="margin-left: 100px;"></span>dh</h5> 

</section>
</div>
<div class="container_Subtotal" style="margin: 0% 63px 0%;color: #868181;font-size: 12PX;">
<section class="Subtotal">
 <span>shipping taxes,  calculated at checkout.</span>
 
</section>
</div>
<div class="container_Subtotal" style="margin: 0% 59px 0%;color: #868181;">
<section class="Subtotal">
<a href="Checkout.php">
<button  name="Checkout"  type="submit" class="btn Checkout_btn" style="padding: 15px 51px 18px 66px;">Checkout &nbsp; &nbsp;→</button>
</a>
</form>
</section>
</div>
<?php }else{echo "<span style='font-size: 70px;text-align: center;margin-left: 22%;'>Your Cart is Empty <a href='All_product.php'>SHOP NOW!</a> </span> ";}	include 'includes\phpIc\footer.php';?>

</div>
<script>

// const someQuantty = [];
//   const someprice = [];
//   const totals = [];

//   function adil(){

    
//     $('.prix').each(function(){   
   
//     someprice.push($(this).text());

  
//   }); 

$(document).ready(function(){

  var rowtotal = [];

  function subtootl() {


   

$('.totaltes').each(function(){ 

var l = $(this).find('.prix').text();
var w = $(this).find('input').val();
var dateTotal = (l * w);
rowtotal.push(dateTotal);


}); 

const reducer = (accumulator, curr) => accumulator + curr;
console.log(rowtotal.reduce(reducer));

$('#totalPR').text(rowtotal.reduce(reducer))

    
  }

  subtootl() 

  
$('input[type="number"]').change(function () {
  
  rowtotal = []
  subtootl() 

  

});

$(".plus").click(function () {
  rowtotal = []
  subtootl() 

    });


    $(".minus").click(function () {

      rowtotal = []
  subtootl() 


});


});



  
// for (let i = 0; i < someprice.length; i++) {
//   const totalsub = someprice[i] * someQuantty[i] ;
//   totals.push(totalsub);

// }

// initialValue = 0
// const sumWithInitial = totals.reduce(
//   (previousValue, currentValue) => previousValue + currentValue,
//   initialValue
// );

// alert(sumWithInitial)

// someQuantty = []
// someprice = []
// totals = []

//   }
  
//   adil()
 






$('input[type="number"]').each(function(){    

  

var id = $(this).attr('id');
const testlocal = localStorage.getItem(id)

if(testlocal){
var value = localStorage.getItem(id);
  
  $(this).val(value);
  



}else{

}


}); 
</script>


</body>

</html>
