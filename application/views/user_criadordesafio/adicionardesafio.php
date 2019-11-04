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
                  <input type="text" id="titulo" class="form-control" maxlength="50" placeholder="Digite o título do desafio (máximo de 50 caracteres)">
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="lixo">Tipo de lixo <span class="text-danger">*</span></label>
                  <select id="lixo" class="form-control">
                    <option selected>Escolher...</option>
                    <option>Papel e papelão</option>
                    <option>Óleo de cozinha</option>
                    <option>Lixo eletrônico</option>
                    <option>Pilhas e baterias</option>
                    <option>Metal</option>
                    <option>Vidro</option>
                  </select>

                  <!-- Botão para acionar modal -->
                  <a data-toggle="modal" href="#ExemploModalCentralizado" class="small">
                    Cadastrar novo tipo de lixo
                  </a>

                  <!-- Modal -->
                  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar resíduo sólido urbano</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary">Salvar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="bonificacao">Tipo da bonificação <span class="text-danger">*</span></label>
                  <select id="bonificacao" class="form-control">
                    <option selected>Escolher...</option>
                    <option>Em dinheiro</option>
                    <option>Spotify</option>
                    <option>Netflix</option>
                  </select>

                  <!-- Botão para acionar modal -->
                  <a data-toggle="modal" href="#ExemploModalCentralizado" class="small">
                    Cadastrar nova bonificação
                  </a>

                  <!-- Modal -->
                  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar bonificação</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary">Salvar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="custom-control custom-checkbox mt-2">
                    <input class="custom-control-input" type="checkbox" id="semBonificacao" name="semBonificacao">
                    <label class="custom-control-label" for="semBonificacao">Sem bonificação</label>
                  </div>
                </div>

                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="qtdRSU">Quantidade (kg)</label>
                  <input id="qtdRSU" type="number" name="qtdRSU" class="form-control">

                  <label class="mt-2" for="descricaoBonificacao">Detalhamento da bonificação</label>
                  <input id="descricaoBonificacao" type="text" name="descricaoBonificacao" class="form-control">
                </div>

                <div class="col-md-3 mb-4 mb-md-0">
                  <label for="data-limite">Data limite <span class="text-danger">*</span></label>
                  <input id="data-limite" type="date" name="data-limite" class="form-control">
                  
                  <div class="custom-control custom-checkbox mt-2">
                    <input class="custom-control-input" type="checkbox" id="semDataLimite" name="semDataLimite">
                    <label class="custom-control-label" for="semDataLimite">Sem data limite</label>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="col-md-3 mb-3 mb-md-0 justify-content-center">
              <label for="preview-img">Imagem do desafio</label>
              <img src="<?= base_url()?>assets/images/desafio.png" class="img-fluid preview-img mb-3 border" alt="example placeholder">
              <div onclick="previewImage()" class="row justify-content-center file-button">
                <input type="button" class="btn btn-primary py-2 px-3 text-white" value="Alterar imagem">
                <input type="file" class="file-chooser" accept="image/*" hidden>
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

            <div class="col-md-12 mb-3 mb-md-0">
              <input type="button" class="btn btn-primary py-2 px-3 text-white file-button" value="Adicionar desafio">
            </div>
          </div>
        </form>
      </div>
    </div>