<?php
	session_start();
	if(!isset($_SESSION['Usuario'])){
		header('location: index.php?accion=index');
	}
	$template = new Smarty();
	require ('Model/class.Mapas.php');
	$template->assign("TIPO",$_SESSION['TipoU']);
	$template->assign("Mapa",'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
	if ($_SESSION['TipoU']=='1') {
		if (isset($_POST['MapaD'])) {
			$_SESSION['Distrito']=$_POST['distrito'];
			$template->assign("AUX",BuscarCentro($_SESSION['Distrito']));
			$template->assign("Listado",ListadoMD($_SESSION['Distrito']));			
		}else{
			header('location: index.php?accion=Mapas/Lista');
		}
	} else {
		$template->assign("AUX",BuscarCentro($_SESSION['Distrito']));
		$template->assign("Listado",ListadoMD($_SESSION['Distrito']));
	}
	$template->display('views/BASE/cabecera.tpl');
	$template->display('views/BASE/Menu.tpl');
	//$template->display('views/Mapas/Mapa_Salud.tpl');
	$template->display('views/Mapas/Mapa_Salud1.tpl');

?>
