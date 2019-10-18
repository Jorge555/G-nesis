<?php /* Smarty version Smarty-3.1.21, created on 2019-06-03 05:30:24
         compiled from "views\BASE\Freporte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5137684305cf433250b2672-05912970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '986153394c542e222b59defc5310d35b26adc70a' => 
    array (
      0 => 'views\\BASE\\Freporte.tpl',
      1 => 1559532621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5137684305cf433250b2672-05912970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cf433250ecc39_91626257',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf433250ecc39_91626257')) {function content_5cf433250ecc39_91626257($_smarty_tpl) {?>
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
