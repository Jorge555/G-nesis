<?php
	session_start();
	$template = new Smarty();
	
	//if (isset($_POST['usuario']) && isset($_POST['password'])) {
	//$acceso->Login($_POST['usuario'],$_POST['password']);
	//}else {
	//  session_start();
	///  session_destroy();
	//}
	if(!isset($_SESSION['Usuario'])){
		header('location: index.php?accion=index');
	}
	echo "  <h5> Sesión de <big>'".$_SESSION['Usuario']."' -- Distrito: '".$_SESSION['Distrito']."' -- Tipo: '".$_SESSION['TipoU']."'</big></h5>";
	$template->assign("TIPO",$_SESSION['TipoU']);
	$template->display('views/BASE/cabecera.tpl');
	$template->display('views/BASE/Menu.tpl');
	$template->display('views/Principal.tpl');
	//  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
	//header('location: index.tpl');
?>