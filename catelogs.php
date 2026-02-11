<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Our Products - Ketone Laminates</title>
  <meta content="Ketone Laminate Our Products " name="description">
  <meta content=" Ketone Laminates Morbi | Our Products |" name="keywords">

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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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

        <h2>Our Products</h2>
        <ol>
          <li><a href="Home">Home</a></li>
          <li>Our Products</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

         

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
            include_once __DIR__.'/ad_keton/Model/catlog.php';
            $conobj = new catlog();
            $result=$conobj->selectalldata();
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <a href="https://ketonelaminates.com/Kiwi-Decor" title="More Details" class="details-link"><img src="ad_keton/Images/<?php echo $row["Images"] ?>" class="img-fluid" alt=""></a>
                
                <div class="portfolio-info">
                  
                  <a href="ad_keton/Images/<?php echo $row["pdf"] ?>" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
              
            </div><!-- End Projects Item -->
            <?php } ?>
          </div><!-- End Projects Container -->
        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

  <?php
    include "footer.php";
    ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!--<div id="preloader"></div>-->
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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