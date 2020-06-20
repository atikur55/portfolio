<?php
session_start();
 ?>

<!doctype html>
<html lang="en">


<!-- Mirrored from coderthemes.com/highdmin/vertical/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Login Page</title>
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


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('../dashboard_assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="../dashboard_assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form action="login_post.php" method="post">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                        <?php if (isset($_SESSION['email_error'])) { ?>
                                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                          <strong><?= $_SESSION['email_error']; ?></strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <?php }
                                          unset($_SESSION['email_error'])
                                         ?>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                        <?php if (isset($_SESSION['password_error'])) { ?>
                                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                          <strong><?= $_SESSION['password_error']; ?></strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <?php }
                                          unset($_SESSION['password_error'])
                                         ?>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="../dashboard_assets/js/jquery.min.js"></script>
        <script src="../dashboard_assets/js/bootstrap.bundle.min.js"></script>
        <script src="../dashboard_assets/js/metisMenu.min.js"></script>
        <script src="../dashboard_assets/js/waves.js"></script>
        <script src="../dashboard_assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="../dashboard_assets/js/jquery.core.js"></script>
        <script src="../dashboard_assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/vertical/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
</html>
