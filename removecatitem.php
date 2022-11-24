<?php
include "config.php";


if(isset($_GET['val']))
{
$val=$_GET['val'];
echo "$val";

//$sql="UPDATE `login` SET `value`='1' WHERE username = '$mname' ";
$sql22="DELETE FROM `tbl_cart` WHERE p_id='$val'";
$res=mysqli_query($conn,$sql22);
if($res)
{
    header('location:viewcart.php');
}
else
{
    die(mysqli_error($conn));
}
}


if(isset($_GET['delete']))
{
$val=$_GET['delete'];
echo "$val";

//$sql="UPDATE `login` SET `value`='1' WHERE username = '$mname' ";
$sql22="DELETE FROM `tbl_plants` WHERE p_id='$val'";
$res=mysqli_query($conn,$sql22);
if($res)
{
    header('location:viewandeditproducts.php');
}
else
{
    die(mysqli_error($conn));
}
}

?>