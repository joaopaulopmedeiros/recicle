<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/icomoon/style.css">

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
          
          <div class="col-11 col-md-2">
            <h1 class="mb-0"><a href="<?php echo base_url();?>user_cooperativa/index" class="text-white h2 mb-0">Recicle</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-md-block">
            <nav class="d-flex site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav ml-auto d-none d-md-block">
                <li class="active"><a href="<?php echo base_url();?>user_cooperativa/index">Home</a></li>
                <li><a href="<?php echo base_url();?>user_cooperativa/desafios">Desafios</a></li>
                <li><a href="<?php echo base_url();?>user_cooperativa/contact">Contato</a></li>
                <li><a href="<?php echo base_url();?>user_cooperativa/about" class="mb-4 mb-md-0">Sobre</a></li>
              </ul>

              <div class="btn-group">
                <button type="button" class="dropdown-toggle bg-transparent border-0 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-user-circle"></i>
                </button>
  
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-item-text">Nome do ecoponto</div>
                  <div class="dropdown-item-text">ecoponto@email.com</div>
                  <hr style="border-top: 2px solid #1EBFA1">
                  <a href="desafios.html" class="dropdown-item">Meus desafios</a>
                  <a href="<?php echo base_url();?>user_cidadao/minhaConta" class="dropdown-item">Minha conta</a>
                  <a href="#" class="dropdown-item">Sair</a>
                </div>
              </div>
            </nav>
          </div>


          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <nav class="d-md-none">
            <ul class="site-menu js-clone-nav mx-auto d-none">
              <li class="dropdown-item-text pt-4" style="border-top: 2px solid #1EBFA1">Nome do ecoponto</li>
              <li class="dropdown-item-text">ecoponto@email.com</li>
              <li><a href="desafios.html" class="dropdown-item">Meus desafios</a></li>
              <li><a href="my-account.html" class="dropdown-item">Minha conta</a></li>
              <li><a href="#" class="dropdown-item">Sair</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>