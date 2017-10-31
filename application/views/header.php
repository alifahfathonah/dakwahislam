<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codepassenger.com/html/bigshow/tv-show.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2017 04:06:15 GMT -->
<head>
    <!-- Site information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title ?></title>
    <meta name="description" content="Bigshow is a template to jump start campaigning your various kind of movie or tv show">

    <!-- External CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets_front/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets_front/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets_front/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets_front/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets_front/css/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets_front/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets_front/css/responsive.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url()?>assets_front/images/template/dfavicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets_front/images/template/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets_front/images/template/d72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets_front/images/template/d114.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url()?>assets_front/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url()?>assets_front/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="lds-css ng-scope">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Top Header -->
    <header class="topbar text-white" id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <p class="topbar-intro">
                        <marquee>Assalamualaikum Warahmatullahi Wabarakatuh, Selamat datang di website DAKWAH ISLAM saudaraku.</marquee>
                    </p>
                </div>
                <!-- <div class="col-lg-6 col-sm-4">
                    <div class="topbar-right-btns">
                        <a class="btn" href="login.html">Log In</a>
                        <a class="btn" href="signup.html">Register</a>
                    </div>
                </div> -->
            </div>
        </div>
    </header>
    <!-- Top Header End -->

    <!-- Main Header -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url()?>assets/img/dakwah.png" width="250px" alt="Site Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <form class="navbar-form navbar-left">
                    <select name="type">
                        <option value="movie" selected>Movies</option>
                        <option value="tv">TV</option>
                    </select>
                    <input type="search" name="searchinput" required>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tv-show.html">Beranda</a></li>
                    <li><a href="tv-show.html">Film Islam</a></li>
                    <li><a href="tv-show.html">Dakwah Islam</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main Header End -->

    <!-- Page Header 
    <div class="page-header">
   <!--  <img src="<?php echo base_url()?>assets_front/images/bg/page-header.png" width="100%"> 
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Latest TV Show</h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->