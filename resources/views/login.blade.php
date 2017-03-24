<!DOCTYPE html>
<html lang="en" data-textdirection="nuevoTemplate" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Autohispano Admin</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../../robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../../robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../../robust-assets/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../robust-assets/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../../robust-assets/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <!-- build:css robust-assets/css/vendors.min.css-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css-rtl/bootstrap.css">
    <!-- /build-->
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <!-- build:css robust-assets/css/app.min.css-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css-rtl/bootstrap-robust.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css-rtl/custom-rtl.css">
    <!-- /build-->
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

    <!-- END PRELOADER-->
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1"><img src="../../../robust-assets/images/logo/logo.png" alt="branding logo"></div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login</span></h6>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <form class="form-horizontal form-simple" method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <fieldset class="form-group has-feedback has-icon-left mb-0">
                            <input type="text" class="form-control form-control-lg input-lg" id="txtCorreo" placeholder="Your Username" required>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group has-feedback has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" id="txtPass" placeholder="Enter Password" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group row">
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                <fieldset>
                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                    <label for="remember-me"> Remember Me</label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="">
                    <p class="float-sm-left text-xs-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>
                    <p class="float-sm-right text-xs-center m-0">New to Robust? <a href="register-simple.html" class="card-link">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <!-- build:js robust-assets/js/vendors.min.js-->
    <script src="../../../robust-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/menu/jquery.mmenu.all.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/extensions/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/forms/tags/form-field.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/jquery-sliding-menu.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/headroom.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/sliders/slick/slick.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/screenfull.min.js" type="text/javascript"></script>
    <!-- /build-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../robust-assets/js/plugins/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- build:js robust-assets/js/app.min.js-->
    <script src="../../../robust-assets/js/core/robust-menu.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/core/robust.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/components/ui/fullscreenSearch.js" type="text/javascript"></script>
    <!-- /build-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../robust-assets/js/components/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>