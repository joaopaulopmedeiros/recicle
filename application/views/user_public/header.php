<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/icomoon/style.css">

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    
    <script src="<?= base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery-ui.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url();?>assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-2" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="<?php echo base_url();?>user_public/index" class="text-white h2 mb-0">Recicle</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="<?php echo base_url();?>user_public/index">Home</a></li>
                <li><a href="<?php echo base_url();?>user_public/desafios">Desafios</a></li>
                <li><a href="<?php echo base_url();?>user_public/contact">Contato</a></li>
                <li><a href="<?php echo base_url();?>user_public/about">Sobre</a></li>
                <li><a href="<?php echo base_url();?>user_public/login" class="btn btn-primary px-4 py-2 mt-lg-0 mt-3 text-white">Entrar</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>
