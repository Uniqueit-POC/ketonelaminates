<?php
include_once __DIR__.'/ad_keton/Model/contact.php';
$conobj = new contact();
$result=$conobj->selectalldata();
$row=mysqli_fetch_assoc($result);
echo "
<!-- ======= Footer ======= -->
<footer id='footer' class='footer'>

  <div class='footer-content position-relative'>
    <div class='container'>
      <div class='row'>

        <div class='col-lg-4 col-md-6'>
          <div class='footer-info'>
            <h3><a href='Home' > Ketone Laminates </a></h3>
            <p>
              
              <strong>Phone: &nbsp;</strong>".$row['ContactNumber1']."<br>
               <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>".$row['ContactNumber2']."<br>
              <strong>Email:&nbsp;".$row['Email']."</strong>  <br>
              <strong>Email:&nbsp;".$row['Email2']."</strong>  <br>

            </p>
            <div class='social-links d-flex mt-3'>
            <a href='".$row['WhatsAppLink']."' class='d-flex align-items-center justify-content-center'><i class='bi bi-whatsapp'></i></a>
              <a href='".$row['FacebookLink']."' class='d-flex align-items-center justify-content-center'><i class='bi bi-facebook'></i></a>
              <a href='".$row['InstagramLink']."' class='d-flex align-items-center justify-content-center'><i class='bi bi-instagram'></i></a>
             
            </div>
          </div>
        </div><!-- End footer info column-->

        <div class='col-lg-2 col-md-3 footer-links'>
          <h4 >Useful Links</h4>
          <ul>
            <li><a href='Home'>Home</a></li>
            <li><a href='About'>About us</a></li>
            <li><a href='Technical'>  Specification          </a></li>
            <li><a href='Contact'>Contact</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class='col-lg-2 col-md-3 footer-links'>
          <h4>Our Catelogs</h4>
          <ul>
          <li><a href='Kiwi-Decore'>Kiwi Decor </a></li>
          <li><a href='Ripple'>Ripple </a></li>
          <li><a href='Plain-Color'>Plain Color</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class='col-lg-4 col-md-6 footer-links'>
        <img class='img-fluid' alt='Make In India' src='assets/img/Make-in-ndia-Logo-PNG-HD-Transparent.png' loading='lazy' />
        </div><!-- End footer links column-->

        

      </div>
    </div>
  </div>

  <div class='footer-legal text-center position-relative'>
    <div class='container'>
      <div class='copyright'>
        &copy; Copyright <strong><span><a href='Home' >Ketone Laminates</a></span></strong>. All Rights Reserved
      </div>
      <div class='credits'>
        
      </div>
    </div>
  </div>

</footer>
<!-- End Footer -->
";
?>