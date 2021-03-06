<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?php echo $title; ?></title>
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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    
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
    <header class="site-navbar transparent p-2" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-4 col-lg-2">
            <a href="<?php echo base_url();?>user_cidadao/index" class="mb-0">
              <img height="24" src="<?php echo base_url();?>assets/images/icons/recicle-green.svg" alt="Recicle">
            </a>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="<?php echo base_url();?>user_cidadao/index">Home</a></li>
                <li><a href="<?php echo base_url();?>user_cidadao/desafios">Desafios</a></li>
                <li><a href="<?php echo base_url();?>user_cidadao/contact">Contato</a></li>
                <li><a href="<?php echo base_url();?>user_cidadao/about">Sobre</a></li>
                <li class="dropdown" style="cursor: pointer;">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-uppercase">Olá, <?php echo $this->session->cidadao['nome']; ?></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="<?php echo base_url();?>user_cidadao/meusdesafios" class="dropdown-item">Meus desafios</a>
                    <a href="<?php echo base_url();?>user_cidadao/minhaConta" class="dropdown-item">Minha conta</a>
                    <a href="<?php echo base_url();?>sessao/logout" class="dropdown-item">Sair</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>

          <div class="col-8 d-flex d-lg-none ml-md-0 py-3 justify-content-end" style="position: relative;">
            <a href="<?php echo base_url();?>user_cidadao/index" class="ml-3">
              <img height="24" src="<?php echo base_url();?>assets/images/icons/menu-home.svg" alt="Home">
            </a>
            <a href="<?php echo base_url();?>user_cidadao/desafios" class="ml-3">
              <img height="24" src="<?php echo base_url();?>assets/images/icons/menu-desafios.svg" alt="Desafios">
            </a>
            <a href="<?php echo base_url();?>user_cidadao/contact" class="ml-3">
              <img height="24" src="<?php echo base_url();?>assets/images/icons/menu-contato.svg" alt="Contato">
            </a>
            <a href="<?php echo base_url();?>user_cidadao/about" class="ml-3">
              <img height="24" src="<?php echo base_url();?>assets/images/icons/menu-sobre.svg" alt="Sobre">
            </a>

            <div class="dropdown" style="cursor: pointer;">
              <a class="ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img height="24" src="<?php echo base_url();?>assets/images/icons/menu-login.svg" alt="Entrar">
              </a>

              <div class="dropdown-menu dropdown-menu-right text-uppercase" aria-labelledby="dropdownMenuButton">
                <a href="<?php echo base_url();?>user_cidadao/meusdesafios" class="dropdown-item">Meus desafios</a>
                <a href="<?php echo base_url();?>user_cidadao/minhaConta" class="dropdown-item">Minha conta</a>
                <a href="<?php echo base_url();?>sessao/logout" class="dropdown-item">Sair</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
