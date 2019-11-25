    <div class="site-section">
      <div class="container" id="desafio">
        
      </div>
    </div>

    <script>
      var id_user = "<?php echo $this->session->cidadao['doc']?>";
      var tipo_user = "<?php echo $this->session->cidadao['tipo']?>";
    </script>

    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/ver_desafio.js"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/aceitar_desafio.js"></script>
    