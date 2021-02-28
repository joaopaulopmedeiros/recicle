    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-10 col-md-8 text-center text-uppercase">
            <h2 class="title-section">Desafios disponíveis</h2>
          </div>
        </div>
      
        <form id="filtro" class="mb-5">
          <div class="form-row justify-content-around">
            <div class="col-9 col-md-3 mb-3 mb-md-0">
              <label for="ecoponto">Criador de desafio</label>
              <select id="ecoponto" class="form-control" required>
                <!--dados-->
              </select>
            </div>
      
            <div class="col-9 col-md-3 mb-3 mb-md-0">
              <label for="lixo">Tipo de RSU</label>
              <select id="lixo" class="form-control" required>
                <!--dados-->
              </select>
            </div>
      
            <div class="col-9 col-md-3 mb-4 mb-md-0">
              <label for="bonificacao">Tipo da bonificação</label>
              <select id="bonificacao" class="form-control" required>
                <!--dados-->
              </select>
            </div>
            
            <div class="col-auto align-self-end">
              <button type="submit" class="btn btn-green px-4 py-2">Filtrar</button>
            </div>
          </div>
        </form>

        <div class="row justify-content-center justify-content-md-start" id="desafios">
          
        </div>
      </div>
    </div>


      <!--<div class="container text-center pb-1">
        <div class="row">
          <div class="col-12">
            <p class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
            </p>
          </div>
        </div>
      </div>-->

    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/desafios.js"></script>
    <script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/filtro.js"></script>
   