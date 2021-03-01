    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form class="px-5" id="user_form">
              <h3 class="title-section text-uppercase text-center mb-4">Cadastre-se</h3>
              <p class="text-label">Selecione o tipo de usuário: </p>
              
              <div class="justify-content-center align-items-center">
                <div class="btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-green mt-1" onclick="idCidadao()">
                    <input type="radio" name="tipoConta" id="btnCidadao" value="cidadao" required>
                    Cidadão
                  </label>

                  <label class="btn btn-outline-green mt-1" onclick="idCriadorDesafio()">
                    <input type="radio" name="tipoConta" id="btnCriadorDesafio" value="criadorDesafio">
                    Criador de Desafios
                  </label>
                </div>
              </div>
              
              <div class="mt-5">
                <div id="alerta">

                </div>

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="doc" id="lblDoc">Documento de identificação</label>
                    <input type="text" id="doc" name="doc" class="form-control">
                    <small class="form-text">Digite somente os números.</small>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" class="form-control">
                    <small class="form-text">Digite somente os números.</small>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-6">
                    <label for="senha">Senha</label> 
                    <input type="password" id="senha" name="senha" class="form-control" aria-describedby="passwordHelpBlock">
                    <small id="passwordHelpBlock" class="form-text">A senha deve ter entre 6 e 20 caracteres.</small>
                  </div>

                  <div class="col-md-6">
                    <label for="confirmarSenha">Confirmar senha</label> 
                    <input type="password" id="confirmarSenha" name="confirmarSenha" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <button type="submit" id="enviar" class="btn btn-green py-2 px-4">Cadastrar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <form id="user_login" class="px-5">
              <h3 class="title-section text-uppercase text-center mb-4">Login</h3>
              <div id="alert">

              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="lemail">E-mail</label>
                  <input type="email" id="lemail" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="lsenha">Senha</label> 
                  <input type="password" id="lsenha" class="form-control">
                </div>
              </div>

              <!--<div class="row form-group">
                <div class="col-md-12">
                  <a href="#">Esqueceu sua senha?</a>
                </div>
              </div>-->

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-green py-2 px-4">Entrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="<?= base_url();?>assets/js/ajax/cadastro.js" type="text/javascript" language="javascript"></script>
    <script src="<?= base_url();?>assets/js/ajax/login.js" type="text/javascript" language="javascript"></script>
    