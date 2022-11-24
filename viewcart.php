<?php
session_start();
include "config.php";
$n1= $_SESSION['username'];
?>
<?php

// Check user login or not
if(!isset($n1)){
    header('Location: login.php');
}
else{
// logout
// if(isset($_POST['btn_logout'])){
//     session_destroy();
//     header('Location: loginnew.php');
// }
// $n=$_SESSION['username'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Botanical Garden</title>
    <!-- Bootstrap core CSS -->
   
    <!-- custom CSS here -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

    
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap'); * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; } :root { --text-clr: #4f4f4f; } p { color: #6c757d; } a { text-decoration: none; color: var(--text-clr); } a:hover { text-decoration: none; color: var(--text-clr); } h2 { color: var(--text-clr); font-size: 1.5rem; } .main_cart { background: #fff; } .card { border: none; } .product_img img { min-width: 200px; max-height: 200px; } .product_name { color: black; font-size: 1.4rem; text-transform: capitalize; font-weight: 500; } .card-title p { font-size: 0.9rem; font-weight: 500; } .remove-and-wish p { font-size: 0.8rem; margin-bottom: 0; } .price-money h3 { font-size: 1rem; font-weight: 600; } .set_quantity { position: relative; } .set_quantity::after { content: "(Note, 1 piece)"; width: auto; height: auto; text-align: center; position: absolute; bottom: -20px; right: 1.5rem; font-size: 0.8rem; } .page-link { line-height: 16px; width: 45px; font-size: 1rem; display: flex; justify-content: center; align-items: center; color: #495057; } .page-item input { line-height: 22px; padding: 3px; font-size: 15px; display: flex; justify-content: center; align-items: center; text-align: center; } .page-link:hover { text-decoration: none; color: #495057; outline: none !important; } .page-link:focus { box-shadow: none; } .price_indiv p { font-size: 1.1rem; } .fa-heart:hover { color: red; }
</style>
<style>
    #navb{
         color:white;
    }
</style>

<body>

    <div class="col-md-12 end-box ">
    

   
            
       
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="change-pass.php">Change Password</a></li>
                    <li><a href="userprofile.php">User-Profile</a></li>
                    <a href="viewcart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity"value="<?=$sql;?>"></span></span></a>
                              
                    <li><a href="logout.php"class="btn btn-warning col-lg-20">Logout</a></li
  </ul>
                   
           
        </nav>
       
    </div>
</div>

   
        
                <?php
//                 $sql5="SELECT COUNT( * ) FROM tbl_cart WHERE username='$n'";
//                 $res=mysqli_query($conn,$sql5);
//   $row=mysqli_fetch_array($res);
  ?>
                                    <a href="viewcart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity"value="<?=$sql;?>"></span></span></a>
                                </div>
                            
                </ul>
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-11 mx-auto">
<div class="row mt-5 gx-3">
<!-- left side div -->


<div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
<h1>Cart Items</h1>
<?php 
$s="select * from tbl_cart where username='$n1'";

$run=mysqli_query($conn,$s);
while($ru=mysqli_fetch_assoc($run)){
$id=$ru['id'];
  $pid=$ru['p_id'];
  $pname=$ru['name'];
  $price=$ru['price'];
  $image=$ru['image'];



?>

            <div class="card p-4">

            
            <h2 class="py-4 font-weight-bold"></h2>
            <div class="row">
              
                <!-- cart images div -->

                <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                <img src="../Admin/pages/forms/image/<?php echo"$image";?>" class="" alt="cart img">
                </div>


            

                <!-- cart product details -->
                <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                <div class="row">
                <!-- product name  -->
                <div class="col-6 card-title">
                <h1 class="mb-4 product_name"><?php  echo"$pname"?></h1>
               
                </div>
                <!-- quantity inc dec -->
                <div class="col-4">
                  <form action="" method="POST">
               Quantity<input type="number" name="quantity" style="width:70px" id="qty-<?php echo $id; ?>" value="1" onchange="varr(<?php echo $id;?>)" min="1",max="300" >
           
               <input type="hidden" id="price-<?php echo $id; ?>" value="<?php echo $price; ?>">
               <input type="hidden" id="total" name="total" value="0">
              
                </div>
            </div>
 

            <!-- //remover move and price -->
            <div class="row">
            <div class="col-8 d-flex justify-content-between remove_wish">
            <p><a href="removecatitem.php?val=<?php echo $pid;?>" class="fas fa-trash-alt" style="color:red"></a> REMOVE ITEM</p>
            <!-- Default switch -->

            
            </div>
           
            <div class="col-4 d-flex justify-content-end price_money">
            <h3>Rs<span id="itemval-<?php echo $id; ?>"><?php echo "$price";?> </span></h3>
           

            </div>
            </div>

    </div>
    </div>
    </div>
    <?php
  }
?>

<!-- right side div -->
<div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
<div class="right_side p-3 shadow bg-white">
<h2 class="product_name mb-5">The Total Amount Of</h2>
<h3>Rs<span id="itemval-"></span></h3>
<div class="price_indiv d-flex justify-content-between">
<p>Product amount</p>
<?php
$r=0;
$n="select price from tbl_cart where username='$n1'";
$run=mysqli_query($conn,$n);
while($ru=mysqli_fetch_assoc($run)){
  $price=$ru['price'];
$r=$r + $price;
}
echo "$r";

 ?>
 
 </div>

 <hr />

<!-- <button class="btn btn-primary text-uppercase">Checkout</button> -->

    <center><td><input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary"onclick="pay_now()"/></center>
</br>



    
<script>
  console.log("hello");
    function pay_now(){
        var name='<?php echo $n1;?>';
        var amount='<?php echo $r; ?>';
        var options =  {
            "key": "rzp_test_xrvpJJnnYv5Ny1", // Enter the Key ID generated from the Dashboard
            "amount": amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Botanical Garden",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler":function(response){
              
               jQuery.ajax({
                   type:"POST",
                   url: "payment_process.php",
                   data:"payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                   success:function(result){
                       window,location.href="thanku.php?payment_id="+response.razorpay_payment_id+"?amt="+amount+"&name="+name;
                   }
               });
              
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
</script>
</div>
<!-- discount code part -->






</div>
</div>
</div>
</div>




<!-- discount code ends -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script>
 function varr(cart)
    {
      
      var x=document.getElementById('qty-'+cart).value;
      //var total=qty-*price;
      x=parseInt(x);
      if(isNaN(x))
      {
        x=1
      }
      var price=document.getElementById('price-'+cart).value;
      price=parseInt(price);
     var total=x*price;
     document.getElementById('itemval-'+cart).innerHTML=total;
     

    var tot=document.getElementById('total').value;
    tot=parseInt(tot);
    tot=tot+total;

//     document.getElementById('total').value=tot;
// var f=document.getElementById('total').value;
// document.getElementById('finalp').innerHTML=f;
 

    
     
      


    
    }
    print(f)
 </script>
 <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


</body>

  
</html>
<?php
}


?>
