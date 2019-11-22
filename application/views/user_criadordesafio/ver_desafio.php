<div class="site-section">
      <div class="container" id="desafio">
            <table class="table">
                    <thead>
                        <th>id</th>
                        <th>Desafio</th>
                        <th>Cidadão</th>
                        <th>Tipo de RSU</th>
                        <th>Tipo de Bonificação</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        <td id="#idDesafioAceito"></td>
                        <td id="#desafio"></td>
                        <td id="#cidadao"></td>
                        <td id="#tipoRSU"></td>
                        <td id="#bonificacao"></td>
                        <td id="#cumprir"><button onclick="cumprirDesafio('.$row->idDesafioAceito.')" type="button" class="btn btn-success">Confirmar</button></td>       
                    </tbody>
            </table>
      </div>
</div>
<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/concorrentes_meus_desafios.js"></script>
<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/cumprir_desafio.js"></script>