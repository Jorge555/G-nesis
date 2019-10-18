<?php
$template = new Smarty();
require ('Model/class.Distrito.php');
require ('Model/class.Puesto.php');
require ('Model/class.Personal.php');
$alerta='';
session_start();
if(!empty($_SESSION['PM']))
{
$alerta=$_SESSION['PM'];
//unset($_SESSION['UM']);
$template->assign("AUX",BuscarPersonal($alerta));
}

if (isset($_POST['Guardar'])) {
{
if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
$a=$_POST["nombre"];
$b=$_POST["apellido"];
$c=$_POST["sexo"];
$d=$_POST["puesto"];
$e=$_POST["distrito"];
$f=$_POST["activo"];
$g=$_POST["id"];
if(ActualizarP($a,$b,$c,$d,$e,$f,$g)){
header('location: index.php?accion=Personal/Lista');
}else{
$alerta='<div class="alert alert-danger">
  <strong>Error!</strong>Error
</div>';
}
}}}
$template->assign("Distrito",ListadoD());
$template->assign("Puesto",ListadoPuesto());
$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Personal/Modificar.tpl');

 ?>
