var map;
var latitudActual, longitudLugar;
var longitudActual, latitudLugar;

var options = {
  enableHighAccuracy: true,
  timeout: 6000,
  maximumAge: 0
};

navigator.geolocation.getCurrentPosition(success, error, options);

function success(position) {
    var coordenadas = position.coords;

    latitudActual = coordenadas.latitude;
    longitudActual = coordenadas.longitude;
};
function error(error) {
    console.warn('ERROR(' + error.code + '): ' + error.message);
};

function initMap() {
    latitudLugar = parseFloat(document.getElementById("lat").innerHTML);
    longitudLugar = parseFloat(document.getElementById("lon").innerHTML);
    
    map = new google.maps.Map(document.getElementById('mapa'), {
        center: {lat: latitudActual, lng: longitudActual},
        zoom: 16
    });
    var marker = new google.maps.Marker({
        position: {lat: latitudActual, lng: longitudActual},
        map: map,
        title: 'Ubicacion Actual'
    });
    var marker2 = new google.maps.Marker({
        position: {lat: latitudLugar, lng: longitudLugar},
        map: map,
        title: 'Ubicacion Lugar'
    });
    var flightPlanCoordinates = [
        {lat:latitudActual, lng: longitudActual},
        {lat: latitudLugar, lng: longitudLugar}
    ];
    var flightPath = new google.maps.Polyline({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2
    });

    flightPath.setMap(map);
}