<?php
session_start();
 ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../dashboard_assets/images/favicon.ico">

        <!-- App css -->
        <link href="../dashboard_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../dashboard_assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../dashboard_assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../dashboard_assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../dashboard_assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="../dashboard_assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="../dashboard_assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="../uploads/users/<?= $_SESSION['photo'] ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?= $_SESSION['name'] ?></a> </h5>
                        <p class="text-muted"><?= $_SESSION['email'] ?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="../dashboard/dashboard.php">
                                    <i class="fi-air-play"></i><span> Home </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                              <?php if ($_SESSION['role']==1){ ?>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../users/register.php">Add User</a></li>
                                    <li><a href="../users/all_users.php">View User</a></li>
                                    <li><a href="../users/trash.php">Trash</a></li>
                                </ul>
                              <?php } elseif ($_SESSION['role']==2) { ?>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../users/all_users.php">View User</a></li>
                                    <li><a href="../users/trash.php">Trash</a></li>
                                </ul>
                              <?php } else { ?>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../users/all_users.php">View User</a></li>
                                </ul>
                              <?php } ?>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Header </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../header_part/header_info.php">Header Form</a></li>
                                    <li><a href="../header_part/header_view.php">View Header</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="widgets.html">
                                    <i class="fi-command"></i> <span> Widgets </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> About </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../about_part/about_info.php">About Form</a></li>
                                    <li><a href="../about_part/about_view.php">View About</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Inbox </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                  
                                    <li><a href="../contact_part/contact_view.php">View Message</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span> Service </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../service_part/service_info.php">Service Form</a></li>
                                    <li><a href="../service_part/service_view.php">Service View</a></li>

                                </ul>
                            </li>

                             <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span> Testimonial </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../testimonial_part/testimonial_info.php">Testimonial Form</a></li>
                                    <li><a href="../testimonial_part/testimonial_view.php">Testimonial View</a></li>
                                </ul>
                            </li>

                             <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span> Experience  </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../experience_part/experience_info.php">Experience Form</a></li>
                                    <li><a href="../experience_part/experience_view.php">Experience View</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Education </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../education_part/education_info.php">Education Form</a></li>
                                    <li><a href="../education_part/education_view.php">Education View</a></li>
                            </li>

                            <!-- <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Inbox </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../contact_part/contact_view.php">View Message</a></li></li>
                            </li> -->

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-logout.html">Logout</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <?php 
                                    require '../db_connect.php';
                                    $select = "SELECT COUNT(*) as message FROM contacts WHERE status = 0";
                                    $select_result = mysqli_query($connect,$select);
                                    $after_assoc_message = mysqli_fetch_assoc($select_result);
                                     ?>
                                    <!-- <span class="badge badge-custom badge-pill noti-icon-badge">6</span> -->
                                    <span class="badge badge-custom badge-pill noti-icon-badge"><?= $after_assoc_message['message'] ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                    </div>
                                  

                                    <div class="slimscroll" style="max-height: 230px;">
                                <?php
                                    $select_message = "SELECT * FROM contacts WHERE status = 0";
                                    $select_message_result = mysqli_query($connect,$select_message);

                                ?>
                                       <?php foreach ($select_message_result as $contact_message): ?>

                                       
                                            <a href="../contact_part/contact_single_view.php?id=<?= $contact_message['id'] ?>" class="dropdown-item notify-item bg-dark">
                                                <div class="notify-icon"><img src="../dashboard_assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                                <p class="notify-details"><?= $contact_message['name'] ?></p>
                                                <p class="text-muted font-13 mb-0 user-msg"><?= $contact_message['message'] ?></p>
                                            </a> 
                               
                                    <!--     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="../dashboard_assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details"><?= $contact['name'] ?></p>
                                            <p class="text-muted font-13 mb-0 user-msg"><?= $contact['message'] ?></p>
                                        </a> -->
                                       <?php endforeach ?>
                                       
                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="../uploads/users/<?= $_SESSION['photo'] ?>" alt="user" class="rounded-circle"> <span class="ml-1"><?= $_SESSION['name'] ?><i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="../users/profile.php" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="../users/logout.php" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Highdmin admin panel !</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->
