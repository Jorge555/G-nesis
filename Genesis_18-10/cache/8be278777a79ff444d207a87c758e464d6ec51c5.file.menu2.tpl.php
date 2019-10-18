<?php /* Smarty version Smarty-3.1.21, created on 2019-05-04 16:32:23
         compiled from "views\menu2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9905584275ccd9e128c0e31-45133504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be278777a79ff444d207a87c758e464d6ec51c5' => 
    array (
      0 => 'views\\menu2.tpl',
      1 => 1556980269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9905584275ccd9e128c0e31-45133504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ccd9e128f3a26_43736256',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccd9e128f3a26_43736256')) {function content_5ccd9e128f3a26_43736256($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?accion=Index">GENESIS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>  <a href="index.php?accion=FROMREFERENCIA">Referencias</a></li>
                <li><a href="index.php?accion=FROMFRO">FRO</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-haspopup="true"
                       aria-expanded="false">Otros<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/movimientoscontrol.co?op=nuevo">Agregar</a></li>
                        <li><a href="/movimientoscontrol.co?op=listar">Estados</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php }} ?>
