<?php
session_start();
$template = new Smarty();
require ('Model/class.FRO.php');
require ('Model/class.Distrito.php');
require ('Model/class.FROMREFERENCIA.php');
$alerta='';
if(!empty($_SESSION['AGO']))
{
$alerta=$_SESSION['AGO'];
$template->assign("AUX",BuscarFROF($_SESSION['AGO']));
//$template->assign("AUX",BuscarM($alerta));
//unset($_SESSION['UM']);
}

if (isset($_POST['Regresar'])) {
header('location: index.php?accion=FROMFRO/Lista');
}

if (isset($_POST['Guardar'])) {
  $a=$_POST["ID"];    $a1=$_POST["dato8"]; $a2=$_POST["dato16"];
  $b=$_POST["dato1"];  $b1=$_POST["dato9"]; $b2=$_POST["dato17"];
  $c=$_POST["dato2"]; $c1=$_POST["dato10"]; $c2=$_POST["dato18"];
  $d=$_POST["dato3"]; $d1=$_POST["dato11"];$d2=$_POST["dato19"];
  $e=$_POST["dato4"]; $e1=$_POST["dato12"]; $e2=$_POST["dato20"];
  $f=$_POST["dato5"]; $f1=$_POST["dato13"]; $f2=$_POST["dato21"];
  $g=$_POST["dato6"]; $g1=$_POST["dato14"]; $g2=$_POST["dato22"];
  $h=$_POST["dato7"]; $h1=$_POST["dato15"]; $h2=0;

if(insertarREFERENCIA ($a,$b,$c,$d,$e,$f,$g,$h,
                $a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1,
                $a2,$b2,$c2,$d2,$e2,$f2,$g2,$h2)){
                  
    updateRefe($a);
   header('location: index.php?accion=FROMFRO/Lista');
          }else{
          $alerta='<div class="alert alert-danger">
            <strong>Error!</strong>Usuario repetido.
          </div>';
          }
  //header('location: index.php?accion=FROMFRO/Lista');
}
$template->assign("TIPO",$_SESSION['TipoU']);
$template->assign("Distrito",ListadoD());
$template->assign("Mensaje",$alerta);
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/VALIDACIONREFE.tpl');
$template->display('views/FROMREFERENCIA/FROMREFERENCIA.tpl');

 ?>
