<?php
include "config.php";
include ("header.php");
include ("sidebar.php");

?>
<!DOCTYPE html>
<html lang="en">

    <body>

    <div class="main-panel">     
    <br><p class="card-description"><b><center>Disabled Categories</center><b></p><br>   
         <p class="card-description">
                 </p>
    <a href="basic_elements.php"></a>
  
  <!--Table-->
  <table class="table">

    <!--Table head-->
    <thead>
          <tr>
            <th data-breakpoints="xs">Sl.No</th>
            <th>Category</th>
            <th>SubCategory</th>
            
            
    <th style="color:#F00">Retrieve</th>
            
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
         
<?php
$s=1;
$sql=mysqli_query($conn,"SELECT p.*,s.c_name as cname  FROM tbl_sub p inner join tbl_cat s on s.c_id=p.c_id WHERE status=0");

   while($display=mysqli_fetch_array($sql))
   {
	echo "<tr>";
	echo"<td>".$s++."</td>";
    echo "<td>".$display["cname"]."</td>";
	echo "<td>".$display["s_name"]."</td>";
   
    
    
	
	echo "<td><a style='color:#090' href='retrivesubcat.php?s_id=".$display['s_id']."'>Retrive</a> </td>";
	
	echo "</tr>";
	
  }

echo "</table>";

?>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->


</body>
</html>

