<?php 

include "config.php";
include ("header.php");
include ("sidebar.php");


if(isset($_GET["s_id"]))
{
    $sid=$_GET["s_id"];
    $sql=mysqli_query($conn,"SELECT * FROM tbl_sub WHERE s_id='$sid'");
    $display=mysqli_fetch_array($sql);
}
?>
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Subcategory
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post">
                                    <div class="form-group">
                                        <label for="name">Name Of Subcategory</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $display['s_name'];?>" required>
                                    </div>
                                    <div class="form-group">
                            <?php
$conn=mysqli_connect("localhost","root","","botanical");


$sql=mysqli_query($conn,"select * from tbl_cat WHERE c_status=1"); 
?>
<label>Category Name</label><br>

     
<select   name="cid" onchange="showResult(this.value)" class="form-control m-bot15" required >
<option value="">--select--</option>
<?php
while($row=mysqli_fetch_array($sql))
{

?>
<option value="<?php echo $row[0] ?>" ><?php echo $row[1] ?></option>
<?php
    
}
?>

</select></div><br>
                                <button type="submit" name="btnsubmit"class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            <div class="col-lg-12">
               
            </div>
        </div>
        <div class="row">
            
        </div>
        <?php
if(isset($_POST["btnsubmit"]))
{
    $name=$_POST["name"];
    $cid=$_POST["cid"];
   
    $sql=mysqli_query($conn,"UPDATE tbl_sub SET s_name='$name',c_id='$cid' WHERE s_id='$sid'");
    if($sql)
    {
       
        //echo "<script>('successfully updated')window.location='viewsubcat.php'</script>";
        echo('<script>alert("Subcategory updated successfully")</script>');
        echo('<script>window.location.assign("viewsubcat.php");</script>');
      
        
    }
}


?>