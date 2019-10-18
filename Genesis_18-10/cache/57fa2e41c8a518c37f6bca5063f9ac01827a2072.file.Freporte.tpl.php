<?php /* Smarty version Smarty-3.1.21, created on 2019-09-26 07:43:26
         compiled from "views\BASE\Freporte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227725d8c4ffed33474-25093170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57fa2e41c8a518c37f6bca5063f9ac01827a2072' => 
    array (
      0 => 'views\\BASE\\Freporte.tpl',
      1 => 1559532621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227725d8c4ffed33474-25093170',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8c4ffed60e08_49905567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8c4ffed60e08_49905567')) {function content_5d8c4ffed60e08_49905567($_smarty_tpl) {?>
<?php echo '<script'; ?>
 type="text/jscript">

  window.onload = function(){ ///da los valores a los input de date
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia;
    if(mes<10)
      mes='0'+mes
    document.getElementById('dato1').value=ano+"-"+mes+"-"+dia;
    document.getElementById('dato2').value=ano+"-"+mes+"-"+dia;
        
  }

<?php echo '</script'; ?>
>
<?php }} ?>
