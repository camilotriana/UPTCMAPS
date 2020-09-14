var map;
var latitudActua, longitudLugar;
var longitudActual, latitudLugar;

navigator.geolocation.getCurrentPosition(success, error);

function success(position) {
    var coordenadas = position.coords;

    latitudActual = coordenadas.latitude;
    longitudActual = coordenadas.longitude;
};
function error(error) {
    console.warn('ERROR(' + error.code + '): ' + error.message);
};

function initMap() {
    latitudLugar = 5.704822;
    longitudLugar = -72.941573;
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

