<?php
function  ActualizarEstado($a,$b){
  $sql="UPDATE `usuarios` SET `ACTIVO`='$a' WHERE `ID`='$b'";
   $consulta= conectar()->query($sql);
    return  $consulta;
}

function  insertarU($a,$b,$c,$d,$e,$f){
//  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
$sql="INSERT INTO usuarios(`USUARIO`,`PASS`,`DISTRITO`,`ROL`,`PERSONAL`,`ACTIVO`)
VALUES  ('$a','$b','$c','$d','$e','$f')";
 $consulta= conectar()->query($sql);
  return  $consulta;
}

function ListadoU(){
$sql ="SELECT usuarios.ID,personal.NOMBRE,personal.APELLIDO,usuarios.USUARIO,usuarios.PASS,rol.TIPO,usuarios.ACTIVO,distrito.DISTRITO FROM usuarios
INNER JOIN personal on personal.ID= usuarios.PERSONAL
INNER JOIN rol on rol.ID=usuarios.ROL
INNER JOIN distrito on personal.DISTRITO=distrito.ID";
     $consulta= conectar()->query($sql);
     $Distrito=array();
     $filas=$consulta->num_rows;

while($fila=mysqli_fetch_array($consulta))
    {
 $Distrito[]=$fila;
    }
    $consulta->free();
     return $Distrito;
   }

   function BuscarU($a){
        $sql ="SELECT personal.ID,usuarios.USUARIO,usuarios.PASS,rol.ID,distrito.ID FROM usuarios
   INNER JOIN personal on personal.ID= usuarios.PERSONAL
   INNER JOIN rol on rol.ID=usuarios.ROL
   INNER JOIN distrito on distrito.ID=personal.DISTRITO
   WHERE usuarios.ID='$a'";
        $consulta= conectar()->query($sql);
        $Distrito=array();
        $filas=$consulta->num_rows;
   while($fila=mysqli_fetch_array($consulta))
       {
    $Distrito[0]["PERSONAL"]=$fila[0];
    $Distrito[0]["USER"]=$fila[1];
    $Distrito[0]["PASS"]=$fila[2];
    $Distrito[0]["ROL"]=$fila[3];
    $Distrito[0]["DIST"]=$fila[4];
    $Distrito[0]["ID"]=$a;
       }
       $consulta->free();
        return $Distrito;
      }

      function ActualizarU($a,$b,$c,$e,$dist,$f){
           $sql ="UPDATE usuarios
INNER JOIN personal ON usuarios.PERSONAL=personal.ID
INNER JOIN distrito ON personal.DISTRITO=distrito.ID
SET
   usuarios.USUARIO='$a',usuarios.PASS='$b',usuarios.ROL='$c',usuarios.ACTIVO='$e',
   personal.DISTRITO='$dist'
WHERE
usuarios.ID='$f'";
           $consulta= conectar()->query($sql);
           return $consulta;
         }
function Login($a,$b){
$sql ="SELECT * FROM `usuarios` WHERE usuarios.USUARIO='$a' and usuarios.PASS='$b' and usuarios.ACTIVO=1";
$consulta= conectar()->query($sql);
$filas=$consulta->num_rows;
$consulta->free();
  return $filas;
}

function Distrito($a){
 // $sql ="SELECT distrito.DISTRITO FROM `usuarios
//INNER JOIN personal on personal.ID= usuarios.PERSONAL
//INNER JOIN distrito ON personal.DISTRITO=distrito.ID
//WHERE usuarios.USUARIO='$a'";
 $sql ="SELECT distrito.DISTRITO FROM `personal` 
 INNER JOIN usuarios on personal.ID= usuarios.PERSONAL 
 INNER JOIN distrito ON personal.DISTRITO=distrito.ID 
 WHERE usuarios.USUARIO='$a'";
  $consulta= conectar()->query($sql);
  $Distrito;
  $filas=$consulta->num_rows;
while($fila=mysqli_fetch_array($consulta))
 {
$Distrito=$fila[0];
 }
 $consulta->free();
  return $Distrito;
}
