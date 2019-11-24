<body onload="initialize()">
<div class="site-section pb-0">
      <div class="container">
        <div class="row justify-content-center my-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Ecopontos</h2>
          </div>
        </div>
      </div>
      
      <div class="row m-0">
        <div class="col-md-3 border filtro">
          <div class="text-center mt-4 mb-5">
            <h6 class="text-primary font-weight-bold text-uppercase">Filtrar busca</h6>
          </div>
          <form action="#">
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text icon-search rounded-0" id="search"></span>
              </div>
              <input type="text" class="form-control" placeholder="Pesquisar endereço..." aria-label="Search" aria-describedby="search">
            </div>
            <div class="mb-4">
              <label for="lixo">Tipo de lixo</label>
              <select id="lixo" class="form-control">
                <option selected>Selecionar...</option>
                <option>Papel e papelão</option>
                <option>Óleo de cozinha</option>
                <option>Lixo eletrônico</option>
                <option>Pilhas e baterias</option>
                <option>Metal</option>
                <option>Vidro</option>
              </select>
            </div>
            <div class="mb-4">
              <label for="bonificacao">Tipo da bonificação</label>
              <select id="bonificacao" class="form-control">
                <option selected>Selecionar...</option>
                <option>Em dinheiro</option>
                <option>Spotify</option>
                <option>Netflix</option>
              </select>
            </div>
          </form>
        </div>
        <div class="col-md-9 px-0">
          <!--Google map-->
          <div id="map_canvas" class="z-depth-1-half map-container bg-white" style="height: 500px;">
            
          </div>
          <!--Google Maps-->
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

        <div class="row" id="desafios">
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
    </div>
</body>
<script type="text/javascript" language="javascript" src="<?= base_url()?>assets/js/ajax/desafios.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaQKvNgunPZz03UzYx6SaNxldOA5TAlo0&format=png&maptype=roadmap&size=480x360"></script>
<script type="text/javascript">
function initialize() {
  var myLatlng = new google.maps.LatLng(-5.748844, -35.260378);
  var mapOptions = {
    center: myLatlng,
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
}
</script>