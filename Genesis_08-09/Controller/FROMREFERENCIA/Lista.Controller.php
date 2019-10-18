<?php
$template = new Smarty();
require ('Model/class.Mujeres.php');
require ('Model/class.FRO.php');
require ('Model/class.FROMREFERENCIA.php');
session_start();
$alerta='';
$DATOS='';
if(!empty($_SESSION['VRM']))
{
$DATOS= $_SESSION['VRM'];
$template->assign("IDEB",BuscarM($DATOS));
$template->assign("RFDATA",RFDATA($DATOS));
//unset($_SESSION['UM']);
}
//--------------------------------------------------------------------
if (isset($_POST['Registro'])) {
$_SESSION['IDRF']=$_POST['Registro'];
header('location: index.php?accion=FROMREFERENCIA/Ver');
}

if (isset($_POST['RCONTRA'])) {
$_SESSION['IDRF']=$_POST['RCONTRA'];
header('location: index.php?accion=Contrareferencia/Ver2');
}

if (isset($_POST['IMPRIMIR'])) {
$_SESSION['IDRF']=$_POST['IMPRIMIR'];
header('location: index.php?accion=Reportes/BOLETAREFERENCIA');
}

$template->assign("Mensaje",$alerta);
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/FROMREFERENCIA/Listado.tpl');

 ?>
