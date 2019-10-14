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
            <form class="p-5 bg-white" id="user_form">
             
              <h3>Cadastre-se</h3>
              <p>Selecione o tipo de usuário: </p>
              
              <div class="justify-content-center">
                <div class="btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-primary mt-1" onclick="idCidadao()"><input type="radio" name="tipoConta" id="btnCidadao" value="cidadao" required>Cidadão</label>

                  <label class="btn btn-outline-primary mt-1" onclick="idCriadorDesafio()"><input type="radio" name="tipoConta" id="btnCriadorDesafio" value="criadorDesafio">Criador de Desafios</label>
                </div>
              </div>
              
              
              <div class="mt-5">
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
                    <label class="text-black" for="doc" id="lblDoc">Documento de identificação</label>
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
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" value="" id="termos" name="termos" required>
                    <label class="custom-control-label" for="termos">
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
            </form>

          </div>

          <div class="col-md-6">
            <form action="#" class="p-5 bg-white">
             
              <h3>Login</h3>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="lemail">E-mail</label>
                  <input type="email" id="lemail" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="lsenha">Senha</label> 
                  <input type="password" id="lsenha" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" id="enviar" value="Próximo" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" language="javascript">
      function idCidadao() {
        document.getElementById('lblDoc').innerHTML = 'CPF';
      }

      function idCriadorDesafio() {
        document.getElementById('lblDoc').innerHTML = 'CPF ou CNPJ';
      }

      $(document).ready(function(){
        $(document).on('submit', '#user_form', function(event){
          event.preventDefault();
          var url = "";
          if ($('#btnCidadao').is(':checked')) {
            url = "http://localhost/recicle/user_cidadao/action";
          }
          else if ($('#btnCriadorDesafio').is(":checked")) {
            url = "http://localhost/recicle/user_cooperativa/action";
          }

          $.ajax({
            url:url,
            method:"POST",
            data:$(this).serialize(),
            data:{data_action:'Insert'},
            dataType:"json",
            success:function(data)
            {
              console.log(data);
              if(data.success)
              {
                console.log("uuuuuuuhuuuuuuuul deu certo amada");
              }

              if(data.error)
              {
                console.log("deu errado parceira");
              }
            }
          })
        });
      });
    </script>