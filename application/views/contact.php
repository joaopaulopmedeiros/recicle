    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url();?>assets/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Contato</h1>
            <p class="breadcrumb-custom"><a href="<?= base_url()?>">Home</a> <span class="mx-2">&gt;</span> <span>Contato</span></p>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <form id="add_mensagem" class="p-5 bg-white">
              <div id="alert">

              </div>             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="nome">Nome</label>
                  <input type="text" id="nome" name="nome" class="form-control" maxlength="50">
                </div>

                <div class="col-md-6">
                  <label class="text-black" for="sobrenome">Sobrenome</label>
                  <input type="text" id="sobrenome" name="sobrenome" class="form-control" maxlength="50">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control" maxlength="50">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="assunto">Assunto</label> 
                  <input type="text" id="assunto" name="assunto" class="form-control" maxlength="50">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="mensagem">Mensagem</label> 
                  <textarea name="mensagem" id="mensagem" cols="30" rows="7" maxlength="200" class="form-control" placeholder="Digite sua mensagem (máximo de 200 caracteres)"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar Mensagem" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-5">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Email </p>
              <p class="mb-0"><a href="#">recicle.software@gmail.com</a></p>
            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3"> RECICLE - LOGO</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?= base_url();?>assets/js/ajax/add_mensagem.js" type="text/javascript" language="javascript"></script>