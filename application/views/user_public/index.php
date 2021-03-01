    <div class="site-blocks-cover" style="background-image: url('<?php echo base_url();?>assets/images/illustrations/capa_bg.svg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-start align-items-md-center">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mt-4 mt-md-0 mb-5 text-center text-md-left text-uppercase font-weight-bold">Bonificação por meio do descarte correto</h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="container mb-5">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 h-100 text-center d-flex flex-column align-items-center">
            <div class="icon">
              <span class="icon-puzzle-piece"></span>
            </div>
            <h2 class="my-4 heading">Desafios</h2>
            <p>Cumpra desafios para ser premiado. Aqui você pode saber os desafios.</p>
            <a href="<?php echo base_url();?>user_public/desafios" class="btn px-3 py-1 mt-auto">Participar</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-3 h-100 text-center d-flex flex-column align-items-center">
            <div class="icon">
              <span class="icon-user"></span>
            </div>
            <h2 class="my-4 heading">Cadastrar</h2>
            <p>Faça seu cadastro e participe dos desafios para ganhar premiações.</p>
            <a href="<?php echo base_url();?>user_public/login" class="btn px-3 py-1 mt-auto">Cadastrar-se</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-1 h-100 text-center d-flex flex-column align-items-center">
            <div class="icon">
              <span class="icon-map-marker"></span>
            </div>
            <h2 class="my-4 heading">Ecopontos</h2>
            <p>Veja as cooperativas proximas de você.</p>
            <a href="<?php echo base_url();?>user_public/ecopontos" class="btn px-3 py-1 mt-auto">Abrir mapa</a>
          </div>
        </div>
      </div>
    </div>

  
    
    <div class="container py-5">
      <div class="row justify-content-center mb-5">
        <div class="col-10 col-md-8 text-center text-uppercase">
          <h2 class="title-section">Desafios</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-4">
        <div class="col-10 col-lg-8">
          <p class="text-section text-center">Você pode ganhar vários prêmios descartando de forma consciente! Faça seu cadastro já para participar dos desafios lançados pelas cooperativas e pontos de coleta próximos de você.</p>
        </div>
      </div>

      <div class="row justify-content-around mb-5" id="desafios">
        
      </div>

      <div class="row justify-content-center">
        <a href="<?php echo base_url();?>user_public/desafios" class="btn btn-green mx-2 px-4 py-2 align-self-center">Ver todos os desafios</a>
      </div>
    </div>


    
    <div class="container py-5">
      <div class="row justify-content-center mb-5">
        <div class="col-10 col-md-8 text-center text-uppercase">
          <h2 class="title-section">Resíduos Sólidos Urbanos mais comuns</h2>
        </div>
      </div>

      <div class="row justify-content-around mb-5">
        <div class="col-8 col-md-5 col-lg-4 mb-5" data-aos="" data-aos-delay="100">
          <div class="tipo-rsu py-3 px-1">
            <img src="<?php echo base_url();?>assets/images/icons/plastico.svg" alt="Plástico" class="img-fluid mb-3">
            <p>Plástico</p>
          </div>
        </div>

        <div class="col-8 col-md-5 col-lg-4 mb-5" data-aos="" data-aos-delay="100">
          <div class="tipo-rsu py-3 px-1">
            <img src="<?php echo base_url();?>assets/images/icons/papel.svg" alt="Papel" class="img-fluid mb-3">
            <p>Papel</p>
          </div>
        </div>

        <div class="col-8 col-md-5 col-lg-4 mb-5" data-aos="" data-aos-delay="200">
          <div class="tipo-rsu py-3 px-1">
            <img src="<?php echo base_url();?>assets/images/icons/isopor.svg" alt="Isopor" class="img-fluid mb-3">
            <p>Isopor</p>
          </div>
        </div>
        
        <div class="col-8 col-md-5 col-lg-4 mb-5" data-aos="" data-aos-delay="300">
          <div class="tipo-rsu py-3 px-1">
            <img src="<?php echo base_url();?>assets/images/icons/metal.svg" alt="Metal" class="img-fluid mb-3">
            <p>Metal</p>
          </div>
        </div>

        <div class="col-8 col-md-5 col-lg-4 mb-5" data-aos="" data-aos-delay="300">
          <div class="tipo-rsu py-3 px-1">
            <img src="<?php echo base_url();?>assets/images/icons/vidro.svg" alt="Vidro" class="img-fluid mb-3">
            <p>Vidro</p>
          </div>
        </div>

        <div class="col-8 col-md-5 col-lg-4 mb-5" data-aos="" data-aos-delay="300">
          <div class="tipo-rsu py-3 px-1">
            <img src="<?php echo base_url();?>assets/images/icons/bateria.svg" alt="Pilhas e baterias" class="img-fluid mb-3">
            <p>Pilhas e baterias</p>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/desafios.js"></script>
