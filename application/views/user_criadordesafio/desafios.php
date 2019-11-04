
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url();?>assets/images/hero_bg_1.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Desafios</h1>
            <p class="breadcrumb-custom">
              <a href="<?= base_url()?>user_criadordesafio/index">Home</a>
              <span class="mx-2">&gt;</span>
              <span>Desafios</span>
            </p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section" style="background-color: #F5F5F5;">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Meus Desafios</h2>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-12 mb-5">
            <p class="mb-0"><a href="<?php echo base_url();?>user_criadordesafio/adicionardesafio" class="btn btn-primary py-3 px-5 text-white">Adicionar desafio</a></p>
          </div>
        </div>

        <div class="row" id="desafios">
          
        </div>
      </div>
    </div>

    <script type="text/javascript" language="javascript">
      $(document).ready(function(){
        function exibirDesafios(){
          var user = "<?= $this->session->criador['doc']?>";
          $.ajax({
            url:"http://localhost/recicle/desafios/index",
            method:"POST",
            data:{data_action:"meus-desafios", user_id:user},
            success:function(data)
            {
              $('#desafios').html(data);
            }
          });
        }
        exibirDesafios();
      });
    </script>


