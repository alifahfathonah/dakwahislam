<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle2/pages-blank-header.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2017 16:09:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php foreach($logofav as $fav) :?>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/setting_web/<?=$fav['gambar'] ?>">
    <?php endforeach ?>

    <title><?php echo $judul ?></title>
    <link href="<?php echo base_url()?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lib/summernote/summernote.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><?php foreach($logo as $l) :?><br>
           &nbsp;&nbsp; <img src="<?php echo base_url()?>assets/setting_web/<?=$l['gambar'] ?>" width="210px" height="25px">
          <?php endforeach ?>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="<?php echo base_url()?>assets/img/avatarcm.png" alt="Avatar"><span class="user-name"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><h5><?php echo $fullname ?></h5></div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                  <li><a href="<?php echo base_url()?>Login/logout"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"></div>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Blank Page</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li><a href="<?php echo base_url()?>Superadmin"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li><a href="<?php echo base_url()?>Superadmin/read_video"><i class="icon mdi mdi-collection-video"></i><span>Video</span></a>
                  </li>

                  <li><a href="<?php echo base_url()?>Superadmin/read_kategori"><i class="icon mdi mdi-assignment"></i><span>Kategori</span></a>
                  </li>
                  

                  <li><a href="<?php echo base_url()?>user"><i class="icon mdi mdi-account-box"></i><span>User</span></a>
                  </li>
                  <!--
                  <li><a href="<?php echo base_url()?>settingpagestentang"><i class="icon mdi mdi-city"></i><span>Tentang</span></a>
                  </li>

                  <li><a href="<?php echo base_url()?>pengaturan"><i class="icon mdi mdi-settings"></i><span>Pengaturan</span></a>
                  </li>

                  <li><a href="<?php echo base_url()?>log"><i class="icon mdi mdi-shield-check"></i><span>Log</span></a>
                  </li>
                  -->
                     
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title"><?php echo $page ?></h2>


           <div role="alert" class="alert alert-primary alert-icon alert-dismissible">
                    <div class="icon"><span class="mdi mdi-info-outline"></span></div>
                    <div class="message">
                      <span aria-hidden="true" ></span><strong>Info!</strong><?php echo $info ?>
                  </div>
        </div>  