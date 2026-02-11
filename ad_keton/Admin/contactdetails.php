<?php
session_start();
if(!isset($_SESSION['UserID']))
{
header('Location: login/logout.php');

}
?>
<?php
 include_once __DIR__.'/../Model/contact.php';
 $conobj = new contact();


 if(isset($_POST['save']))
 {
  $conobj->ContactNumber1=$_POST['ContactNumber1'];
  $conobj->ContactNumber2=$_POST['ContactNumber2'];
  $conobj->Email=$_POST['Email'];
  $conobj->Email2=$_POST['Email2'];

  $conobj->FacebookLink=$_POST['FacebookLink'];
  $conobj->InstagramLink=$_POST['InstagramLink'];
  $conobj->WhatsAppLink=$_POST['WhatsAppLink'];
  $conobj->Address=$_POST['Address'];
  $conobj->GoogleMapLink=$_POST['GoogleMapLink'];
  $conobj->UserID=1;
  $result=$conobj->updatedata(1);
  if($result)
  {
    echo "<script>window.location.href='contactdetails.php';</script>";
 
  }
 }
 else
 {
  // echo "Sanghani";
 }
 $result=$conobj->selectalldata();
 $row=mysqli_fetch_assoc($result);
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
        <!-- header  -->
        <?php
        include "header.php";
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card-body">
                <h4 class="card-title">Contact Details</h4>
               <br>
                <form class="forms-sample" action="contactdetails.php
                " method="POST">
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Contact Number 1</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Contact Number 1" name="ContactNumber1" value="<?php echo $row['ContactNumber1'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Contact Number 2</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Contact Number 2" name="ContactNumber2" value="<?php echo $row['ContactNumber2'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="exampleInputMobile" placeholder="Email" name="Email" value="<?php echo $row['Email'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email 2</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="exampleInputMobile" placeholder="Email" name="Email2" value="<?php echo $row['Email2'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Facebook Link</label>
                    <div class="col-sm-9">
                      <input type="text"  class="form-control" id="exampleInputMobile" placeholder="Facebook Link" name="FacebookLink" value="<?php echo $row['FacebookLink'];?>">
                    </div>
                  </div>
                 
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Instagram Link</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputMobile" placeholder="Instagram Link" name="InstagramLink" value="<?php echo $row['InstagramLink'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">WhatsApp Link</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputMobile" placeholder="WhatsApp Link" name="WhatsAppLink" value="<?php echo $row['WhatsAppLink'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        
                    <input type="text" class="form-control" id="exampleInputMobile" placeholder="Google Map Link" name="Address" value="<?php echo $row['Address'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Google Map Link</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputMobile" placeholder="Google Map Link" name="GoogleMapLink" value="<?php echo $row['GoogleMapLink'];?>">
                    </div>
                  </div>
                 
                  <div class="text-center">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
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