    <div class="site-section">
      <div class="container" id="desafio">
        
      </div>
    </div>
    <?php
      echo 
      '
      <script>var id_user ='.$this->session->cidadao['doc'].'</script> 
      ';
    ?>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/ver_desafio.js"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/aceitar_desafio.js"></script>
    