<?php /* Smarty version Smarty-3.1.21, created on 2019-09-20 17:36:37
         compiled from "views\BASE\Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19718619155d83a0d86f57b3-13522287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58192ccaa36395cc969f5b08b9cb95a007af0a1e' => 
    array (
      0 => 'views\\BASE\\Menu.tpl',
      1 => 1568993651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19718619155d83a0d86f57b3-13522287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d83a0d876f5c1_13000940',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83a0d876f5c1_13000940')) {function content_5d83a0d876f5c1_13000940($_smarty_tpl) {?>
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
                  <li>  <a href="index.php?accion=Contrareferencia/Lista">Referencias Recibidas</a></li>
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
