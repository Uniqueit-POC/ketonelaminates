<?php
 include_once __DIR__.'/ad_keton/Model/contact.php';
 $conobj = new contact();
 $result=$conobj->selectalldata();
 $row=mysqli_fetch_assoc($result);
 include_once __DIR__.'/ad_keton/Model/feedback.php';
 $feedbackobj = new feedback();
 if(isset($_POST['save']))
 {
  $feedbackobj->Name=$_POST['Name'];
  $feedbackobj->Email=$_POST['Email'];
  $feedbackobj->Description=$_POST['Description'];
  $feedbackobj->ContactNumber=$_POST['ContactNumber'];
  $feedbackobj->Subject=$_POST['Subject'];
  $result=$feedbackobj->insertdata();
  if($result)
  {
    echo "<script>window.location.href='Contact';</script>";


  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Ketone Laminates</title>
  <meta content="Ketone Laminate Contact Morbi " name="description">
  <meta content=" Ketone Laminates Morbi | Contact |" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/team/favicon-32x32.png" rel="icon">
  <link href="assets/img/team/apple-icon-72x72.png" rel="apple-touch-icon">
  <style>
    ::selection {
      background: #feb900;
      color: #000;;
    } 
          #google_translate_element select{
         background:#ffffffb8;
         color: #000;
         border: none;
         border-radius:3px;
         padding:6px 8px
         
         }
         
         /*google translate link | logo */
           .goog-logo-link,.goog-te-gadget span,div#goog-gt-{
           display:none!important;
          
           }
         .goog-te-gadget{
           color:transparent!important;
           font-size:1px !important;
            margin-left: 15px !important;
         }
         
         /* google translate banner-frame */
         
         .goog-te-banner-frame{
         display:none !important;
         }
         
         #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
        .goog-text-highlight { background: none !important; box-shadow: none !important;}
  ::selection {
      background: #feb900;
      color: #000;;
    } 
    .goog-te-banner-frame{
      display: none !important;
      margin-top: -20px;
    }
    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-simple img {
      display: none !important;
      }
       #goog-gt-tt, .goog-te-balloon-frame,div#goog-gt-{display: none !important;}

.goog-text-highlight { background: none !important; box-shadow: none !important;}
      .goog-tooltip {
      display: none !important;
      }
      .goog-tooltip:hover {
      display: none !important;
      }
      
      .goog-text-highlight {
      background-color: transparent !important;
      border : none ! important;
      box-shadow: none ! important;
      }
      body {
      top: 0px !important;
      }
   </style>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php
    include "header.php";
    ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('https://images.pexels.com/photos/6585598/pexels-photo-6585598.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="Home">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $row['Address']?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo $row['Email']?></p> 
              <p><?php echo $row['Email2']?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p><?php echo $row['ContactNumber1']?></p>
              <p><?php echo $row['ContactNumber2']?></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe
              src="<?php echo $row['GoogleMapLink']?>"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen loading="lazy"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <style>
              .get-started .php-email-form {
  background: #fff;
  padding: 30px;
  height: 100%;
}
.php{
  background: #fff;
  padding: 30px;
  height: 100%;
}
@media (max-width: 575px) {
  .get-started .php-email-form {
    padding: 20px;
  }
  .php{
    
    padding: 20px;
  }
}

.get-started .php-email-form h3 {
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.php h3{
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.php p{
  font-size: 14px;
  margin-bottom: 20px;
}
.get-started .php-email-form p {
  font-size: 14px;
  margin-bottom: 20px;
}

.get-started .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.get-started .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.get-started .php-email-form input,
.get-started .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}
.php input{
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}
.php input:focus,
.php textarea:focus {
  border-color: var(--color-primary);
}
.get-started .php-email-form input:focus,
.get-started .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.get-started .php-email-form input {
  padding: 12px 15px;
}
.php textarea{

  padding: 12px 15px;
}
              </style>
            <form action="Contact"  method="POST"  class="php">
              <div class="row gy-4">
                <div class="col-lg-6 form-group mt-2">
                  <input type="text" name="Name" class="form-control" id="Name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group mt-2">
                  <input type="email" class="form-control" name="Email" id="Email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-2">
                <input type="text" class="form-control" name="Subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-2">
                <input type="text" class="form-control" name="ContactNumber" placeholder="Contact Number" required>
              </div>
              <div class="form-group mt-2">
                <textarea class="form-control" name="Description" rows="5" placeholder="Message" required></textarea>
              </div>
              <style>
                .bt{
                  background: var(--color-primary);
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
                }
              </style>
              <div class="text-center mt-2"><button type="submit" class="bt" style="background-color:rgba(254, 185, 0, 0.8);" name="save">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
    include "footer.php";
    ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <script type="text/javascript">
   function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
    </script>
  <script>
      // this function will be called when a button is clicked
      const changeLang = (languageCode) => {
       document.documentElement.setAttribute("lang", languageCode);
      };
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>