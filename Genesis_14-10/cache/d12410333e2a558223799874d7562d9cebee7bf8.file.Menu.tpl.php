<?php /* Smarty version Smarty-3.1.21, created on 2019-05-04 15:44:05
         compiled from "views\Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13457814865ccd97255aee34-47613482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd12410333e2a558223799874d7562d9cebee7bf8' => 
    array (
      0 => 'views\\Menu.tpl',
      1 => 1546943241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13457814865ccd97255aee34-47613482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ccd97255e4462_79724801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccd97255e4462_79724801')) {function content_5ccd97255e4462_79724801($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/estilos.css" >
    <?php echo '<script'; ?>
 src="js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark ">
           <a class="navbar-brand" href="">
             <img src="Imagenes/portada/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                         Juego para que  el jugador, pueda jugar el Juego
           </a>
       </nav>

<div class="container position-relative">
<div class="row justify-content-md-center">
    <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="index.php?accion=Jugar">Jugar</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configureciones</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?accion=Copas">Copas</a>
        <a class="dropdown-item" href="index.php?accion=Mazo">Mazo</a>
        <a class="dropdown-item" href="index.php?accion=Partida">Partidas</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="index.php?accion=Cartas">Cartas mas Usadas</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?accion=Menu">Menu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?accion=Login" tabindex="-1" aria-disabled="true">Salir</a>
    </li>
</div>
  </div>
  </body>
</html>
<?php }} ?>
