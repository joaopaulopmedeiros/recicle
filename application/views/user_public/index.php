    <div class="site-blocks-cover overlay" style="background-image: url('<?php echo base_url();?>assets/images/hero_bg_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Bonificação por meio do descarte correto</h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-puzzle-piece"></span>
            </div>
            <a href="<?=base_url()?>user_public/desafios">
              <h2 class="my-4 heading">Desafios</h2>
            </a>
            <p>Cumpra desafios para ser premiado. Aqui você pode saber os desafios da semana e como participar.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-user"></span>
            </div>
            <a href="<?=base_url()?>user_public/login">
              <h2 class="my-4 heading">Cadastrar</h2>
            </a>
            <p>Faça seu cadastro e participe dos desafios para ganhar premiações e o mais importante, ajudar a natureza.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-map-marker"></span>
            </div>
            <a href="<?=base_url()?>user_public/ecopontos">
              <h2 class="my-4 heading">Ecopontos</h2>
            </a>
            <p>Veja as cooperativas proximas de você.</p>
          </div>
        </div>
      </div>
    </div>

  
    <?php if($this->session->flashdata('success')) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php }?>

    <?php if($this->session->flashdata('danger')) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('danger'); ?>
      </div>
    <?php }?>
    
    <div class="site-section">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Bonificações</h2>
          </div>
        </div>

        <div class="row justify-content-around">

          <div class="col-md-5 align-self-center">
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            </div>
          </div>

          <div class="col-md-4 slide-one-item owl-carousel">
            <div class="d-flex justify-content-center">
              <figure style="width:250px;">
                <img src="https://pbs.twimg.com/profile_images/661888424073367552/pSK6r19h_400x400.png" alt="Image">
              </figure>
            </div>

            <div class="d-flex justify-content-center">
              <figure style="width:250px;">
                <img src="<?=base_url()?>assets/images/xbox.png" alt="Image">
              </figure>
            </div>

            <div class="d-flex justify-content-center">
              <figure style="width:250px;">
                <img src="<?=base_url()?>assets/images/spot.png" alt="Image">
              </figure>
            </div>

            <div class="d-flex justify-content-center">
              <figure style="width:250px;">
                <img src="<?=base_url()?>assets/images/uber.png" alt="Image">
              </figure>
            </div>

          </div>
        </div>
        
      </div>
    </div>



    <div class="site-section" style="background-color: #98989833;">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Lixos mais descartados</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="d-flex justify-content-center">
          <figure style="width: 90%;">
              <img src="<?=base_url()?>assets/images/lixo.png" alt="Imagem com os lixos mais descartados" class="img-fluid">
            </figure>
          </div>

        </div>
      </div>
    </div>


    
    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Ainda não possui uma conta?</h2>
            <p class="mb-0"><a href="<?php echo base_url();?>user_public/login" class="btn btn-primary py-3 px-5 text-white">Registre-se!</a></p>
          </div>
        </div>
      </div>
    </div>