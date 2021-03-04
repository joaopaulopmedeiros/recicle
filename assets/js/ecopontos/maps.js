var criadores_desafios = [];
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
		if (xhr.readyState == 4 && xhr.status == 200){
			criadores_desafios = xhr.response;
			carregarEnderecos()
		}
	}
}

function carregarEnderecos() {
	criadores_desafios.map(criador_desafio => {
		let cep = criador_desafio.cep;

		let request = new XMLHttpRequest();
	
		request.open('GET', `https://viacep.com.br/ws/${cep}/json`);
		request.responseType = 'json';
		request.send();

		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200){
				let endereco = {
					localizacao: {
						endereco: request.response.logradouro,
						cidade: request.response.localidade,
						cep: cep
					},
					nome_criador_desafio: criador_desafio.nome
				}

				carregarEcopontos(endereco)
			}
		}
	})
}

function carregarEcopontos(endereco) {
	let localizacao = endereco.localizacao;

	let request = new XMLHttpRequest();

	request.open('GET', `https://nominatim.openstreetmap.org/search?city=${localizacao.cidade}&street=${localizacao.endereco}&format=json`);
	request.responseType = 'json';
	request.send();

	request.onreadystatechange = function() {
		if (request.readyState == 4 && request.status == 200) {
			try {
				let ecoponto = {
					nome_criador_desafio: endereco.nome_criador_desafio,
					crd : {
						lat: request.response[0].lat,
						lng: request.response[0].lon
					}
				}

				adicionarMarcador(ecoponto);
			}
			catch {
				console.log("Erro na localização do ecoponto.");
			}
		}
	}
}

function adicionarMarcador(ecoponto) {
	markers.push(
		L.marker(ecoponto.crd).addTo(map)
	);

	markers.map(marker => {
		marker.bindPopup(`<b style="font-family: Montserrat">${ecoponto.nome_criador_desafio}</b>`)
	});
}

function apagarEcopontos() {
	for (var i = 0; i < markers.length; i++) {
		markers[i].setMap(null);
	}
	markers = [];
}

async function success(pos) {
	carregarMapa(pos);
}

function error(err) {
	alert("Não foi possível acessar sua localização.");

	let pos = {
		coords: {
			latitude: -5.7490999,
			longitude: -35.2604103
		}
	}

	carregarMapa(pos);
}

function carregarMapa(pos) {
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

	carregarCriadoresDesafios();
}

function filtrarEcoponto() {
	$(document).on('submit', '#filtro_ecoponto', function(event){
		event.preventDefault();
		
		let endereco = encodeURI($("#endereco").val());
		let cidade = encodeURI($("#cidade").val());

		$.ajax({
			url: `https://nominatim.openstreetmap.org/search?city=${cidade}&street=${endereco}&format=json`,
			method: "GET",
			dataType: "json",
			success:function(data)
			{
				let pos = {
					crd : {
						lat: data[0].lat,
						lng: data[0].lon
					}
				}
				
				carregarMapa(pos);
			}
		});
	});
}