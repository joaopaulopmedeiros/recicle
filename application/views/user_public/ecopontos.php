<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Ecopontos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="<?=base_url()?>assets/template/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/template/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/template/css/style.css">
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
    
    <header class="site-navbar py-2" role="banner" style="background-color: #333333;">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0">Recicle</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li><a href="desafios.php">Desafios</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="login.php" class="btn btn-primary px-4 py-2 text-white">Entrar</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row justify-content-center my-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Ecopontos</h2>
          </div>
        </div>
      </div>
      

      <div class="row m-0">
        <div class="col-md-3 border filtro">
          <div class="text-center mt-4 mb-5">
            <h6 class="text-primary font-weight-bold text-uppercase">Filtrar busca</h6>
          </div>

          <form action="#">
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text icon-search rounded-0" id="search"></span>
              </div>
              <input type="text" class="form-control" placeholder="Pesquisar endereço..." aria-label="Search" aria-describedby="search">
            </div>

            <div class="mb-4">
              <label for="lixo">Tipo de lixo</label>
              <select id="lixo" class="form-control">
                <option selected>Selecionar...</option>
                <option>Papel e papelão</option>
                <option>Óleo de cozinha</option>
                <option>Lixo eletrônico</option>
                <option>Pilhas e baterias</option>
                <option>Metal</option>
                <option>Vidro</option>
              </select>
            </div>

            <div class="mb-4">
              <label for="bonificacao">Tipo da bonificação</label>
              <select id="bonificacao" class="form-control">
                <option selected>Selecionar...</option>
                <option>Em dinheiro</option>
                <option>Spotify</option>
                <option>Netflix</option>
              </select>
            </div>
          </form>
        </div>

        <div class="col-md-9 px-0">
          <!--Google map-->
          <div id="map-container-google-1" class="z-depth-1-half map-container bg-white" style="height: 500px;">
            <iframe src="https://maps.google.com/maps?q=natal&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <!--Google Maps-->
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Desafios Disponíveis</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?=base_url()?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?=base_url()?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?=base_url()?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <p class="mb-0"><a href="desafios.php" class="btn btn-primary py-3 px-5 text-white">Mais desafios</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-3">
            <h2 class="mb-4">Recicle</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
          </div>

          <div class="col-md-2">
            <h2 class="mb-4">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="login.php">Entrar</a></li>
              <li><a href="desafios.php">Desafios</a></li>
              <li><a href="contact.php">Contato</a></li>
              <li><a href="about.php">Sobre</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2 class="mb-4">Redes Sociais</h2>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          </div>
        </div>

        <div class="row mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="<?=base_url()?>assets/template/js/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/jquery-ui.js"></script>
  <script src="<?=base_url()?>assets/template/js/popper.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/jquery.countdown.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/jquery.magnific-popup.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/bootstrap-datepicker.min.js"></script>
  <script src="<?=base_url()?>assets/template/js/aos.js"></script>

  <script src="<?=base_url()?>assets/template/js/main.js"></script>
    
  </body>
</html>