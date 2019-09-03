    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url();?>assets/template/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Desafios</h1>
            <p class="breadcrumb-custom"><a href="<?= base_url()?>user_cidadao/index">Home</a> <span class="mx-2">&gt;</span> <span>Desafios</span></p>
          </div>
        </div>
      </div>
    </div>  



    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Filtrar Desafios</h2>
          </div>
        </div>
      
        <form action="">
          <div class="form-row justify-content-around">
            <div class="col-md-3 mb-3 mb-md-0">
              <label for="ecoponto">Ecoponto/Empresa</label>
              <select id="ecoponto" class="form-control">
                <option selected>Escolher...</option>
                <option>...</option>
              </select>
            </div>
      
            <div class="col-md-3 mb-3 mb-md-0">
              <label for="lixo">Tipo de lixo</label>
              <select id="lixo" class="form-control">
                <option selected>Escolher...</option>
                <option>Papel e papelão</option>
                <option>Óleo de cozinha</option>
                <option>Lixo eletrônico</option>
                <option>Pilhas e baterias</option>
                <option>Metal</option>
                <option>Vidro</option>
              </select>
            </div>
      
            <div class="col-md-3 mb-3 mb-md-0">
              <label for="bonificacao">Tipo da bonificação</label>
              <select id="bonificacao" class="form-control">
                <option selected>Escolher...</option>
                <option>Em dinheiro</option>
                <option>Spotify</option>
                <option>Netflix</option>
              </select>
            </div>
            
            <div class="col-auto align-self-end">
              <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>



    <div class="site-section" style="background-color: #98989833;">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Meus Desafios</h2>
          </div>
        </div>

        <div class="row" id="desafios">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>
        </div>
      </div>
    </div>
    
  
    <div class="site-section bd-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Desafios Disponíveis</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo base_url();?>assets/template/images/blog_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><div class="text-primary">Título</div></h2>
              <div class="meta mb-4">Nome da empresa <span class="mx-2">&bullet;</span>Tipo de lixo <span class="mx-2">&bullet;</span>Jan 18, 2019</div>
            </div> 
          </div>
        </div>
      </div>

      <div class="container text-center pb-1">
        <div class="row">
          <div class="col-12">
            <p class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
            </p>
          </div>
        </div>
      </div>
    </div>