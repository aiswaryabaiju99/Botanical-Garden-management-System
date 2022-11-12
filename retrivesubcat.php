<?php 
include "config.php"; 
$s_id = $_GET['s_id'];
$sql = "UPDATE tbl_sub SET status=1 WHERE s_id=".$s_id;
$result=$conn->query($sql);
if ($result == TRUE) 
{
	echo('<script>alert("Subcategory retrieved successfully")</script>');
	echo('<script>window.location.assign("viewsubcat.php");</script>');
}
else
{
        echo "Error:" . $sql . "<br>" . $conn->error;
}
?>