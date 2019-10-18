<?php
	session_start();
	if(!isset($_SESSION['Usuario'])){
		header('location: index.php?accion=index');
	}
require ('Model/class.Distrito.php');
require ('Model/class.Mapas.php');
$template = new Smarty();
$alerta='';
if (isset($_POST['MG'])) {
	if (!empty($_POST['latitud']) && !empty($_POST['longitud'])) {
		$a=$_POST["lugar"];
		$b=$_POST["latitud"];
		$c=$_POST["longitud"];
		$d=$_POST["distrito"];
		$e=$_POST["icono"];
		$f=$_POST["activo"];
		if(insertarM($a,$b,$c,$d,$e,$f)){
		header('location: index.php?accion=Mapas/Lista');
		}else{
		$alerta='<div class="alert alert-danger">
		  <strong>Error!</strong>Error
		</div>';
		}
	}
}
$template->assign("TIPO",$_SESSION['TipoU']);
$template->assign("Distrito",ListadoD());
$template->assign("Iconos",ListadoIconos());
$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Mapas/Nuevo.tpl');
?>
