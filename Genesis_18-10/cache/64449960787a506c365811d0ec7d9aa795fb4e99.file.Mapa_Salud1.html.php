<?php /* Smarty version Smarty-3.1.21, created on 2019-10-18 02:39:39
         compiled from "views\Mapas\Mapa_Salud1.html" */ ?>
<?php /*%%SmartyHeaderCode:67705da6a7a94d7d68-17356964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64449960787a506c365811d0ec7d9aa795fb4e99' => 
    array (
      0 => 'views\\Mapas\\Mapa_Salud1.html',
      1 => 1571359164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67705da6a7a94d7d68-17356964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5da6a7a952b358_72156714',
  'variables' => 
  array (
    'AUX' => 0,
    'Listado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da6a7a952b358_72156714')) {function content_5da6a7a952b358_72156714($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Genesis</title>
        <style>
              html, body, #map {
                height: 96%;
                width:90%;
            }
        </style>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css"/>
        <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div id="map"></div>
        <?php echo '<script'; ?>
 type="text/javascript">
        
        //var centroMapa = new google.maps.LatLng(14.5341702, -91.5033264);
        /*var centroMapa = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['LATITUD'];?>
, <?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['LONGITUD'];?>
);
        if (<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['DISTRITO'];?>
=='3') {
            var opcionesDeMapa = {
                zoom: 10.5,
                center: new google.maps.LatLng(14.3148526, <?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['LONGITUD'];?>
),
                mapTypeId: google.maps.MapTypeId.ROADMAP //SATELITE, HYBRID, ROADMAP, TERRAIN
            };
        }else{
            var opcionesDeMapa = {
                zoom: 16,
                center: centroMapa,
                mapTypeId: google.maps.MapTypeId.ROADMAP //SATELITE, HYBRID, ROADMAP, TERRAIN
            };
        }*/
            
            var mostrar_mapa="https://tile.openstreetmap.org/{z}/{x}/{y}.png";
            
        
            // Ubicacion del centro del mapa

            //Mostrar el mapa
            var map = new L.Map("map", {
                center: endPointLocation,
              zoom: 10,
              layers: L.tileLayer(mostrar_mapa)
            });
            
            // draggable: true Permite mover el marcador
            // .bindPopup(Ubicaciones_Mapa[i].title) muestra una ventana con datos
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Listado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                L.marker([<?php echo $_smarty_tpl->tpl_vars['dato']->value['LATITUD'];?>
, <?php echo $_smarty_tpl->tpl_vars['dato']->value['LONGITUD'];?>
], {
                    draggable: true,
                    title: '<?php echo $_smarty_tpl->tpl_vars['dato']->value['LUGAR'];?>
'
                }).addTo(map);
            <?php } ?>
            <?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
