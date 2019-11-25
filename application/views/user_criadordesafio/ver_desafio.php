<div class="site-section" style="background-color:#f5f5f5">
    <div class="container">
        <div id="desafio">
        
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 col-10 mt-5 text-center border-primary">
                <h2 class="font-weight-light text-primary">Usuários Participantes</h2>
            </div>
        </div>

        <div id="tabela-desafio">
        
        </div>
    </div>
</div>

<script>
    var tipo_user = "<?php echo $this->session->criador['tipo']?>";
</script>

<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/ver_desafio.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/concorrentes_meus_desafios.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/cumprir_desafio.js"></script>