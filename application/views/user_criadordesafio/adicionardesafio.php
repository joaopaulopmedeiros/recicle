    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center my-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Adicionar desafio</h2>
          </div>
        </div>

        <form id="add_desafio">
        <div class="form-row justify-content-around">
            <div id="alert">

            </div>
            
            <div class="col-md-9 mb-3 mb-md-0">
              <div class="row">
                <div class="col-md-12 mb-4">
                  <label for="titulo">Titulo <span class="text-danger">*</span></label>
                  <input type="text" id="titulo" class="form-control" maxlength="100" placeholder="Digite o título do desafio (máximo de 100 caracteres)">
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="rsu">Tipo de RSU <span class="text-danger">*</span> <span class="icon-question-circle color-tooltip" data-toggle="tooltip" data-placement="right" title="RSU é a sigla para Resíduo Sólido Urbano e siginifica o rejeito que ainda pode ser reaproveitado."></span></label>
                  <select id="rsu" class="form-control">

                  </select>

                  <!-- Botão para acionar modal do tipo de rsu -->
                  <a data-toggle="modal" href="#ModalRSU" class="small">Cadastrar novo tipo de RSU</a>
                </div>

                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="bonificacao">Tipo da bonificação <span class="text-danger">*</span></label>
                  <select id="bonificacao" class="form-control">
                    
                  </select>

                  <!-- Botão para acionar modal da bonificação -->
                  <a data-toggle="modal" href="#ModalBonificacao" class="small">Cadastrar nova bonificação</a>
                </div>

                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="qtdRSU">Quantidade (kg)</label>
                  <input id="qtdRSU" type="number" name="qtdRSU" class="form-control" min="0">
                </div>

                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="data-limite">Data limite <span class="text-danger">*</span></label>
                  <input id="data-limite" type="date" name="data-limite" class="form-control">
                  
                  <div class="custom-control custom-checkbox mt-2">
                    <input class="custom-control-input" type="checkbox" id="semDataLimite" name="semDataLimite" onclick="desabilitarDataLimite()">
                    <label class="custom-control-label" for="semDataLimite">Sem data limite</label>
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col-md-12 mb-4 mb-md-0">
                  <label class="mt-2 detalhamentoBonus" for="descricaoBonificacao">Detalhamento da bonificação (se houver) <span class="icon-question-circle" data-toggle="tooltip" data-placement="right" title="Preencha este campo detalhando a bonificação do desafio, caso haja. Por exemplo, 'R$ 20,00' se a bonificação for em dinheiro."></span></label>
                  <input id="descricaoBonificacao" type="text" name="descricaoBonificacao" class="form-control detalhamentoBonus">
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-5 mb-md-0">
              <label for="preview-img">Imagem do desafio</label>

              <img id="img" src="<?= base_url()?>assets/images/desafio.svg" class="img-fluid preview-img mb-3">

              <div class="row justify-content-center">
                <label for="file-button" class="btn btn-primary py-2 px-3 text-white" onclick="previewImage()">Alterar imagem</label>
                <input type="file" name="file-button" id="file-button" class="file-chooser d-none" accept="image/x-png,image/gif,image/jpeg">
                <a href="#" id="img-default" class="col-12 small mt-1 text-center">Definir imagem padrão</a>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-4">
              <label for="descricao">Descrição do desafio <span class="text-danger">*</span></label>
              <textarea class="form-control" id="descricao" rows="20" maxlength="1500" placeholder="Digite a descrição e as regras do desafio (máximo de 1500 caracteres)"></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="small text-danger">* Campos obrigatórios</label>
            </div>

            <div class="col-md-12 mb-4 mb-md-0">
              <input type="submit" class="btn btn-primary py-2 px-3 text-white file-button" value="Adicionar desafio">
            </div>
          </div>
        </form>

        <!-- Modal do tipo de rsu-->
        <div class="modal fade" id="ModalRSU" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <form id="form_rsu">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar resíduo sólido urbano</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" onclick="clearAlert()">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div id="alert-rsu">

                  </div>

                  <label for="tipoRSU">Tipo do lixo</label>
                  <input type="text" id="tipoRSU" class="form-control" maxlength="20" placeholder="Digite o nome do lixo (máximo de 20 caracteres)">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearAlert()">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Modal da bonificação -->
        <div class="modal fade" id="ModalBonificacao" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <form id="form_bonificacao">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar bonificação</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" onclick="clearAlert()">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div id="alert-bonificacao">

                  </div>

                  <label for="tipoBonificacao">Tipo da bonificação</label>
                  <input type="text" id="tipoBonificacao" class="form-control" maxlength="20" placeholder="Digite o tipo de bonificação (máximo de 50 caracteres)">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearAlert()">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      var user_id = "<?php echo $this->session->criador['doc'] ?>";
    </script>

    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
      });
    </script>

    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/add_desafio.js"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/bonificacao.js"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/rsu.js"></script>
