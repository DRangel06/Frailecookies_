
var map = L.map('map').setView([3.42335, -76.52086], 13);

//Definición de la variable mapa base, e inserción de código extraido de https://leaflet-extras.github.io/
var basemap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
basemap.addTo(map);

//GeoJSON
var comuna = L.geoJSON(comuna).addTo(map);
var puntos = L.geoJSON(puntos, {
    onEachFeature: function (feature, layer) {
        layer.bindPopup('<b>ID: </b>' + feature.properties.id + '<br>' + '<b>Nombre: </b>' + feature.properties.nombre)
    }
}).addTo(map);

//CONFIGURACIÓN ZOOM LIMITADA A LA COMUNA
map.fitBounds(comuna.getBounds());

//Scale control that shows the scale of the current center of screen in metric (m/km) system. 
L.control.scale({
    position: 'bottomleft',
    imperial: false
}).addTo(map);

//Escala del mapa absoluta (1:25.000)
L.control.scalefactor().addTo(map);

//LAYER CONTROL
var baseLayer = {
    "Mapa Base": basemap
};
var overlays = {
    "Frailepuntos": puntos,
    "Comuna 17": comuna
};
L.control.layers(baseLayer, overlays).addTo(map);
