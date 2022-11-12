<?php 

include "config.php";
include "header.php";
include "sidebar.php";
    if (isset($_POST['update'])) {

        $c_name = $_POST['c_name'];

        $c_id = $_POST['c_id'];

       

        $sql = "UPDATE `tbl_cat` SET `c_name`='$c_name' WHERE `c_id`='$c_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

           	echo('<script>alert("category updated successfully")</script>');
	echo('<script>window.location.assign("viewcategory.php");</script>');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['c_id'])) {

    $c_id = $_GET['c_id']; 

    $sql = "SELECT * FROM `tbl_cat` WHERE `c_id`='$c_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $c_name = $row['c_name'];

            

            $c_id = $row['c_id'];

        } 

    ?>

<html>
<head>
<title>Updation form</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Update Category</h4>
                  

	<form action="" method="POST">
	
	<input type="text" name="c_name" value="<?php echo $c_name; ?>">
	<input type="hidden" name="c_id" value="<?php echo $c_id; ?>">
	<br><br>
    <button type="submit" name="update"value="update"class="btn btn-primary mr-2">Submit</button> 
	</form>
	</div>
	
                </div>
              </div>
            </div>
           
</body>
</head>
</html>

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 