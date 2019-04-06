<?php
  include '../lib/session.php';
    Session::checkSession();
  include '../lib/config.php';
  include '../lib/database.php';
  include '../lib/format.php';

  $db = new Database();
  $fm = new Format();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editing Image BD</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="favicon.png">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="img/jjj.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">DR. HABIB</h2><span class="text-uppercase">Woner & CEO</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li class="active"><a href="index.php"> <i class="icon-home"></i><span>Home</span></a></li>
            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Slider</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li> <a href="add-slider.php">Add New</a></li>
                <li> <a href="all-slider.php">All Sliders</a></li>
              </ul>
            </li>
            <li> <a href="#pages-nav" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Section Two</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav" class="collapse list-unstyled">
                <li> <a href="add-section.php">Add Section</a></li>
                <li> <a href="section-list.php">Section List</a></li>
              </ul>
            </li>

            <li> <a href="#pages-nav-service" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Services</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-service" class="collapse list-unstyled">
                <li> <a href="add-service.php">Add Service</a></li>
                <li> <a href="service-list.php">Services List</a></li>
              </ul>
            </li>

            <li> <a href="#pages-nav-service-image" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Services Images</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-service-image" class="collapse list-unstyled">
                <li> <a href="add-service-image.php">Add Service Image</a></li>
                <li> <a href="service-image-list.php">Service Images List</a></li>
              </ul>
            </li>

            <li> <a href="#pages-nav-service-start" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Start Content</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-service-start" class="collapse list-unstyled">
                <li> <a href="add-content.php">Add Start Content</a></li>
                <li> <a href="content-list.php">Start Content List</a></li>
              </ul>
            </li>

            <li> <a href="#pages-nav-service-pages" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Pages</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-service-pages" class="collapse list-unstyled">
                <li> <a href="add-pages.php">Add Pages</a></li>
                <li> <a href="content-list.php">Pages List</a></li>
              </ul>
            </li>

            <li> <a href="#pages-nav-service-pricing" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Pricing</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-service-pricing" class="collapse list-unstyled">
                <li> <a href="pricing.php">Add Price</a></li>
                <li> <a href="price-list.php">All Prices List</a></li>
              </ul>
            </li>

            <li> <a href="#pages-nav-service-trial" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Free Trial</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-service-trial" class="collapse list-unstyled">
                <li> <a href="all-orders.php">All Orders</a></li>
              </ul>
            </li>

            <li> <a href="#pages-nav-service-contact" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Contact Messages</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-service-contact" class="collapse list-unstyled">
                <li> <a href="contact-message.php">All Messages</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>EDITING </span><strong class="text-primary"> IMAGE BD</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <li class="nav-item"><a href="logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>