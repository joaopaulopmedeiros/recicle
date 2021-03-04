<div class="site-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-10 col-md-8 text-center text-uppercase">
        <h2 class="title-section">Desafios disponíveis</h2>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-12 mb-5">
        <p class="mb-0"><a href="<?php echo base_url();?>user_criadordesafio/adicionardesafio" class="btn btn-green py-2 px-4">Adicionar desafio</a></p>
      </div>
    </div>

    <div class="row" id="desafios">
      
    </div>
  </div>
</div>

<script>
  var user_id = "<?php echo $this->session->criador['doc']?>";
</script>
<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/meus_desafios.js"></script>
