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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
rel="stylesheet"
/>


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
                <form class="forms-sample" action="catlog.php" method="POST" enctype="multipart/form-data">
                 
                  
                  
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color: white;">Choose a Image for Prieview</label>
                    <div class="col-sm-9" style="color: white;">
                      <input type="file" class="form-control" id="exampleInputMobile" placeholder="Meta Keywords" name="Images">
                    </div>
                  </div>

                  <div class="form-group row" style="color: white;">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label" style="color: white;">Catelog</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="exampleInputMobile" name="pdf" style="color: white;">
                  
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" 
                    name="save">
                    Save
                    
                    </button>
                  </div>

                  <br>
                  <hr>
                 </form>
           
<?php

 include_once __DIR__.'/../Model/catlog.php';
 if(isset($_POST['save']))
 {
    //image uplod in server
    $imagename=$_FILES['Images']['name'];
    $imgtemp = $_FILES['Images']['tmp_name'];

    move_uploaded_file($imgtemp, '../Images/' . $imagename);
    //pdf uplod in server 
    $pdfname=$_FILES['pdf']['name'];
    $pdftemp=$_FILES['pdf']['tmp_name'];

    move_uploaded_file($pdftemp, '../Images/' . $pdfname);
   //db entry 
   $catobj = new catlog();

   $catobj->Images=$imagename;
   $catobj->pdf=$pdfname;

   $result=$catobj->insertdata();
   if($result)
   {
    echo "<script>window.location.href='catlog.php';</script>";
   }
 }
?>      
<div class="table-responsive">
                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th>Sr</th>
                          <th>Name</th>
                          <th>Creation Time</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         include_once __DIR__.'/../Model/catlog.php';
                         $proobj = new catlog();
                         $result=$proobj->selectalldata();
                         $sno=1;
                         while($row=mysqli_fetch_assoc($result))
                         {                       
                        ?>
                        <tr>
                          <td><?php echo $sno;?></td>
                          <td><?php echo "Catelog -> ".$sno++;?></td>
                          <td><?php echo $row['Created']?></td>
        
                        
                          <td>
                         <a href="catlog.php?pk=<?php echo $row['catlogID'];?>">  <button class="btn badge-outline-danger btn-sm rounded-2 " type="button" data-toggle="tooltip" data-placement="top" title="Delete">Delete &nbsp;<i class="fas fa-trash"></i></button></a> 
                        </td>
                          
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                  <?php
                    include_once __DIR__.'/../Model/catlog.php';
                    if(!empty($_GET['pk']))
                    {
                    $proobj = new catlog();
                    $result=$proobj->delete($_GET['pk']);
                    if($result)
                    {
                        echo "<script>window.location.href='catlog.php';</script>";
                    }
                    else{
                    echo "JAy";
                    }
                    }
                    ?>
                 
           
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

    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
    <!-- End custom js for this page -->
  </body>
</html>