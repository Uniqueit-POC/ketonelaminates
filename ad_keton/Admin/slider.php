<?php
session_start();
if(!isset($_SESSION['UserID']))
{
header('Location: login/logout.php');

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
    <link rel="stylesheet" href="assets/css/card.css">
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
              <h4 class="card-title">Slider</h4>
             <br>
              <form class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Upload Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="img[]" class="">
                            </div>
                    </div>
<br>
  <div class="form-group row">
    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sequence</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="exampleInputMobile" placeholder="Sequence">
    </div>
  </div>
<br>
  <div class="form-group row">
    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Discription</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="exampleInputMobile" placeholder="Discription">
    </div>
  </div>
<br>

  
              
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>    
                <br>
                
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="./assets/images/img1.jpg" alt="img1" >
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="./assets/images/img1.jpg" alt="img1" >
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="./assets/images/img1.jpg" alt="img1" >
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="./assets/images/img1.jpg" alt="img1" >
                        </div>
                    </div>
                </div>
                
              </form>
            </div>
            
            <br><br>
          
           
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



