<?php
	session_start();
	if(!isset($_SESSION['Usuario']) || $_SESSION['TipoU']==0){
		header('location: index.php?accion=index');
	}
	$template = new Smarty();
	require ('Model/class.Usuario.php');
	$id;
	if (isset($_POST['Baja'])) {
		$id=$_POST['Baja'];
		ActualizarEstado(0,$id);
		header('location: index.php?accion=Usuario/Lista');
	}
	if (isset($_POST['Alta'])) {
	  	$id=$_POST['Alta'];
		ActualizarEstado(1,$id);
		header('location: index.php?accion=Usuario/Lista');
	}
  	if (isset($_POST['Modificar'])) {
    	session_start();
    	$_SESSION['UM']=$_POST['Modificar'];
		header('location: index.php?accion=Usuario/Modificar');
    }
    $template->assign("TIPO",$_SESSION['TipoU']);
	$template->assign("Listado",ListadoU());
	$template->display('views/BASE/Menu.tpl');
	$template->display('views/BASE/cabecera.tpl');
	$template->display('views/Usuario/Listado.tpl');
 ?>
