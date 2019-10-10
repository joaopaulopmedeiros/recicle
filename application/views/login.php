    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url();?>assets/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Login/Cadastro</h1>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Entrar</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
            <form class="p-5 bg-white">
             
              <h3>Cadastre-se</h3>
              <p>Selecione o tipo de usuário: </p>
              
              <div data-toggle="buttons">
                <button class="btn btn-outline-primary mt-1" id="btnCidadao" type="button" data-toggle="collapse" data-target="#cidadao" aria-expanded="false" aria-controls="cidadao">Cidadão</button>
                <button class="btn btn-outline-primary mt-1 "id="btnCriadorDesafio" type="button" data-toggle="collapse" data-target="#criadorDesafio" aria-expanded="false" aria-controls="criadorDesafio">Criador de Desafios</button>
              </div>

              
                <!--<div class="btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-primary mt-1"><input type="radio" id="btnCidadao" value="cidadao" data-toggle="collapse" data-target="#cidadao" aria-expanded="false" aria-controls="cidadao">Cidadão</label>

                  <label class="btn btn-outline-primary mt-1"><input type="radio" id="btnCriadorDesafio" value="criadorDesafio" data-toggle="collapse" data-target="#criadorDesafio" aria-expanded="false" aria-controls="criadorDesafio">Criador de Desafios</label>
                </div>-->
              
              
              <div id="myAccordion" class="accordion">
                <div class="collapse mt-5" id="cidadao">
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="nome">Nome</label>
                      <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <label class="text-black" for="email">E-mail</label>
                      <input type="email" id="email" name="email" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="cpf">CPF</label>
                      <input type="text" id="cpf" name="cpf" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="cep">CEP</label>
                      <input type="text" id="cep" name="cep" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-6">
                      <label class="text-black" for="senha">Senha</label> 
                      <input type="password" id="senha" name="senha" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label class="text-black" for="confirmarSenha">Confirmar senha</label> 
                      <input type="password" id="confirmarSenha" name="confirmarSenha" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="termos" name="termos" required>
                      <label class="form-check-label" for="termos">
                        Concordo com os <a href="">termos e condições</a>
                      </label>
                      <div class="invalid-feedback">
                        Você deve concordar, antes de continuar.
                      </div>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Enviar" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                  </div>
                </div>

                <div class="collapse mt-5" id="criadorDesafio">
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="nome">Nome</label>
                      <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <label class="text-black" for="email">E-mail</label>
                      <input type="email" id="email" name="email" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="doc">CPF ou CNPJ</label>
                      <input type="text" id="doc" name="doc" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="cep">CEP</label>
                      <input type="text" id="cep" name="cep" class="form-control">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-6">
                      <label class="text-black" for="senha">Senha</label> 
                      <input type="password" id="senha" name="senha" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label class="text-black" for="confirmarSenha">Confirmar senha</label> 
                      <input type="password" id="confirmarSenha" name="confirmarSenha" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="termos" name="termos" required>
                      <label class="form-check-label" for="termos">
                        Concordo com os <a href="">termos e condições</a>
                      </label>
                      <div class="invalid-feedback">
                        Você deve concordar, antes de continuar.
                      </div>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="Enviar" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-6">
            <form action="#" class="p-5 bg-white">
             
              <h3>Login</h3>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">E-mail</label>
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="senha">Senha</label> 
                  <input type="password" id="senha" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Próximo" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" language="javascript">
      $('#btnCidadao').click(function() {
        $('#btnCriadorDesafio').collapse('hide');
      });

      $('#btnCriadorDesafio').click(function() {
        $('#btnCidadao').collapse('hide');
      });


        /*function collapse() {
          $('#cidadao, #criadorDesafio').click(function() {
            console.log("aaaa");
            if(this.id == 'cidadao'){
              console.log('oi');
              $('#criadorDesafio').collapse('hide');
              $('#cidadao').collapse('show');
            } else if(this.id ==  'criadorDesafio'){
              $('#cidadao').collapse('hide');
              $('#criadorDesafio').collapse('show');
            }
          })
        }*/
    </script>