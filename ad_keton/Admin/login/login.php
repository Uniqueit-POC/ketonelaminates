<?php 
 session_start();
 include_once __DIR__.'/../../Model/user.php';
 $useobj = new user();
 //for select by pk 
 if(!empty($_GET['pk'])) 
{ 
  $result=$useobj->selectbypk($_GET['pk']);
  $row=mysqli_fetch_assoc($result);
}
if(isset($_POST['save']))
{
  $useobj->Name=$_POST['Name'];
  $useobj->ContactNumber=$_POST['Name'];
  $useobj->Email=$_POST['Name'];
  $useobj->Password=$_POST['Password'];
  $result1=$useobj->login();
 if(mysqli_num_rows($result1)==1)
 {
  $row=mysqli_fetch_assoc($result1);
  $_SESSION["Name"]=$row['Name'];
  $_SESSION["UserID"]=$row['UserID'];
  header('Location: ../catlog.php');
 }


}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin </title>
    <!-- plugins:css -->

    <link rel="stylesheet" href="styling.css">

    

    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" href="assets/scss/login.scss">
    <script src="assets/js/login.js" crossorigin="anonymous"></script>
    
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
<body bgcolor="black">

    <div class="">
       
        <!-- partial:partials/_sidebar.php -->
        
        <!-- partial -->
        <div class="">
          <!-- partial:partials/_navbar.php -->
         
          <!-- partial -->
          <div class="main-panellogin">
            <div class="content-wrapper">
                <div class="login-box">
                    <h2>Login</h2>
                    <form  action="login.php" method="POST">
                      <div class="user-box">
                        <input type="text" name="Name" required="">
                        <label>Username</label>
                      </div>
                      <div class="user-box">
                        <input type="password" name="Password" required="">
                        <label>Password</label>
                      </div>
                      
                     
                    <br>
                      <center>
                        <button class="login" type="submit" name="save">
                      
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Login
                      </a>
                      </button>
                    </center>
                    </form>
                  </div>
              </div>
             
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.php -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>


    

</body>
</html>
