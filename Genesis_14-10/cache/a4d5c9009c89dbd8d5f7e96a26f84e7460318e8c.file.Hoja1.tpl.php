<?php /* Smarty version Smarty-3.1.21, created on 2019-05-04 15:44:15
         compiled from "views\Hoja1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7171562015ccd972f591098-49015992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4d5c9009c89dbd8d5f7e96a26f84e7460318e8c' => 
    array (
      0 => 'views\\Hoja1.tpl',
      1 => 1546943847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7171562015ccd972f591098-49015992',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ccd972f5e6346_21635624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccd972f5e6346_21635624')) {function content_5ccd972f5e6346_21635624($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css" >
	<?php echo '<script'; ?>
 src="js/jquery-1.11.1.min.js">

	<?php echo '</script'; ?>
>

<body>
	<nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-center">
	    <li class="page-item ">
	      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
	    </li>
	    <li class="page-item"><a class="page-link" href="index.php?accion=hoja1">1</a></li>
	    <li class="page-item"><a class="page-link" href="index.php?accion=hoja2">2</a></li>
	    <li class="page-item"><a class="page-link" href="index.php?accion=hoja3">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#">Next</a>
	    </li>
	  </ul>
	</nav>



<div class="container" id="tablero">
  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/c1.png"  id="Esqueleto">
    </div>
    <div class="col-sm">
       <img src="Imagenes/c2.png" id="Espiritu_de_hielo">
    </div>
    <div class="col-sm">
       <img src="Imagenes/c3.png" id="Duende">
    </div>
  </div>


<div class="row">
    <div class="col-sm">
        <img src="Imagenes/c4.png" id="Descarga">
    </div>
    <div class="col-sm">
        <img src="Imagenes/c5.png" id="Murcielago">
    </div>
    <div class="col-sm">
        <img src="Imagenes/c6.png" id="Espiritu de fuego">
    </div>
  </div>


<div class="row ">
    <div class="col-sm">
      <img src="Imagenes/c7.png" id="Bola de nieve">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c8.png" id="Arquera">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c9.png" id="Flechas">
    </div>
  </div>


  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/c10.png" id="Caballero">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c19.png" id="Golem de hielo">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c20.png" id="Megaesbirro">
    </div>
  </div>


  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/c21.png" id="Lanzadardos">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c22.png" id="Bola de fuego">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c23.png" id="Mini pekka">
    </div>
  </div>

</div>


<br></br>
<br></br>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/mazo.png">
    </div>

  </div>
</div>



<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function(){


var Imagenes = document.querySelectorAll("#tablero img");

for (var i = 0; i < Imagenes.length; i++) {
  Imagenes[i].addEventListener("click",carrito,false);
}

});

function  carrito(num){

  if (num.target==Esqueleto) {
    $("#Esqueleto").replaceWith("<div id='Esqueleto'> Carta Elegida</div>");
} if (num.target==Espiritu_de_hielo){
    $("#Espiritu_de_hielo").replaceWith("<div id='Espiritu_de_hielo'> Carta Elegida</div>");
  } if (num.target==Duende){
    $("#Duende").replaceWith("<div id='Duende'> Carta Elegida</div>");
  }

}





<?php echo '</script'; ?>
>








</body>
</html>
<?php }} ?>
