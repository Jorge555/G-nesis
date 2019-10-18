<?php
session_start();
$template = new Smarty();
require ('Model/class.Escolaridad.php');
require ('Model/class.Pueblos.php');
require ('Model/class.Mujeres.php');
$alerta='';
if (isset($_POST['Guardar'])) {
{
$a=$_POST["nombre_m"];
$b=$_POST["dpi_m"];
$c=$_POST["edad_m"];
$d=$_POST["pueblo_m"];
$e=$_POST["escolaridad_m"];
$f=$_POST["nombre_h"];
$g=$_POST["dpi_h"];
$h=$_POST["edad_h"];
$i=$_POST["pueblo_h"];
$j=$_POST["escolaridad_h"];
$k=$_POST["distancia"];
$l=$_POST["tiempo"];
$m=$_POST["comunidad"];
$n=$_POST["celular"];
if(insertarM($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n)){
header('location: index.php?accion=Mujeres/Lista');
}else{
$alerta='<div class="alert alert-danger">
  <strong>Error!</strong>Usuario repetido.
</div>';
}
}}
$template->assign("TIPO",$_SESSION['TipoU']);
$template->assign("Escolaridad",ListadoEscolaridad());
$template->assign("Pueblos",ListadoPeblos());
$template->assign("Mensaje",$alerta);
$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Mujeres/Nuevo.tpl');
///Datos de ficha antecedestes Gineo-obsetricos
///<p>FUR<input type="date"> Fecha Probable de parto<input type="date"> No. de embarazos<input type="number"></p>
/// <p>No. de partos<input type="number"> No. de cesareas<input type="number"> No. de abortos<input type="number"></p>
/// <p>No. de Hijos Vivos<input type="number"> No. de Hijos Muertos<input type="number"></p>

 ?>
