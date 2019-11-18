    <div class="site-section">
      <div class="container mt-5">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Minha conta</h2>
          </div>
        </div>

        <div class="row justify-content-around mb-5">
          <div class="col-10">
            <form id="editar_conta">
              <div id="alerta">

              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3">
                  <label class="text-black" for="nome">Nome</label>
                  <input type="text" id="nome" name="nome" class="form-control" readonly>
                </div>

                <div class="col-md-6">
                  <label class="text-black" for="email">E-mail</label>
                  <input type="email" id="email" name="email" class="form-control" readonly>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4 mb-3">
                  <label class="text-black" for="doc" id="lblDoc">Documento de identificação</label>
                  <input type="text" id="doc" name="doc" class="form-control" readonly>
                </div>

                <div class="col-md-4 mb-3">
                  <label class="text-black" for="cep">CEP</label>
                  <input type="text" id="cep" name="cep" class="form-control" readonly>
                </div>

                <div class="col-md-4 mb-3">
                  <label class="text-black" for="senha">Senha</label> 
                  <input type="password" id="senha" name="senha" class="form-control" aria-describedby="passwordHelpBlock" readonly>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="button" id="editar" onclick="editarForm()" value="Editar informações" class="btn btn-primary py-2 px-4 text-white">
                  <input type="submit" id="salvar" value="Salvar alterações" class="btn btn-primary py-2 px-4 text-white" hidden>
                  <input type="button" id="cancelar" onclick="fecharForm()" value="Cancelar" class="btn btn-secondary py-2 px-4" hidden>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      var id_user = "<?php echo $this->session->criador['doc']?>";
      var email_user = "<?php echo $this->session->criador['login']?>";
    </script>

    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/editar_conta_criador.js"></script>