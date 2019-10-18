<?php /* Smarty version Smarty-3.1.21, created on 2019-10-13 05:13:44
         compiled from "views\BASE\Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141425d8ae8502125e2-55920502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dae69b1f919f75099b5c17105e04c2b6b299f92' => 
    array (
      0 => 'views\\BASE\\Menu.tpl',
      1 => 1570936423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141425d8ae8502125e2-55920502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8ae85023abf3_80560312',
  'variables' => 
  array (
    'TIPO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8ae85023abf3_80560312')) {function content_5d8ae85023abf3_80560312($_smarty_tpl) {?><nav class="mb-4 navbar navbar-expand-lg navbar-dark indigo">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="home" class="navbar-brand" href="index.php?accion=Login"><span class="glyphicon glyphicon-home">GENESIS</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <!-- <?php if ($_smarty_tpl->tpl_vars['TIPO']->value=="1") {?> -->
        <li><a href="index.php?accion=Usuario/Lista" ><span class="glyphicon glyphicon-user"></span>Usuarios</a></li>
        <li><a href="index.php?accion=Personal/Lista"><span class="glyphicon glyphicon-user"></span>Personal</a></li>
        <!-- <?php }?> -->
        <li><a href="index.php?accion=Mujeres/Lista"><span class="glyphicon glyphicon-list-alt"></span>Pacientes</a></li>
        <li> <a href="index.php?accion=Contrareferencia/Lista"><span class="glyphicon glyphicon-envelope"></span>Referencias Recibidas</a></li>
        <li><a href="index.php?accion=Reportes/Reportes"><span class="glyphicon glyphicon-list"></span>Reportes</a></li>
 <!--     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"role="button" aria-haspopup="true"
            aria-expanded="false">Reportes<span class="caret"></span></a>
              <ul class="dropdown-menu">

              </ul>
           </li>-->
        <!-- <?php if ($_smarty_tpl->tpl_vars['TIPO']->value=="1") {?> -->
        <li><a href="index.php?accion=Mapas/Lista"><span class="glyphicon glyphicon-globe"></span>Mapa</a></li>
        <!-- <?php } else { ?> -->
        <li><a href="index.php?accion=Mapas/Mapas"><span class="glyphicon glyphicon-globe"></span>Mapa</a></li>
        <!-- <?php }?> -->
        <li><a href="index.php?accion=Logout"><span class="glyphicon glyphicon-off">Cerrar Session</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php }} ?>
