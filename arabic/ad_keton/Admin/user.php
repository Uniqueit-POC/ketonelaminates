<?php
session_start();
if(!isset($_SESSION['UserID']))
{
header('Location: login/logout.php');

}
?>
<?php 
 include_once __DIR__.'/../Model/user.php';
 $useobj = new user();
 //for select by pk 
 if(!empty($_GET['pk'])) 
{ 
  $result=$useobj->selectbypk($_GET['pk']);
  $row=mysqli_fetch_assoc($result);
}
if(isset($_POST['edit']))
{
 echo $useobj->Name=$_POST['Name'];
 echo $useobj->Email=$_POST['Email'];
 echo $useobj->ContactNumber=$_POST['ContactNumber'];
 echo $useobj->Password=$_POST['Password'];
 echo $result1=$useobj->updatedata($_POST['UserID']);
 if($result1)
 {
  // echo "<script>window.location.href='userdetails.php';</script>";
 }
 else
 {
  // $id=$_GET['pk'];
  // echo "<script>window.location.href='user.php?pk=$id';</script>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin </title>
    <!-- plugins:css -->
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
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
  <?php
    include "header.php";
    ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card-body">
                <h4 class="card-title">User</h4>
               <br>
               <?php 
               if(isset($_POST['save']))
               {
                include_once __DIR__.'/../Model/user.php';

                $useobj = new user();
                  $useobj->Name=$_POST['Name'];
                  $useobj->Email=$_POST['Email'];
                  $useobj->ContactNumber=$_POST['ContactNumber'];
                  $useobj->Password=$_POST['Password'];     
                  $result=$useobj->insertdata();
                  if($result)
                  {
                    echo "<script>window.location.href='userdetails.php';</script>";

                  }
                  else{
                    //pop up alret
                  }
                }
               
               ?>
                <form class="forms-sample" action="user.php" method="POST">
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">User Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputUsername2" placeholder="User Name" name="Name" value="<?php echo $row['Name'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" name="Email" value="<?php echo $row['Email'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Contact Number</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="exampleInputMobile" placeholder="Contact Number" name="ContactNumber" value="<?php echo $row['ContactNumber'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputUsername2" placeholder="User Name" name="Password" value="<?php echo $row['Password'];?>">
                      <input type="hidden" class="form-control" id="exampleInputUsername2" placeholder="User Name" name="UserID" value="<?php echo $row['UserID'];?>">
                    </div>
                  </div>
                   
                  
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary" 
                    name=
                    "<?php 
                    if(!empty($_GET['pk']))
                    {
                      echo "edit";
                    }
                    else
                    {
                      echo "save";
                    }?>">
                    <?php 
                    if(!empty($_GET['pk']))
                    {
                      echo "edit";
                    }
                    else
                    {
                      echo "save";
                    }?>
                    
                    </button>
                  </div>

                               
                </form>
              </div>
           
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>