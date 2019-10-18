<?php
session_start();
$template = new Smarty();
require ('Model/class.Mujeres.php');
$id;

if (isset($_POST['Registro'])) {
$_SESSION['VRM']=$_POST['Registro'];
header('location: index.php?accion=Mujeres/Ver');
}
//-------------------------------------------------------------
if (isset($_POST['Referencias'])) {
 $_SESSION['VRM']=$_POST['Referencias'];
header('location: index.php?accion=FROMREFERENCIA/Lista');
}

//--------------------------------------------------------------------
if (isset($_POST['Antecedentes'])) {
 $_SESSION['VRM']=$_POST['Antecedentes'];
header('location: index.php?accion=FROMFRO/Lista');
}

//--------------------------------------------------------------------
if (isset($_POST['EMBARAZADA'])) {
$id=$_POST['EMBARAZADA'];
EstadoE($id,1);
header('location: index.php?accion=Mujeres/Lista');
}

if (isset($_POST['POSPARTO'])) {
$id=$_POST['POSPARTO'];
EstadoE($id,0);
header('location: index.php?accion=Mujeres/Lista');
}

//--------------------------------------------------------------------
if (isset($_POST['Modificar'])) {
$id=$_POST['Modificar'];
header('location: index.php?accion=Mujeres/Lista');
}
$template->assign("TIPO",$_SESSION['TipoU']);
$template->assign("Listado",ListadoMujeres());
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Mujeres/Listado.tpl');

 ?>
