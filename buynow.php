<?php
session_start();
include "config.php";
$n= $_SESSION['username'];
if(!isset($n)){
  session_destroy();
  header('location:login.php');
}
else
{
?>
<link href="assets/css/bootstrap.css" rel="stylesheet">
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
                    <li><a href="logout.php"class="btn btn-warning col-lg-20">Logout</a></li
  </ul>
                    <a href="viewcart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity"value="<?=$sql;?>"></span></span></a>
                                </div>
           
        </nav>
       
    </div>
</div>

   

<!-- <form>
    <input type="text" id="name"name="name"/>
</br>
<input type="text" id="amount"name="ammount"/>
</br>
<input type="button" id="btn"name="btn"value="pay now" onclick="pay_now()"/>
</br>
</form> -->
<div class="login">

<!-- left side div -->

<div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">

<form>
    <center><h1><b>Buy Now<b></h1></center>
<?php
include("config.php");
if(isset($_GET["p_id"]))

{
	$pid=$_GET["p_id"];
    $query= "SELECT p.*,s.s_name as sname,c.c_name as cname  FROM tbl_plants p inner join tbl_sub s on s.s_id=p.s_id inner join tbl_cat c on c.c_id=s.c_id   WHERE p.p_status=1 AND p.p_id='$pid'";
    $query_run = mysqli_query($conn, $query);
    $check_tbl_art = mysqli_num_rows($query_run) > 0;
    
    
if($check_tbl_art)
{
   while($row = mysqli_fetch_assoc($query_run))
   {
    ?>
   
   <h1>Plant:  <span class="mb-4 product_name"><?php  echo$row['p_name']; ?></h1>
   
    <input type="hidden"name="name" id="name"value=<?php echo $row['p_name']; ?>
    <center><h1>Price:  <span class="mb-4 product_name"><?php  echo$row['price']; ?> </h1></center>
    <input type="hidden"name="price"id="amount" value=<?php echo $row['price']; ?>>
   </br>
   </tr>
   
   <div class="row">
            <div class="col-8 d-flex justify-content-between remove_wish">
    <center><td><input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary"onclick="pay_now()"/></center>
</br>

    <?php
   }
}
}
 ?>

    
</form>
<script>
    function pay_now(){
        var name='<?php echo $n;?>';
        var amount=jQuery('#amount').val();
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
               })
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <?php
}
?>