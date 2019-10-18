<?php
$template = new Smarty();
session_start();
$alerta='';
if (isset($_POST['Lusuarios'])) {
header('location: index.php?accion=Reportes/ReporteE');
}
if (isset($_POST['Lpersonal'])) {
header('location: index.php?accion=Reportes/ReportePersonal');
}
if (isset($_POST['LEmbarazadas'])) {
header('location: index.php?accion=Reportes/ReporteEMBARAZADAS');
}
if (isset($_POST['Estadistica2'])) {
$a=$_POST["dato1"];
$b=$_POST["dato2"];
$c=$_POST["dato12"];  $g=$_POST["dato16"];
$d=$_POST["dato13"]; $h=$_POST["dato17"];
$e=$_POST["dato14"]; $i=$_POST["dato18"];
$f=$_POST["dato15"];
if($a>=$b){
$_SESSION['Inicial']=$a;
$_SESSION['Final']=$b;
$_SESSION['Peso']=$c;
$_SESSION['Talla']=$d;
$_SESSION['Pulso']=$e;
$_SESSION['PAEX']=$f;
$_SESSION['FREX']=$g;
$_SESSION['TEX']=$h;
$_SESSION['FCFEX']=$i;
header('location: index.php?accion=Reportes/Estadistica2');
}else {
  $alerta='<div class="alert alert-danger">
    <strong>Error!  Revisar Fechas que solicita</strong>
  </div>';

$template->assign("Mensaje",$alerta);
}
}

if (isset($_POST['Estadistica'])) {
$a=$_POST["dato1"];
$b=$_POST["dato2"];
if($a >=$b){
$_SESSION['Inicial']=$a;
$_SESSION['Final']=$b;
header('location: index.php?accion=Reportes/Estadistica');
}else {
  $alerta='<div class="alert alert-danger">
    <strong>Error! Revisar Fechas que solicita</strong>
  </div>';

    $template->assign("Mensaje",$alerta);
}
}

if (isset($_POST['Estadistica3'])) {
$a=$_POST["dato1"];
$b=$_POST["dato2"];
if($a >=$b){
$_SESSION['Inicial']=$a;
$_SESSION['Final']=$b;
header('location: index.php?accion=Reportes/Estadistica3');
}else {
  $alerta='<div class="alert alert-danger">
    <strong>Error! Revisar Fechas que solicita</strong>
  </div>';

    $template->assign("Mensaje",$alerta);
}
}
if (isset($_POST['Estadistica4'])) {
$a=$_POST["dato1"];
$b=$_POST["dato2"];
if($a >=$b){
$_SESSION['Inicial']=$a;
$_SESSION['Final']=$b;
header('location: index.php?accion=Reportes/Estadistica4');
}else {
  $alerta='<div class="alert alert-danger">
    <strong>Error! Revisar Fechas que solicita</strong>
  </div>';

    $template->assign("Mensaje",$alerta);
}
}
if (isset($_POST['Estadistica5'])) {
$a=$_POST["dato1"];
$b=$_POST["dato2"];
if($a >=$b){
$_SESSION['Inicial']=$a;
$_SESSION['Final']=$b;
header('location: index.php?accion=Reportes/Estadistica5');
}else {
  $alerta='<div class="alert alert-danger">
    <strong>Error! Revisar Fechas que solicita</strong>
  </div>';

    $template->assign("Mensaje",$alerta);
}
}
if (isset($_POST['Estadistica6'])) {
$a=$_POST["dato1"];
$b=$_POST["dato2"];

$c=$_POST["dato21"];  $g=$_POST["dato25"];
$d=$_POST["dato22"]; $h=$_POST["dato26"];
$e=$_POST["dato23"];
$f=$_POST["dato24"];
if($a>=$b){
$_SESSION['Inicial']=$a;
$_SESSION['Final']=$b;
$_SESSION['AGO3']=$c;
$_SESSION['AGO4']=$d;
$_SESSION['AGO5']=$e;
$_SESSION['AGO6']=$f;
$_SESSION['AGO7']=$g;
$_SESSION['AGO8']=$h;
header('location: index.php?accion=Reportes/Estadistica6');
}else {
  $alerta='<div class="alert alert-danger">
    <strong>Error!  Revisar Fechas que solicita</strong>
  </div>';

$template->assign("Mensaje",$alerta);
}
}
$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/BASE/Freporte.tpl');
$template->display('views/Reportes/Reportes.tpl');
