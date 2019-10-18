<?php /* Smarty version Smarty-3.1.21, created on 2019-10-18 19:08:19
         compiled from "views\Mapas\Mapa_Salud1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284335da8860be7d211-00058243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a03402d1a4f6233cb3ddb5d5fc92585b061c5f' => 
    array (
      0 => 'views\\Mapas\\Mapa_Salud1.tpl',
      1 => 1571418495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284335da8860be7d211-00058243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5da8860bf16952_97059633',
  'variables' => 
  array (
    'AUX' => 0,
    'Listado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da8860bf16952_97059633')) {function content_5da8860bf16952_97059633($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css"/>

        <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.css" />
        <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">

    </head>
    <body>
        <div id="map"></div>
        <div class='pointer'></div>
        <?php echo '<script'; ?>
 type="text/javascript">
            
            var fondo="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
            //var fondo="http://{s}.tile.osm.org/{z}/{x}/{y}.png";
            
            var centro = new L.LatLng(14.3148526, <?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['LONGITUD'];?>
);
            var map = new L.Map("map", {
                center: centro,
              zoom: 10,
              layers: L.tileLayer(fondo)
            });
            L.control.scale().addTo(map);

            // draggable: true Permite mover el marcador
            // .bindPopup("Info") muestra una ventana con datos
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Listado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                //var icono = L.icon(iconUrl: "http:\/\/maps.google.com/mapfiles/ms/micons/"+ 'red-dot.png');
                var marker = L.marker([<?php echo $_smarty_tpl->tpl_vars['dato']->value['LATITUD'];?>
, <?php echo $_smarty_tpl->tpl_vars['dato']->value['LONGITUD'];?>
], {
                    draggable: false,
                    title: '<?php echo $_smarty_tpl->tpl_vars['dato']->value['LUGAR'];?>
'
                    ,icon: new L.Icon({
                        iconUrl: 'http:\/\/maps.google.com/mapfiles/ms/micons/<?php echo $_smarty_tpl->tpl_vars['dato']->value['ICONO'];?>
.png'
                    })
                }).bindPopup("Mostrar Mas Info").addTo(map);
            <?php } ?>
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

        <?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
