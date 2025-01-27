		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function (position) {
				initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
				map.setCenter(initialLocation);
				marker.setPosition(initialLocation); 
			});
		} 
		var map;
		var marker;
		var marker2;
		var myLatlng = { lat: 19.4978, lng: -99.1269 };
		var geocoder = new google.maps.Geocoder();
		var geocoder2 = new google.maps.Geocoder();
		var infowindow = new google.maps.InfoWindow();
		function initialize(){
			var mapOptions = {
				zoom: 18,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

			marker = new google.maps.Marker({
				map: map,
				position: myLatlng,
				draggable: true 
			});
			marker2 = new google.maps.Marker({
				map:map,
				draggable: true
			}) 

			geocoder.geocode({'latLng': myLatlng }, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					if (results[0]) {
						$('#latitude,#longitude').show();
						$('#origen').val(results[0].formatted_address);
						$('#OriginLatitude').val(marker.getPosition().lat());
						$('#OriginLongitude').val(marker.getPosition().lng());
						infowindow.setContent(results[0].formatted_address);
						infowindow.open(map, marker);
					}
				}
			});

			google.maps.event.addListener(marker, 'dragend', function() {

				geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						if (results[0]) {
							$('#origen').val(results[0].formatted_address);
							$('#OriginLatitude').val(marker.getPosition().lat());
							$('#OriginLongitude').val(marker.getPosition().lng());
							infowindow.setContent(results[0].formatted_address);
							infowindow.open(map, marker);
						}
					}
				});
			});
			google.maps.event.addListener(marker2, 'dragend', function() {

				geocoder2.geocode({'latLng': marker2.getPosition()}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						if (results[0]) {
							$('#destino').val(results[0].formatted_address);
							$('#DestinationLatitude').val(marker2.getPosition().lat());
							$('#DestinationLongitude').val(marker2.getPosition().lng());
							infowindow.setContent(results[0].formatted_address);
							infowindow.open(map, marker2);
						}
					}
				});
			});
			var searchBox = new google.maps.places.SearchBox(document.getElementById('origen'));
			var searchBox2 = new google.maps.places.SearchBox(document.getElementById('destino'));
			google.maps.event.addListener(searchBox, 'places_changed',function(){

				var places = searchBox.getPlaces();

				var bounds = new google.maps.LatLngBounds();
				var i, place;
				for(i=0; place=places[i];i++){
					bounds.extend(place.geometry.location);
					marker.setPosition(place.geometry.location);
				}
				$('#OriginLatitude').val(marker.getPosition().lat());
				$('#OriginLongitude').val(marker.getPosition().lng());
				map.fitBounds(bounds);
				map.setZoom(15);
			});
			google.maps.event.addListener(searchBox2, 'places_changed',function(){

				var places = searchBox2.getPlaces();

				var bounds = new google.maps.LatLngBounds();
				var i, place;

				for(i=0; place=places[i];i++){
					bounds.extend(place.geometry.location);
					marker2.setPosition(place.geometry.location);
				}
				$('#DestinationLatitude').val(marker2.getPosition().lat());
				$('#DestinationLongitude').val(marker2.getPosition().lng());
				map.fitBounds(bounds);
				map.setZoom(15);
			});

		}
		google.maps.event.addDomListener(window, 'load', initialize);