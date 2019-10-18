<?php /* Smarty version Smarty-3.1.21, created on 2019-05-31 23:40:17
         compiled from "views\BASE\VALIDACIONREFE.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12779533435cf182ed807c80-15008935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e4cc87f490aaeef99b53e70b715ff0d77149c7a' => 
    array (
      0 => 'views\\BASE\\VALIDACIONREFE.tpl',
      1 => 1559338815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12779533435cf182ed807c80-15008935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cf182ed887422_87097212',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf182ed887422_87097212')) {function content_5cf182ed887422_87097212($_smarty_tpl) {?>
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
