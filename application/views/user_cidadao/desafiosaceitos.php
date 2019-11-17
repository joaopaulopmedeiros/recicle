<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url();?>assets/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Desafios</h1>
            <p class="breadcrumb-custom"><a href="<?= base_url()?>user_cidadao/index">Home</a> <span class="mx-2">&gt;</span> <span>Desafios</span></p>
          </div>
        </div>
      </div>
    </div>  
    <div class="site-section" style="background-color: #F5F5F5;">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Meus Desafios Aceitos</h2>
          </div>
        </div>

        <div class="row" id="desafios">
        </div>
      </div>
    </div>

      <!--<div class="container text-center pb-1">
        <div class="row">
          <div class="col-12">
            <p class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
            </p>
          </div>
        </div>
      </div>-->
    </div>
    <?php
        echo "<script> var id_user=".$this->session->cidadao['doc']."</script>";
    ?>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/desafios_aceitos-cidadao.js"></script>
