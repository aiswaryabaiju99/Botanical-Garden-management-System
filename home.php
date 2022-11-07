<?php
include "config.php";
$email= $_SESSION['username'];
if(!isset($email)){
  session_destroy();
  header('location:login.php');
}
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
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>Botanical Garden</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                    <li><a href="change-pass.php">Change Password</a></li>
                    <li><a href="userprofile.php">User-Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>

                    
                </ul>
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
   
    <div class="container">
        
    <div class="row">
            <div class="col-md-2">
                <div>
                
                    <a href="#" class="list-group-item active">Categories
                    </a>
                    <h6 class="text-info">Select Category</h6>
                <ul class="list-group">
                    <?php
                    $sql="SELECT * FROM tbl_cat";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label clasws="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?=$row['c_name'];?>" id="c_name"><?= $row['c_name'];?>
                    </label>
                    </div>
                    </li>
                    <?php

                    }
                    ?>
                    </ul>
                   
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success" id="result">Subcategory
                    </a>
                    <ul class="list-group">
                    <?php
                    $sql="SELECT * FROM tbl_sub";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label clasws="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?=$row['s_name'];?>" id="c_name"><?= $row['s_name'];?>
                    </label>
                    </div>
                    </li>
                    <?php

                    }
                    ?>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Price
                    </a>
                    <ul class="list-group">
                    <?php
                    $sql="SELECT price FROM tbl_plants";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label clasws="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?=$row['price'];?>" id="price"><?= $row['price'];?>
                    </label>
                    </div>
                    </li>
                    <?php

                    }
                    ?>
                    </ul>
                </div>
</div>
                <!-- /.div -->
                <div class="container">

                <!-- /.row -->
                <div class="conatainer py-5">
                <?php
$currentuser= $_SESSION['username'];
$sql="SELECT * FROM `registeration` WHERE email='$currentuser'";
$gotresult=mysqli_query($conn,$sql);
if($gotresult)
{
    if(mysqli_num_rows($gotresult) > 0)
    {
        while($row=mysqli_fetch_array($gotresult))
        {
            //print_r($row['email']);
            ?>
            <center><h1>Welcome <?php echo$row['name'];?></h1></center>
            <?php
        }
    }
}
            ?>
			<div class="row mt-4">
           <div class="text-center">
                <img arc="images/loder.gif" id="loader" width="200" style="display:none;">
</div>
					<?php 
					
					$query= "SELECT * FROM tbl_plants WHERE type='sale' ";
					$query_run = mysqli_query($conn, $query);
					$check_tbl_art = mysqli_num_rows($query_run) > 0;
					
					
				if($check_tbl_art)
				{
				   while($row = mysqli_fetch_assoc($query_run))
				   {
                       
						?>

						<div class="col-md-3 mt-3">
							<div class="card">
							<img src="../Admin/pages/forms/image/<?php echo $row['image'];?> " width="200px" height="200px" alt=" Images"/>
								<div class="card-body">
								<h4 class="card-title"><?php echo $row['p_name']; ?></h4>
								<h3 class="card-title"><?php echo $row['b_name']; ?></h3>
								<h2 class="card-title"><p>Rs: <?php echo $row['price']; ?></p></h2>
                                <a class="btn btn-primary"  role="button"<?php echo "<a  href='viewmoreplants.php?p_id=".$row['p_id']; ?>'">Details</a></a>
                               
                                <a href="#" class="btn btn-primary" role="button">Add To Cart</a></p>

								
								</div>	  
							</div>
						</div>
                   
						<?php
					  
				   }
				}
				else
				{
					echo "No Plants Found";
				}

				

					?>
					
					 

            </div>
                </div>
            </div>
                  
            </div>
            </div>
    <!--Footer -->
   

    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2014 | &nbsp; All Rights Reserved | &nbsp; www.yourdomain.com | &nbsp; 24x7 support | &nbsp; Email us: info@yourdomain.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
   <script>
  
$(document).ready(function() {
    $(".product_check").click(function(){
        $("#loader").show();
        var action ='data';
        var c_name=get_filter_text('c_name');
        var s_name=get_filter_text('s_name');
        var price=get_filter_text('price');
        $.ajax({
            url:'actoin.php',
            method:'POST',
            data:{action:action,c_name:c_name,s_name:s_name,price:price},
            success:function(response){
                $("#result").html(response);
                $("#loader").hide();
                $("#textChange").text("Filtered Plants");
            }
        })
});
    })
	function get_filter_text(text_id)
    var filterData = [];
    $('#' +text_id :'checked').each(function(){
        filterData.push($(this).val());
    });
    return filterData;
			
		
		
	});
});
</body>
</html>
