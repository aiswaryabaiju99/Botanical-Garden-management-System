<?php 
include "config.php"; 
$c_id = $_GET['c_id'];
$sql = "UPDATE tbl_cat SET c_status=1 WHERE c_id=".$c_id;
$result=$conn->query($sql);
if ($result == TRUE) 
{
	echo('<script>alert("Category retrieved successfully")</script>');
	echo('<script>window.location.assign("viewcategory.php");</script>');
}
else
{
        echo "Error:" . $sql . "<br>" . $conn->error;
}
?>