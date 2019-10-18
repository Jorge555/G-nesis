<?php
$template = new Smarty();
require ('Model/class.Personal.php');
$id;

if (isset($_POST['Baja'])) {
$id=$_POST['Baja'];
AEP(0,$id);
header('location: index.php?accion=Personal/Lista');
}


if (isset($_POST['Alta'])) {
$id=$_POST['Alta'];
AEP(1,$id);
header('location: index.php?accion=Personal/Lista');
}

  if (isset($_POST['Modificar'])) {
   session_start();
   $_SESSION['PM']=$_POST['Modificar'];
header('location: index.php?accion=Personal/Modificar');
    }


$template->assign("Listado",ListadoP());
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/Personal/Listado.tpl');
 ?>
