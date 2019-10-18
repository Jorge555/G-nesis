<?php
$template = new Smarty();
require ('Model/class.Contrareferencia.php');
session_start();
$alerta="";

if(!empty($_SESSION['IDRF']))
{
//unset($_SESSION['UM']);
$template->assign("AUX",BuscarCONTRAREF($_SESSION['IDRF']));
}else{
  $alerta='<div class="alert alert-danger">
    <strong>Error!</strong>Usuario repetido.
  </div>';
}

if (isset($_POST['Regresar'])) {
header('location: index.php?accion=Contrareferencia/Lista');
}

$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Contrareferencia/Ver.tpl');

 ?>
