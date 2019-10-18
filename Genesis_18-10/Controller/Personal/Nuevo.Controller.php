<?php
	session_start();
	if(!isset($_SESSION['Usuario']) || $_SESSION['TipoU']==0){
		header('location: index.php?accion=index');
	}
require ('Model/class.Distrito.php');	
require ('Model/class.Puesto.php');
require ('Model/class.Personal.php');
$template = new Smarty();
$alerta='';
if (isset($_POST['Guardar'])) {
{
if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
$a=$_POST["nombre"];
$b=$_POST["apellido"];
$c=$_POST["sexo"];
$d=$_POST["puesto"];
$e=$_POST["distrito"];
$f=$_POST["activo"];
if(insertarP($a,$b,$c,$d,$e,$f)){
header('location: index.php?accion=Personal/Lista');
}else{
$alerta='<div class="alert alert-danger">
  <strong>Error!</strong>Error
</div>';
}
}}}
$template->assign("TIPO",$_SESSION['TipoU']);
$template->assign("Distrito",ListadoD());
$template->assign("Puesto",ListadoPuesto());
$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Personal/Nuevo.tpl');

 ?>
