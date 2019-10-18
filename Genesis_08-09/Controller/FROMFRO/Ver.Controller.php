<?php
$template = new Smarty();
require ('Model/class.FRO.php');
session_start();
$alerta='';
if(!empty($_SESSION['AGO']))
{
//unset($_SESSION['UM']);
$template->assign("AUX",BuscarFRO($_SESSION['AGO']));
}else{
  $alerta='<div class="alert alert-danger">
    <strong>Error!</strong>Usuario repetido.
  </div>';
}
if (isset($_POST['Regresar'])) {
header('location: index.php?accion=FROMFRO/Lista');
}


$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/FROMFRO/Ver.tpl');

 ?>
