<?php 
include('config.php');
$n=$_SESSION['username'];
if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name'])){
    $pymnt_id=$_POST['payment_id'];
    $amt=$_POST['amount'];
    $nme=$_POST['name'];
    $payment_status="completed";
    
    mysqli_query($conn,"INSERT INTO `tbl_payment`( `name`,`amount`,`payment_id`,`payment_status`)
     VALUES ('$nme','$amt','$pymnt_id', '$payment_status')");
    
}