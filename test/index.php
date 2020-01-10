<!DOCTYPE html>

<html>

<head>
	<title>Simple Map</title>

	<meta charset="utf-8"><title>Mapa</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="https://htmlguru.net/carrent-html/assets/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="https://htmlguru.net/carrent-html/assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="https://htmlguru.net/carrent-html/assets/revolution/css/navigation.css">

	<style>
		#popupBody{
			width: 30%;
			padding: 2%;
			box-shadow: 0 0 5px #CCC;
			background: #FFF;
			position: relative;
			margin: -49%;
			margin-left: 1%;
			transition: all 5s ease-in-out;
			font-size:20px;
		}
		#cerrar{
			position: absolute;
			top: 20px;
			right: 30px;
			font-size: 12px;
			font-weight: bold;
			text-decoration: none;
			color: #F00;
			transition: all 200ms;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLU85ci7IWOiaKuhn_9e1qlQIIHmus0yY&libraries=places"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase.js"></script>
	<script>
		var config = {
			apiKey: "AIzaSyDLU85ci7IWOiaKuhn_9e1qlQIIHmus0yY",
			authDomain: "rtu-cliente.firebaseapp.com",
			databaseURL: "https://rtu-cliente.firebaseio.com",
			projectId: "firebase-rtu-cliente",
			storageBucket: "firebase-rtu-cliente.appspot.com",
			messagingSenderId: "324653843509"
		};
		firebase.initializeApp(config);
		var map;
		var centro = { lat: 19.1771493, lng: -96.1434687 };
		function initialize() {
			var mapdivMap = document.getElementById("lienzoMapa");
			mapdivMap.style.width = '100%';
			mapdivMap.style.height = (window.innerHeight) + "px";
			var mapOptions = {
				zoom: 13,
				center: centro,
				disabledDefaultUI: true,
				mapTypeControl: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById('lienzoMapa'), mapOptions);

			//crear una funcion de creacion de marcadores que se auto ejecute cada cierto tiempo 
		}
		var arregloMarcadores = [];
		function borrarMarcadores() {
			for (var i = 0; i < arregloMarcadores.length; i++ ) {
				arregloMarcadores[i].setMap(null);
			}
			arregloMarcadores.length = 0;
		}
		function marcadores(){
			firebase.database().ref('Taxis').on('value',(data)=>{
				data.forEach(function(snapshot){
					var newPost = snapshot.val();
					var NLat = parseFloat(newPost.Latitud);
					var NLon = parseFloat(newPost.Longitud);
					var ubicacion = new google.maps.LatLng(NLat, NLon);
					var marker = new google.maps.Marker({
						map: map,
						position: ubicacion,
						icon: 'drive.png'
					});
					var contentString = "texto";
					var infowindow = new google.maps.InfoWindow({
						content: contentString,
						position: ubicacion
					});
					marker.addListener('click', function() {
						infowindow.open(map, marker);
					});
					arregloMarcadores.push(marker);
					
				});
			});
		}

		
		var Intervalo = function intervaloEjecutado(){
			borrarMarcadores();
			console.log("Marcadores borrados");
			marcadores();
			console.log("Intervalo Ejecutado");
			
		};
		// var Intervalo2 = function intervaloEjecutado2(){
		// 	borrarMarcadores();
		// 	console.log("Marcadores Borrados");
		// };
		setInterval(Intervalo, 5000);
		// setInterval(Intervalo2, 1500);

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
	<style>
		.label {
			box-sizing:border-box;
			background: #05F24C;
			box-shadow: 2px 2px 4px #333;
			border:5px solid #346FF7;
			height: 20px;
			width: 20px;
			border-radius: 10px;
			-webkit-animation: pulse 1s ease 1s 3;
			-moz-animation: pulse 1s ease 1s 3;
			animation: pulse 1s ease 1s 3;
		}
		@-webkit-keyframes pulse {
			50% {
				-webkit-transform: scale(2);
				-moz-transform: scale(2);
				transform: scale(2);
			}
			100% {
				-webkit-transform: scale(1);
				-moz-transform: scale(1);
				transform: scale(1);
			}
		}
		@-moz-keyframes pulse {
			50% {
				-webkit-transform: scale(2);
				-moz-transform: scale(2);
				transform: scale(2);
			}
			100% {
				-webkit-transform: scale(1);
				-moz-transform: scale(1);
				transform: scale(1);
			}
		}
		@keyframes pulse {
			50% {
				-webkit-transform: scale(2);
				-moz-transform: scale(2);
				transform: scale(2);
			}
			100% {
				-webkit-transform: scale(1);
				-moz-transform: scale(1);
				transform: scale(1);
			}
		}
	</style>

</head>

<body>
	<div class="wrapper">
		
		<div id="lienzoMapa" ></div>
		
	</div>
</body>