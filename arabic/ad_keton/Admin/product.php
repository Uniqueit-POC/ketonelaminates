<?php
session_start();
if(!isset($_SESSION['UserID']))
{
header('Location: login/logout.php');

}
?>
<?php
 include_once __DIR__.'/../Model/product.php';
 $proobj = new product();
 //for select by pk 
 if(!empty($_GET['pk'])) 
{ 
  $result=$proobj->selectbypk($_GET['pk']);
  $row=mysqli_fetch_assoc($result);
}
 if(isset($_POST['save']))
 {
  $proobj->Name=$_POST['Name'];
  $proobj->MetaKeywords=$_POST['MetaKeywords'];
  $proobj->Description=$_POST['Description'];
  $proobj->Sequence=$_POST['Sequence'];;
  $proobj->UserID=1;
  $result=$proobj->insertdata();
  if($result)
  {
    header('Location: productdetails.php');

  }
  else{
    //pop up alret
  }
 }

 if(isset($_POST['edit']))
 {
  $proobj->Name=$_POST['Name'];
  $proobj->MetaKeywords=$_POST['MetaKeywords'];
  $proobj->Description=$_POST['Description'];
  $proobj->Sequence=$_POST['Sequence'];;
  $proobj->UserID=1;
  $result1=$proobj->updatedata($_POST['pk']);
  if($result1)
  {
    header('Location: productdetails.php');
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
                <h4 class="card-title">Product</h4>
               <br>
                <form class="forms-sample" action="product.php" method="POST">
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Product Name" name="Name" value="<?php echo $row['Name'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Description" name="Description" value="<?php echo $row['Description'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sequence</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="exampleInputMobile" placeholder="Sequence" name="Sequence" value="<?php echo $row['Sequence'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Meta Keywords</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputMobile" placeholder="Meta Keywords" name="MetaKeywords" value="<?php echo $row['MetaKeywords'];?>">
                      <input type="hidden" class="form-control" id="exampleInputMobile" placeholder="Meta Keywords" name="pk" value="<?php echo $row['ProductID'];?>">
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

                  <br>
                  <hr>
                 </form>
                 


                 
           
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