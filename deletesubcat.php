<?php
include("config.php");
if(isset($_GET["s_id"]))
{
	$s_id=$_GET["s_id"];
	
	$sql = "UPDATE tbl_sub SET status=0 WHERE s_id=".$s_id;
	$result=$conn->query($sql);
if ($result == TRUE) 
{
	echo "<script>alert(' Subcategory  Deleted Successfully!!');window.location='viewsubcat.php'</script>";
}
}
?>
