<?php
$template = new Smarty();
require ('Model/class.Mujeres.php');
require ('Model/class.FRO.php');
session_start();
$alerta="0";
$DATOS='';

if(!empty($_SESSION['VRM']))
{
$DATOS= $_SESSION['VRM'];
$template->assign("IDEB",BuscarM($DATOS));
$template->assign("RFRO",ListadoFRO($DATOS));
//unset($_SESSION['UM']);
}
//--------------------------------------------------------------------
if (isset($_POST['Nuevo'])) {
 $_SESSION['VRM']=$_POST['Nuevo'];
header('location: index.php?accion=FROMFRO/FROMFRO');
}
//--------------------------------------------------------------------
if (isset($_POST['Registro'])) {
$_SESSION['AGO']=$_POST['Registro'];
header('location: index.php?accion=FROMFRO/Ver');
}
//--------------------------------------------------------------------
if (isset($_POST['Referir'])) {
  $_SESSION['AGO']=$_POST['Referir'];
header('location: index.php?accion=FROMREFERENCIA/FROMREFERENCIA');
}


$template->assign("Referido",$alerta);
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/FROMFRO/Listado.tpl');

 ?>
