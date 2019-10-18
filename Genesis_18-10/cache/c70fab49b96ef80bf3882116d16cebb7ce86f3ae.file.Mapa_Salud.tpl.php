<?php /* Smarty version Smarty-3.1.21, created on 2019-10-16 07:13:05
         compiled from "views\Mapas\Mapa_Salud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235455d8ae84c90aff7-50282306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c70fab49b96ef80bf3882116d16cebb7ce86f3ae' => 
    array (
      0 => 'views\\Mapas\\Mapa_Salud.tpl',
      1 => 1571202782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235455d8ae84c90aff7-50282306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8ae84c937252_51615530',
  'variables' => 
  array (
    'AUX' => 0,
    'Listado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8ae84c937252_51615530')) {function content_5d8ae84c937252_51615530($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Genesis</title>
        <style>
              html, body, #mapa {
                height: 96%;
                width:90%;
            }
        </style>
    <?php echo '<script'; ?>
 src="https://maps.google.com/maps/api/js?sensor=false"><?php echo '</script'; ?>
>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css"/>
        <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
var mapa;
function initialize() {
        //Mazate
        //var centroMapa = new google.maps.LatLng(14.5341702, -91.5033264);
        var centroMapa = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['LATITUD'];?>
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
        }
        
        // instancia un nuevo objeto Map
        mapa = new google.maps.Map(document.getElementById("mapa"), opcionesDeMapa);                                        
        
        // instancia unos nuevos marcadores ( Ubicaciones_Mapa )
        var marcador, pin   ;

        var url = "http:\/\/maps.google.com/mapfiles/ms/micons/";
        <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Listado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
            pin = url + '<?php echo $_smarty_tpl->tpl_vars['dato']->value['ICONO'];?>
' + ".png";
            marcador = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['dato']->value['LATITUD'];?>
, <?php echo $_smarty_tpl->tpl_vars['dato']->value['LONGITUD'];?>
),
                    map: mapa,
                    title: '<?php echo $_smarty_tpl->tpl_vars['dato']->value['LUGAR'];?>
',
                    icon: pin
            });
        <?php } ?>
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
