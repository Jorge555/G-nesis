<?php
 function conectar(){
	$servidor="localhost";
	$user="root";
	$pass="";
	$bd="gn_bckup";
	if($conexion=mysqli_connect($servidor,$user,$pass,$bd))
	{
	// echo "<script> alert('Conexion exitosa'); </script>";
		return $conexion;
	}else {
	// echo "<script> alert('Conexion no exitosa'); </script>";
	 return	null;
 }

}
?>
