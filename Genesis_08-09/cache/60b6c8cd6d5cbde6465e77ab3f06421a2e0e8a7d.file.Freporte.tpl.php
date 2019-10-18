<?php /* Smarty version Smarty-3.1.21, created on 2019-09-19 17:38:53
         compiled from "views\BASE\Freporte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9970657305d83a10d80bf91-98498263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b6c8cd6d5cbde6465e77ab3f06421a2e0e8a7d' => 
    array (
      0 => 'views\\BASE\\Freporte.tpl',
      1 => 1559532621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9970657305d83a10d80bf91-98498263',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d83a10d885d98_34043224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83a10d885d98_34043224')) {function content_5d83a10d885d98_34043224($_smarty_tpl) {?>
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
