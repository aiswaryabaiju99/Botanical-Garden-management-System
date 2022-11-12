<?php
include("config.php");
if(isset($_GET["c_id"]))
{
	$c_id=$_GET["c_id"];
	$sql = "UPDATE tbl_cat SET c_status=0 WHERE c_id=".$c_id;
	
	$result=$conn->query($sql);
if ($result == TRUE) 
{
	echo "<script>alert(' Category Deleted Successfully!!');window.location='viewcategory.php'</script>";
}
}
?>