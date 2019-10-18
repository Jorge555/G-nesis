<?php
$template = new Smarty();
require ('Model/class.Contrareferencia.php');
session_start();
$alerta="";


if (isset($_POST['Registro'])) {
$_SESSION['IDRF']=$_POST['Registro'];
header('location: index.php?accion=FROMREFERENCIA/Ver2');
}

if (isset($_POST['Registro2'])) {
$_SESSION['IDRF']=$_POST['Registro2'];
header('location: index.php?accion=Contrareferencia/Ver');
}

$template->assign("LRC",ListadoRefe());
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/Contrareferencia/Listado.tpl');

 ?>
