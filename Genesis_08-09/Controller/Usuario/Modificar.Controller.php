<?php
$template = new Smarty();
require ('Model/class.Usuario.php');
require ('Model/class.Distrito.php');
require ('Model/class.Rol.php');
require ('Model/class.Personal.php');
session_start();
$alerta='';
if(!empty($_SESSION['UM']))
{
$alerta=$_SESSION['UM'];
//unset($_SESSION['UM']);
$template->assign("AUX",BuscarU($alerta));
}

if (isset($_POST['UG'])) {
{
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
$f=$_POST["id"];
$a=$_POST["user"];
$b=$_POST["pass"];
$dist=$_POST["distrito"];
$c=$_POST["rol"];
$e=$_POST["activo"];
if(ActualizarU($a,$b,$c,$e,$dist,$f)){
header('location: index.php?accion=Usuario/Lista');
}else{
$alerta='<div class="alert alert-danger">
  <strong>Error!</strong>Usuario repetido.
</div>';
}
}}}


$template->assign("Distrito",ListadoD());
$template->assign("Rol",ListadoR());
$template->assign("Personal",ListadoP());
$template->assign("Mensaje",$alerta);
$template->assign("Listado",ListadoU());

$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/Usuario/Modificar.tpl');

 ?>
