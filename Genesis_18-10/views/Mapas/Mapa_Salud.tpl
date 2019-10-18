<!DOCTYPE html>
<html>
    <head>
        <title>Genesis</title>
        <style>
              html, body, #mapa {
                height: 96%;
                width:90%;
            }
        </style>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css"/>
        <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>

    <script>
var mapa;
function initialize() {
        //Mazate
        //var centroMapa = new google.maps.LatLng(14.5341702, -91.5033264);
        var centroMapa = new google.maps.LatLng({$AUX[0].LATITUD}, {$AUX[0].LONGITUD});
        if ({$AUX[0].DISTRITO}=='3') {
            var opcionesDeMapa = {
                zoom: 10.5,
                center: new google.maps.LatLng(14.3148526, {$AUX[0].LONGITUD}),
                mapTypeId: google.maps.MapTypeId.ROADMAP //SATELITE, HYBRID, ROADMAP, TERRAIN
            };
        }else{
            var opcionesDeMapa = {
                zoom: 16,
                center: centroMapa,
                mapTypeId: google.maps.MapTypeId.ROADMAP //SATELITE, HYBRID, ROADMAP, TERRAIN
            };
        }
        
        // instancia un nuevo objeto Map
        mapa = new google.maps.Map(document.getElementById("mapa"), opcionesDeMapa);                                        
        
        // instancia unos nuevos marcadores ( Ubicaciones_Mapa )
        var marcador, pin   ;

        var url = "http:\/\/maps.google.com/mapfiles/ms/micons/";
        {foreach from=$Listado item=dato}
            pin = url + '{$dato.ICONO}' + ".png";
            marcador = new google.maps.Marker({
                    position: new google.maps.LatLng({$dato.LATITUD}, {$dato.LONGITUD}),
                    map: mapa,
                    title: '{$dato.LUGAR}',
                    icon: pin
            });
        {/foreach}
}
        // inicializa el mapa cuando la ventana se haya cargado:
        google.maps.event.addDomListener(window, "load", initialize);
        
            </script>
  </head>
  <body>
    <div id="mapa"></div>
  </body>
</html>