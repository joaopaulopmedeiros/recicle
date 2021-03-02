    <div class="site-section pb-0 pt-3">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center text-uppercase">
            <h2 class="title-section">Ecopontos</h2>
          </div>
        </div>
      </div>
      
      <div class="row m-0">
        <div class="col-md-3 border filtro">
          <div class="text-center mt-4 mb-5">
            <h5 class="text-primary font-weight-bold">Filtrar ecopontos</h5>
          </div>

          <form id="filtro" action="#">
            <div class="mb-4">
              <label class="text-label">Endereço</label>
              <input type="text" class="form-control form-select" placeholder="Digite um endereço..." aria-label="Search" aria-describedby="search">
            </div>

            <div class="mb-4">
              <label class="text-label">Cidade</label>
              <input type="text" class="form-control form-select" placeholder="Digite a cidade..." aria-label="Search" aria-describedby="search">
            </div>

            <div class="mb-4">
              <button type="submit" class="btn btn-green px-4 py-2">Filtrar</button>
            </div>
          </form>
        </div>

        <div class="col-md-9 px-0">
          <!--Google map-->
          <div id="mapid">
          
          </div>
          <!--Google Maps-->
        </div>
      </div>
    </div>

<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ecopontos/maps.js"></script>
