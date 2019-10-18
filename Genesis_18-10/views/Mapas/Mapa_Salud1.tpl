<!DOCTYPE html>
<html>
    <head>
        <title>Genesis</title>
        <style>
              html, body, #map {
                height: 95%;
                width:90%;
                background: gray;
            }
            #mapSearchContainer{
                position:fixed;
                top:20px;
                right: 40px;
                height:30px;
                width:180px;
                z-index:110;
                font-size:10pt;
                color:#5d5d5d;
                border:solid 1px #bbb;
                background-color:#f8f8f8;
            }
            .pointer{
                position:absolute;
                top:86px;
                left:60px;
                z-index:99999;
            }
        </style>
        <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css"/>

        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.css" />
        <script src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"></script>

        <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
        <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">

    </head>
    <body>
        <div id="map"></div>
        <div class='pointer'></div>
        <script type="text/javascript">
            {literal}
            var fondo="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
            //var fondo="http://{s}.tile.osm.org/{z}/{x}/{y}.png";
            {/literal}
            var centro = new L.LatLng(14.3148526, {$AUX[0].LONGITUD});
            var map = new L.Map("map", {
                center: centro,
              zoom: 10,
              layers: L.tileLayer(fondo)
            });
            L.control.scale().addTo(map);

            // draggable: true Permite mover el marcador
            // .bindPopup("Info") muestra una ventana con datos
            {foreach from=$Listado item=dato}
                //var icono = L.icon(iconUrl: "http:\/\/maps.google.com/mapfiles/ms/micons/"+ 'red-dot.png');
                var marker = L.marker([{$dato.LATITUD}, {$dato.LONGITUD}], {
                    draggable: false,
                    title: '{$dato.LUGAR}'
                    ,icon: new L.Icon({
                        iconUrl: 'http:\/\/maps.google.com/mapfiles/ms/micons/{$dato.ICONO}.png'
                    })
                }).bindPopup("Mostrar Mas Info").addTo(map);
            {/foreach}
            /*map.on('click', function(e) { 
                //alert("LAT: " + e.latlng.lat + ", LONG: " + e.latlng.lng);
                L.marker([e.latlng.lat,e.latlng.lng]).bindPopup("LAT: " + e.latlng.lat + ", LONG: " + e.latlng.lng).openPopup().addTo(map);
            });*/
            /*L.Routing.control({
                waypoints: [
                    L.latLng(14.538333, -91.505278),
                    //L.latLng(14.536667, -91.506389)
                    L.latLng(14.538684, -91.415542)
                ]
            }).addTo(map);*/

            var searchControl = new L.esri.Controls.Geosearch().addTo(map);

            var results = new L.LayerGroup().addTo(map);

            searchControl.on('results', function(data){
                results.clearLayers();
                for (var i = data.results.length - 1; i >= 0; i--) {
                    results.addLayer(L.marker(data.results[i].latlng).bindPopup(data.results[i].name).openPopup());
                }
            });

        </script>
    </body>
</html>