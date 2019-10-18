<?php /* Smarty version Smarty-3.1.21, created on 2019-09-26 05:24:26
         compiled from "views\Mapas\Mapa_Salud.html" */ ?>
<?php /*%%SmartyHeaderCode:133335d8af39f9b1779-67678023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31c0bbf3e4a80acafa73d94d178a22a1a2ad1fc' => 
    array (
      0 => 'views\\Mapas\\Mapa_Salud.html',
      1 => 1569468262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133335d8af39f9b1779-67678023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8af39f9e4d89_92594698',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8af39f9e4d89_92594698')) {function content_5d8af39f9e4d89_92594698($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="description" content="w3.unpocodetodo.info - herramientas &uacute;tiles para el desarrollo web. Ejemplo de un mapa sencillo de Google con varios  marcadores." />
    <meta name="keywords" content="w3.unpocodetodo.info - herramientas, &uacute;tiles, desarrollo web, mapa, Google, opcionesDeMapa, mapTypeId, center ,zoom, LatLng, Map, addDomListener, marcadores, Marker, Ubicaciones_Mapa, marcar varios puntos"/>
    <link rel="icon" type="image/png" href="http://w3.unpocodetodo.info/images/w3.png" />
    <meta charset="utf-8">
    <style>
      html, body, #mapa {
        height: 90%;
        width:90%;
        margin: 0px;
        padding: 0px
      }
        #info { width:300px}
    </style>
    <?php echo '<script'; ?>
 src="https://maps.google.com/maps/api/js?sensor=false"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
var mapa;
function initialize() {
        
        var centroMapa = new google.maps.LatLng(14.5341702, -91.5033264);
    
        var opcionesDeMapa = {
                zoom: 15,
                center: centroMapa,
                mapTypeId: google.maps.MapTypeId.ROADMAP //SATELITE, HYBRID, ROADMAP, TERRAIN
        };
        // instancia un nuevo objeto Map
        mapa = new google.maps.Map(document.getElementById("mapa"), opcionesDeMapa);                                        
        
        // instancia unos nuevos marcadores ( Ubicaciones_Mapa )
        var marcador, pin   ;

        var url = "http:\/\/maps.google.com/mapfiles/ms/micons/";
        for( var i = 0; i<Ubicaciones_Mapa.length; i++){
        pin = url + "red-dot"+ ".png";
        marcador = new google.maps.Marker({
                position: new google.maps.LatLng(14.5341702, -91.5033264),
                map: mapa,
                title: 'Mazate',
                icon: pin
        });     
        }
}
        // inicializa el mapa cuando la ventana se haya cargado:
        google.maps.event.addDomListener(window, "load", initialize);
        
            <?php echo '</script'; ?>
>
  </head>
  <body>
    <div id="mapa"></div>
  </body>
</html><?php }} ?>
