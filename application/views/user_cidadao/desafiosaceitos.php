    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-10 col-md-8 text-center text-uppercase">
            <h2 class="title-section">Desafios aceitos</h2>
          </div>
        </div>

        <div class="row" id="desafios">

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-10 col-md-8 text-center text-uppercase">
            <h2 class="title-section">Desafios finalizados</h2>
          </div>
        </div>

        <div class="row" id="desafios-finalizados">

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

    <?php
        echo "<script> var id_user=".$this->session->cidadao['doc']."</script>";
    ?>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/desafios_aceitos-cidadao.js"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/desafios_concluidos.js"></script>
