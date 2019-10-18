<?php /* Smarty version Smarty-3.1.21, created on 2019-09-27 04:46:03
         compiled from "views\BASE\VALIDACIONREFE.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29825d8d77eb572aa1-83976069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e39877e0cfe9a0ac8084cb700517ec9a4a5bacae' => 
    array (
      0 => 'views\\BASE\\VALIDACIONREFE.tpl',
      1 => 1559338815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29825d8d77eb572aa1-83976069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8d77eb5fb123_69686441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8d77eb5fb123_69686441')) {function content_5d8d77eb5fb123_69686441($_smarty_tpl) {?>
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
    document.getElementById('dato3').value=ano+"-"+mes+"-"+dia;
    document.getElementById('dato19').value=ano+"-"+mes+"-"+dia;
    var hora=fecha.getHours();
    var seg=fecha.getMinutes();

document.getElementById('dato4').value=hora+":"+seg;

  }
//hora

<?php echo '</script'; ?>
>
<?php }} ?>
