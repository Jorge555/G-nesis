<?php /* Smarty version Smarty-3.1.21, created on 2019-10-15 18:15:39
         compiled from "views\BASE\Freporte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14039049765da5f0abe7fd04-12238690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9daf42ccb9bd4d73f9506832a03eccf52bda2673' => 
    array (
      0 => 'views\\BASE\\Freporte.tpl',
      1 => 1559532621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14039049765da5f0abe7fd04-12238690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5da5f0abebcc08_51063711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da5f0abebcc08_51063711')) {function content_5da5f0abebcc08_51063711($_smarty_tpl) {?>
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
