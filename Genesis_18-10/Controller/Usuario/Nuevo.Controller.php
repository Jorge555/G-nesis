<?php
session_start();
	if(!isset($_SESSION['Usuario']) || $_SESSION['TipoU']==0){
		header('location: index.php?accion=index');
	}
require ('Model/class.Rol.php');
require ('Model/class.Personal.php');
require ('Model/class.Usuario.php');
$template = new Smarty();
$alerta='';
if (isset($_POST['UG'])) {
{
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
$a=$_POST["user"];
$b=$_POST["pass"];
$c=$_POST["rol"];
$d=$_POST["personal"];
$e=$_POST["activo"];
if(insertarU($a,$b,$c,$d,$e)){
header('location: index.php?accion=Usuario/Lista');
}else{
$alerta='<div class="alert alert-danger">
  <strong>Error!</strong>Error
</div>';
}
}}}
$template->assign("TIPO",$_SESSION['TipoU']);
$template->assign("Rol",ListadoR());
$template->assign("Personal",ListadoP());
$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Usuario/Nuevo.tpl');
?>
