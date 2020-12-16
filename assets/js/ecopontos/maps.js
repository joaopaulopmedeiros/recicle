var ecopontos = [
	{ lat: -5.748844, lng: -35.260378 },
];

var markers = [];
var map;
var geocoder;
var userNotHasGivenPermision = false;
var myLatlng;

async function initMap() {
	await navigator.geolocation.getCurrentPosition(success, error);

	//ajuste de opções como tipo de mapa e centralização ponto padrão estabelecido
	var mapOptions = {
		center: myLatlng,
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	};

	//instanciação do mapa na div map_canvas
	map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

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

function success(pos) {
	var crd = pos.coords;
  myLatlng = new google.maps.LatLng(crd.latitude, crd.longitude);
  console.log(myLatlng);
}

function error(err) {
	console.warn("ERROR(" + err.code + "): " + err.message);
}
