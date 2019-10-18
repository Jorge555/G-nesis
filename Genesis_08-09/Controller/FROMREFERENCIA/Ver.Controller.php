<?php
$template = new Smarty();
require ('Model/class.Mujeres.php');
require ('Model/class.FROMREFERENCIA.php');
session_start();
$alerta='';
if(!empty($_SESSION['VRM']))
{
$DATOS= $_SESSION['VRM'];
$template->assign("AUX",BuscarM($DATOS));
$DATOS=$_SESSION['IDRF'];
}

if(!empty($_SESSION['IDRF']))
{
  $template->assign("AUX2",BuscarREFE($_SESSION['IDRF']));
  $template->assign("AUX3",SERVDATA($_SESSION['IDRF']));
}else{
  $alerta='<div class="alert alert-danger">
    <strong>Error!</strong>Usuario repetido.
  </div>';
}


if (isset($_POST['Regresar'])) {
header('location: index.php?accion=FROMREFERENCIA/Lista');
}


$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/FROMREFERENCIA/Ver.tpl');

 ?>
