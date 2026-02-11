<?php
echo "
    <div class='container-scroller'>
      <div class='row p-0 m-0 proBanner' id='proBanner'>
        <div class='col-md-12 p-0 m-0'>
          <div class='card-body card-body-padding d-flex align-items-center justify-content-between'>
            <div class='ps-lg-1'>
              <div class='d-flex align-items-center justify-content-between'>
                
               
              </div>
            </div>
            <div class='d-flex align-items-center justify-content-between'>
             
              <button id='bannerClose' class='btn border-0 p-0'>
                <i class='mdi mdi-close text-white me-0'></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.php -->
      <nav class='sidebar sidebar-offcanvas' id='sidebar'>
        <div class='sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top'>
          <a class='sidebar-brand brand-logo' href='index.php'><img src='assets/images/logo.svg' alt='logo' /></a>
          <a class='sidebar-brand brand-logo-mini' href='index.php'><img src='assets/images/logo-mini.svg' alt='logo' /></a>
        </div>
        <ul class='nav'>
          <li class='nav-item profile'>
            <div class='profile-desc'>
              <div class='profile-pic'>
                <div class='count-indicator'>
                  <img class='img-xs rounded-circle ' src='assets/images/faces/face15.jpg' alt=''>
                  <span class='count bg-success'></span>
                </div>
                <div class='profile-name'>
                  <h5 class='mb-0 font-weight-normal'".$_SESSION["Name"]."</h5>
                  <span>Gold Member</span>
                </div>
              </div>

              <div class='dropdown-menu dropdown-menu-right sidebar-dropdown preview-list' aria-labelledby='profile-dropdown'>    
              </div>
            </div>
          </li>
          <li class='nav-item nav-category'>
            <span class='nav-link'>Navigation</span>
          </li>
          <li class='nav-item menu-items'>
            <a class='nav-link' href='catlog.php'>
              <span class='menu-icon'>
                <i class='mdi mdi-speedometer'></i>
              </span>
              <span class='menu-title'>Catelogs</span>
            </a>
          </li>
          <li class='nav-item menu-items'>
            <a class='nav-link' href='contactdetails.php'>
              <span class='menu-icon'>
                <i class='mdi mdi-speedometer'></i>
              </span>
              <span class='menu-title'>Contact</span>
            </a>     
            <li>
            <li class='nav-item menu-items'>
            <a class='nav-link' href='feedback.php'>
              <span class='menu-icon'>
                <i class='mdi mdi-speedometer'></i>
              </span>
              <span class='menu-title'>Feedback </span>
            </a>     
            <li>
          <li class='nav-item menu-items'>
          <a class='nav-link' href='user.php'>
            <span class='menu-icon'>
              <i class='mdi mdi-file-document-box'></i>
            </span>
            <span class='menu-title'>User </span>
          </a>
        </li>         
        <li class='nav-item menu-items'>
          <a class='nav-link' href='userdetails.php'>
            <span class='menu-icon'>
              <i class='mdi mdi-file-document-box'></i>
            </span>
            <span class='menu-title'>User Details</span>
          </a>
        </li>          
       
        </ul>
      </nav>
      <!-- partial -->
      <div class='container-fluid page-body-wrapper'>
        <!-- partial:partials/_navbar.php -->
        <nav class='navbar p-0 fixed-top d-flex flex-row'>
          <div class='navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center'>
            <a class='navbar-brand brand-logo-mini' href='index.php'><img src='assets/images/logo-mini.svg' alt='logo' /></a>
          </div>
          <div class='navbar-menu-wrapper flex-grow d-flex align-items-stretch'>
            <button class='navbar-toggler navbar-toggler align-self-center' type='button' data-toggle='minimize'>
              <span class='mdi mdi-menu'></span>
            </button>
            
            <ul class='navbar-nav navbar-nav-right'>
              <li class='nav-item dropdown'>
                <a class='nav-link' id='profileDropdown' href='#' data-bs-toggle='dropdown'>
                  <div class='navbar-profile'>
                    <img class='img-xs rounded-circle' src='assets/images/faces/face15.jpg' alt=''>
                    <p class='mb-0 d-none d-sm-block navbar-profile-name'".$_SESSION["Name"]."</p>
                    <i class='mdi mdi-menu-down d-none d-sm-block'></i>
                  </div>
                </a>
                <div class='dropdown-menu dropdown-menu-right navbar-dropdown preview-list' aria-labelledby='profileDropdown'>
                  <h6 class='p-3 mb-0'>Profile</h6>
                  <div class='dropdown-divider'></div>
                
                  <div class='dropdown-divider'></div>
                  <a class='dropdown-item preview-item' href='login/logout.php'>
                    <div class='preview-thumbnail'>
                      <div class='preview-icon bg-dark rounded-circle'>
                        <i class='mdi mdi-logout text-danger'></i>
                      </div>
                    </div>
                
                    <div class='preview-item-content'>
                      <p class='preview-subject mb-1'>Log out</p>
                    </div>
                  </a>

              </li>
            </ul>
            <button class='navbar-toggler navbar-toggler-right d-lg-none align-self-center' type='button' data-toggle='offcanvas'>
              <span class='mdi mdi-format-line-spacing'></span>
            </button>
          </div>
        </nav>";
        ?>