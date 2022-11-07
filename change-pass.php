<?php
include 'config.php';

if (isset($_POST['change-pass'])) {
  $old = $_POST['current'];
  $new = $_POST['new'];
  //$abc=md5($_POST["new"]);
  $user = mysqli_real_escape_string($conn, $_SESSION['username']);
  $passCheck = "SELECT * FROM `tbl_login` WHERE `username`='$user'";
  $runQ = mysqli_query($conn, $passCheck);
  $row = mysqli_fetch_array($runQ);
  if ($row['password'] != $old) {
    echo '<script>alert("Old password doesnot match.");</script>';
    echo '<script>window.location.href="change-pass.php";</script>';
  } else {
    $newp = "UPDATE `tbl_login` SET `password`='$new' WHERE `username`='$user'";
    $runnewp = mysqli_query($conn, $newp);
    echo '<script>alert("Password updated.");</script>';
    echo '<script>window.location.href="login.php";</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">


  <link href="assets/css/style.css" rel="stylesheet">
  <script>
    function validateForm() {
      var pw1 = document.getElementById("newPassword").value;
      var pw2 = document.getElementById("renewPassword").value;
      if (pw2 != "" && pw1 != pw2) {
        document.getElementById('msg1').style.display = "block";
        document.getElementById('msg1').innerHTML = "Password doesnot match";
        return false;
      } else {
        document.getElementById('msg1').style.display = "none";
      }
    }
  </script>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">


    <!-- Font Icon -->
    
    
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script>
body {
  background-image: url('bg-img/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</script>
</head>

<body>

    <div class="container">
    <div class="navbar">

    <div class="logo">
            
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
               <li><a href="logout.php">Logout</a></li>
                
            </ul>
        </nav>
       
    </div>
</div>


<div class="login">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
        <form action="" method="POST" onsubmit="return validateForm()">

          <div class="row mb-3">
            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
            <div class="col-md-8 col-lg-9">
              <input type="password" class="form-control" name="current" id="currentPassword" placeholder="Enter Current Password" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
            <div class="col-md-8 col-lg-9">
              <input type="password" class="form-control" name="new" id="newPassword" onblur="return validateForm()" onKeyUp="return validateForm()" placeholder="Enter New Oassword" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
            <div class="col-md-8 col-lg-9">
              <input type="password" class="form-control" name="renewPassword" id="renewPassword" onblur="return validateForm()" onKeyUp="return validateForm()" placeholder="Confirm Password" required>
              <span class="message" id="msg1"></span>
              <br>
              <center><input type="submit" name="change-pass" class="btn btn-primary" value="Change Password"></center>
            </div>
          </div>
        </form>
      </div>

  </main>
</body>
  <!-- Vendor JS Files -->
  