<?php
$template = new Smarty();
require ('Model/class.Mujeres.php');
require ('Model/class.FROMREFERENCIA.php');
require ('Model/class.Contrareferencia.php');
session_start();
$alerta='';
$ID;
if(!empty($_SESSION['IDRF']))
{
  $ID=$_SESSION['IDRF'];
//unset($_SESSION['UM']);
$template->assign("DATO",$ID);
}


if (isset($_POST['Guardar'])) {
  $a=$_POST["ID"];
  $b=$_POST["dato1"];
  $c=$_POST["dato2"];
  $d=$_POST["dato3"];
  $e=$_POST["dato4"];
  if(insertarCONTRAREF($a,$b,$c,$d,$e)){
  ActualizarContraR($a);
header('location: index.php?accion=Contrareferencia/Lista');
            }else{
            $alerta='<div class="alert alert-danger">
              <strong>Error!</strong>Usuario repetido.
            </div>';
            }
}

if (isset($_POST['Regresar'])) {
header('location: index.php?accion=Contrareferencia/Lista');
}


$template->assign("Mensaje",$alerta);
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/Contrareferencia/Contrareferencia.tpl');

 ?>
