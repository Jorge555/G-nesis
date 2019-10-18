<?php
$template = new Smarty();
require ('Model/class.Mujeres.php');
require ('Model/class.FRO.php');
session_start();
$alerta='';
//--------------------------------------------------------------------
if(!empty($_SESSION['VRM']))
{
$alerta=$_SESSION['VRM'];
//unset($_SESSION['UM']);
$template->assign("ID",$alerta);
}
//--------------------------------------------------------------------
if (isset($_POST['Guardar'])) {
 //$_SESSION['VRM']=$_POST['Guardar'];       14-23 NUMBER Y FECHA
 $a=$_POST["ID"];    $a1=$_POST["dato8"]; $a2=$_POST["dato16"]; $a3=$_POST["dato24"]; $a4=$_POST["ResponsableFRO"];
 $b=$_POST["dato"];  $b1=$_POST["dato9"]; $b2=$_POST["dato17"]; $b3=$_POST["dato25"]; $b4=0;
 $c=$_POST["dato2"]; $c1=$_POST["dato10"]; $c2=$_POST["dato18"]; $c3=$_POST["dato26"]; $c4=$_POST["PRIORIDAD"];
 $d=$_POST["dato3"]; $d1=$_POST["dato11"];$d2=$_POST["dato19"];  $d3=$_POST["dato27"];
 $e=$_POST["dato4"]; $e1=$_POST["dato12"]; $e2=$_POST["dato20"]; $e3=$_POST["dato28"];
 $f=$_POST["dato5"]; $f1=$_POST["dato13"]; $f2=$_POST["dato21"]; $f3=$_POST["dato29"];
 $g=$_POST["dato6"]; $g1=$_POST["dato14"]; $g2=$_POST["dato22"]; $g3=$_POST["dato30"];
 $h=$_POST["dato7"]; $h1=$_POST["dato15"]; $h2=$_POST["dato23"]; $h3=$_POST["dato31"];
                                                                 $i=$_POST["dato32"];
                                                                 $j=$_POST["dato33"];
                                                                 $k=$_POST["dato34"];
                                                                 $l=$_POST["dato35"];


 if(insertarFRO ($a,$b,$c,$d,$e,$f,$g,$h,
           $a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1,
           $a2,$b2,$c2,$d2,$e2,$f2,$g2,$h2,
           $a3,$b3,$c3,$d3,$e3,$f3,$g3,$h3,$i,$j,$k,$l,
           $a4,$b4,$c4)){
     EstadoPrioridad($a);
    header('location: index.php?accion=FROMFRO/Lista');
           }else{
           $alerta='<div class="alert alert-danger">
             <strong>Error!</strong>Usuario repetido.
           </div>';
           }
}
//--------------------------------------------------------------------
if (isset($_POST['Regresar'])) {
header('location: index.php?accion=FROMFRO/Lista');
}





$template->assign("Mensaje",$alerta);
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/VALIDACION.tpl');
$template->display('views/FROMFRO/FROMFRO.tpl');

 ?>
