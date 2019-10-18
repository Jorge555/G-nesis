<?php
//require ('Model/class.Acceso.php');
$template = new Smarty();
//$acceso = new Acceso();

//if (isset($_POST['usuario']) && isset($_POST['password'])) {
//$acceso->Login($_POST['usuario'],$_POST['password']);
//}else {
//  session_start();
///  session_destroy();
//}


$template->display('views/BASE/cabecera.tpl');
$template->display('views/BASE/Menu.tpl');
$template->display('views/Usuario.tpl');

//  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
//header('location: index.tpl');
