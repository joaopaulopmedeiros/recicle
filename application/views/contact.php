    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-10 col-md-8 text-center text-uppercase">
            <h2 class="title-section">Contato</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-11 col-md-7 mb-5">
            <form id="add_mensagem">
              <div id="alert">

              </div>             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="nome">Nome</label>
                  <input type="text" id="nome" name="nome" class="form-control" maxlength="50">
                </div>

                <div class="col-md-6">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" id="sobrenome" name="sobrenome" class="form-control" maxlength="50">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control" maxlength="50">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="assunto">Assunto</label> 
                  <input type="text" id="assunto" name="assunto" class="form-control" maxlength="50">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="mensagem">Mensagem</label> 
                  <textarea name="mensagem" id="mensagem" cols="30" rows="7" maxlength="200" class="form-control" placeholder="Digite sua mensagem (máximo de 200 caracteres)"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-green py-2 px-4">Enviar Mensagem</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-11 col-md-5">
            <div class="px-md-5 mb-5">
              <h4 class="mb-0 font-weight-bold">Nosso e-mail</h4>
              <p class="mb-0"><a href="mailto:sistema.recicle@gmail.com">sistema.recicle@gmail.com</a></p>
            </div>

            <div class="px-md-5 mb-5 icons-redes-sociais">
              <h4 class="mb-2 font-weight-bold">Estamos nas redes sociais</h4>
              <a href="#" class="pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pr-3"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?= base_url();?>assets/js/ajax/add_mensagem.js" type="text/javascript" language="javascript"></script>