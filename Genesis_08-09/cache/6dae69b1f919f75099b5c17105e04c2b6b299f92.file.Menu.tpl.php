<?php /* Smarty version Smarty-3.1.21, created on 2019-09-09 00:52:30
         compiled from "views\BASE\Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252345d75696a603c73-58030953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dae69b1f919f75099b5c17105e04c2b6b299f92' => 
    array (
      0 => 'views\\BASE\\Menu.tpl',
      1 => 1567983147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252345d75696a603c73-58030953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d75696a652ca4_54170564',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d75696a652ca4_54170564')) {function content_5d75696a652ca4_54170564($_smarty_tpl) {?>
<nav class="mb-4 navbar navbar-expand-lg navbar-dark indigo">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="home" class="navbar-brand" href="index.php?accion=Login">GENESIS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php?accion=Usuario/Lista">Usuarios</a></li>
                <li>  <a href="index.php?accion=Mujeres/Lista">Pacientes</a></li>
                <li>  <a href="index.php?accion=Personal/Lista">Personal</a></li>
                  <li>  <a href="index.php?accion=Contrareferencia/Lista">Referencias Recividas</a></li>
                    <li><a href="index.php?accion=Reportes/Reportes">Reportes</a></li>

          <!---      <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-haspopup="true"
                       aria-expanded="false">Reportes<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                    </ul>
                </li>

              --->
                  <li>  <a href="index.php?accion=Index" >Cerrar Session</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php }} ?>
