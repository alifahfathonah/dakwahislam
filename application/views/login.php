<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle2/pages-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2017 16:09:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="<?php echo base_url()?>assets/img/dakwah.png" alt="logo" width="320" height="120" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
              <div class="panel-body">
                <form action="<?php echo base_url()?>login/proses_login" method="POST">
                  <div class="login-form">
                    <div class="form-group">
                      <input id="email" name ="email" type="email"   parsley-type="email" placeholder="Email" autocomplete="off" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" placeholder="Password" name="password" class="form-control" required="">
                    </div>

                    <!-- <div class="form-group row login-tools">
                      <div class="col-xs-6 login-remember">
                        <div class="be-checkbox">
                          <input type="checkbox" id="remember">
                          <label for="remember">Remember Me</label>
                        </div>
                      </div>
                      <div class="col-xs-6 login-forgot-password"><a href="#">Forgot Password?</a></div>
                    </div> -->

                    <div class="form-group row login-submit">
                      <div class="col-xs-12">
                        <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign in</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
        $('form').parsley();
      });
      
    </script>
  </body>

<!-- Mirrored from foxythemes.net/preview/products/beagle2/pages-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2017 16:09:10 GMT -->
</html>