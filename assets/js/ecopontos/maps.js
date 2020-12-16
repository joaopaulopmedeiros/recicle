var ecopontos = [
	{ lat: -5.748844, lng: -35.260378 },
	{ lat: -5.758844, lng: -35.260378 },
];

var markers = [];
var map;
var geocoder;

function initMap() {
	//atribuição do ponto padrão no qual o mapa inicializa - IFZN
	var myLatlng = new google.maps.LatLng(-5.748844, -35.260378);

	//ajuste de opções como tipo de mapa e centralização ponto padrão estabelecido
	var mapOptions = {
		center: myLatlng,
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	};

	//instanciação do mapa na div map_canvas
	map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	//adição de um ecoponto
	/*var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Hello World!'
      });
    
    marker.setMap(map);*/

	/*var marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: {lat:-5.748844, lng:-35.260378}
      });
      marker.addListener('click', toggleBounce);
    }*/

	/*function toggleBounce() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    */
	google.maps.event.addListener(map, "mouseover", function (event) {
		carregarEcopontos();
	});
	map.addListener("center_changed", function () {
		// 3 seconds after the center of the map has changed, pan back to the
		// marker.
		window.setTimeout(function () {
			map.panTo(marker.getPosition());
		}, 3000);
	});

}

function carregarEcopontos() {
	apagarEcopontos();
	for (var i = 0; i < ecopontos.length; i++) {
		adicionarMarcadores(ecopontos[i]);
	}
}

function adicionarMarcadores(position) {
	window.setTimeout(function () {
		markers.push(
			new google.maps.Marker({
				position: position,
				map: map,
			})
		);
	});
}

function apagarEcopontos() {
	for (var i = 0; i < markers.length; i++) {
		markers[i].setMap(null);
	}
	markers = [];
}
