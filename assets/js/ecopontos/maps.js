var criadores_desafios = [];
//var enderecos = [];
//var ecopontos = [];
var markers = [];
var map;

async function initMap() {
	await navigator.geolocation.getCurrentPosition(success, error);
}
initMap();

function carregarCriadoresDesafios() {
	let xhr = new XMLHttpRequest();
	
	xhr.open('GET', 'http://localhost/recicle/criador_desafio/getEcopontos');
	xhr.responseType = 'json';
	xhr.send();

	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			console.log(criadores_desafios)
			criadores_desafios = xhr.response;
			carregarEnderecos()
		}
	}
}
carregarCriadoresDesafios();

function carregarEnderecos() {
	criadores_desafios.map(criador_desafio => {
		let cep = criador_desafio.cep;

		let request = new XMLHttpRequest();
	
		request.open('GET', `https://viacep.com.br/ws/${cep}/json`);
		request.responseType = 'json';
		request.send();

		request.onreadystatechange = function(){
			if(request.readyState == 4 && request.status == 200){
				/*enderecos.push({
					localizacao: {
						endereco: request.response.logradouro,
						cidade: request.response.localidade,
						cep: cep
					},
					nome: criador_desafio.nome
				})*/
				let endereco = {
					localizacao: {
						endereco: request.response.logradouro,
						cidade: request.response.localidade,
						cep: cep
					},
					nome_criador_desafio: criador_desafio.nome
				}

				console.log(endereco)

				carregarEcopontos(endereco)
			}
		}
	})
}

function carregarEcopontos(endereco) {
	//enderecos.map(endereco => {
		let localizacao = endereco.localizacao;

		let request = new XMLHttpRequest();
	
		request.open('GET', `https://nominatim.openstreetmap.org/search?city=${localizacao.cidade}&street=${localizacao.endereco}&format=json`);
		request.responseType = 'json';
		request.send();

		request.onreadystatechange = function(){
			if(request.readyState == 4 && request.status == 200){
				let ecoponto = {
					nome_criador_desafio: endereco.nome_criador_desafio,
					crd : {
						lat: request.response[0].lat,
						lng: request.response[0].lon
					}
				}
				console.log(ecoponto)
				adicionarMarcador(ecoponto);
				/*ecopontos.push({
					nome_criador_desafio: endereco.nome_criador_desafio,
					crd : {
						lat: request.response[0].lat,
						lng: request.response[0].lon
					}
				})*/
			}
		}
	//})
}

/*function percorrerEcopontos() {
	for (var i = 0; i < ecopontos.length; i++) {
		adicionarMarcadores(ecopontos[i]);
	}
}*/

function adicionarMarcador(ecoponto) {
	markers.push(
		L.marker(ecoponto.crd).addTo(map)
	);

	markers.map(marker => {
		marker.bindPopup(`<b style="font-family: Montserrat">${ecoponto.nome_criador_desafio}</b>`);
	})
}

function apagarEcopontos() {
	for (var i = 0; i < markers.length; i++) {
		markers[i].setMap(null);
	}
	markers = [];
}

async function success(pos) {
	var crd = pos.coords;

	map = L.map('mapid').setView([crd.latitude, crd.longitude], 15);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZmFiaWFuYXBkdWFydGUiLCJhIjoiY2tscW96MGt5MDJ4dTJ1cDlmZTN1MzJiZyJ9.eMVZE9TTibMliutxnPWfvg', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZmFiaWFuYXBkdWFydGUiLCJhIjoiY2tscW96MGt5MDJ4dTJ1cDlmZTN1MzJiZyJ9.eMVZE9TTibMliutxnPWfvg'
	}).addTo(map);
}

function error(err) {
	alert("Não foi possível acessar sua localização.");
}
