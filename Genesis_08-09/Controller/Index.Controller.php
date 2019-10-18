<?php
$template = new Smarty();
require ('Model/class.Usuario.php');
$Mensaje='';
session_start();
session_destroy();
if (isset($_POST['Login'])) {
  $a=$_POST["usu"];    $b=$_POST["pass"];
if(Login($a,$b)){
  $_SESSION['Usuario']=$a;
  $_SESSION['Distrito']=Distrito($a);
  header('location: index.php?accion=Login');
}else {
$Mensaje='<div class="alert alert-danger">
    <strong>Usuario o Pass Incorrectos</strong>
  </div>';
}
}



$template->assign("Mensaje",$Mensaje);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/index.tpl');
 ?>
