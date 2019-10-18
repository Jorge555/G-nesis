<?php
	session_start();
	$template = new Smarty();
	require ('Model/class.Mujeres.php');
	$alerta='';
	if(!empty($_SESSION['VRM'])){
		$alerta=$_SESSION['VRM'];
		//unset($_SESSION['UM']);
		$template->assign("AUX",BuscarM($alerta));
	}
	$template->assign("TIPO",$_SESSION['TipoU']);
	$template->assign("Mensaje",$alerta);
	$template->display('views/BASE/cabecera.tpl');
	$template->display('views/BASE/Menu.tpl');
	$template->display('views/Mujeres/Ver.tpl');
 ?>
