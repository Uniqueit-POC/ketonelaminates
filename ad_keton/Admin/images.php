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
  <!-- header  -->
  <?php
  include "header.php";
  ?>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="card-body">

        <h4 class="card-title">Images</h4>
        <br>
        <div class="form-group row">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product </label>
          <div class="col-sm-9">

            <button class="btn btn-outline-secondary dropdown-toggle show" type="button" id="dropdownMenuOutlineButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Select Product</button>
            <div class="dropdown-menu show" aria-labelledby="dropdownMenuOutlineButton2" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 30px, 0px);">
              <?php
              include_once __DIR__ . '/../Model/product.php';
              $proobj = new product();
              $result = $proobj->selectalldata();
              $sno = 1;
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <a class="dropdown-item" href="images.php?pk=<?php echo $row['ProductID']; ?>"><?php echo $row['Name']; ?></a>

              <?php } ?>


            </div>

          </div>
        </div>
        <br>
        <br>

        <div class="row">
          <?php
          if (!empty($_GET['pk'])) {
          ?>
            <?php
            include_once __DIR__ . '/../Model/images.php';
            $proobj = new images();
            $result = $proobj-> selectbyproductid($_GET['pk']);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="col-4 pb-3">

                <div class="card">

                  <img src="<?php echo '../Images/'.$row['Path']; ?>" alt="img1">

                </div>

              </div>

          <?php }
           ?>

        </div>

        <br>
        <br>
        <!-- image uplod code  -->
        <?php
        if (isset($_POST['save'])) {
          include_once __DIR__ . '/../Model/images.php';
          include_once __DIR__ . '/../Model/unique.php';
          $uniobj = new unique();
          $imgname = $_FILES['image']['name'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $imgobj = new images();
          move_uploaded_file($file_tmp, '../Images/' . $imgname);
          $imgobj->Path = $imgname;
          $imgobj->Description = $_POST['Description'];
          $imgobj->ProductID = $_GET['pk'];
          $imgobj->UserID = 1;
          $imgobj->insertdata();
          $id=$_GET['pk'];
          echo "<script>window.location.href='images.php?pk=$id';</script>";
          
    
        }
        ?>
        <form action="images.php?pk=<?php echo $_GET['pk']; ?>" Method="POST" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Upload Image</label>
            <div class="col-sm-9">
              <input type="file" name="image" class="">
            </div>
          </div>
          <br>
          <br>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Discription</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="exampleInputMobile" placeholder="Discription" name="Description">
            </div>
          </div>
          <br>



          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          </div>


        </form>
        <?php } ?>
      </div>

      <br><br>


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
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