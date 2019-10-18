<?php
	session_start();
	if(!isset($_SESSION['Usuario'])){
		header('location: index.php?accion=index');
	}
	$template = new Smarty();
	require ('Model/class.Mapas.php');
	$template->assign("TIPO",$_SESSION['TipoU']);
	$template->assign("Listado",ListadoM());
	$template->display('views/BASE/cabecera.tpl');
	$template->display('views/BASE/Menu.tpl');
	$template->display('views/Mapas/Lista_Ubicaciones.tpl');
?>