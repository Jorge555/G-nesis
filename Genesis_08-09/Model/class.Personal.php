<?php

 function ListadoP(){
$sql="SELECT personal.ID,personal.NOMBRE,personal.APELLIDO,distrito.DISTRITO,puesto.PUESTO,personal.ACTIVO FROM personal
INNER JOIN distrito on personal.DISTRITO=distrito.ID
INNER JOIN puesto on personal.PUESTO=puesto.ID";
      $consulta= conectar()->query($sql);
      $Distrito=array();
while($fila=mysqli_fetch_array($consulta))
     {
  $Distrito[]=$fila;
     }
     $consulta->free();
      return $Distrito;
		}


    function AEP($a,$b){
      $sql="UPDATE `personal` SET `ACTIVO`='$a' WHERE `ID`='$b'";
       $consulta= conectar()->query($sql);
        return  $consulta;
    }

    function  insertarP($a,$b,$c,$d,$e,$f){
    //  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
    $sql="INSERT INTO personal(`NOMBRE`, `APELLIDO`, `SEXO`, `PUESTO`, `DISTRITO`, `ACTIVO`)
    VALUES  ('$a','$b','$c','$d','$e','$f')";
     $consulta= conectar()->query($sql);
      return  $consulta;
    }

    function ActualizarP($a,$b,$c,$d,$e,$f,$g){
         $sql ="UPDATE `personal` SET `NOMBRE`='$a',`APELLIDO`='$b',`SEXO`='$c',`PUESTO`='$d',`DISTRITO`='$e',`ACTIVO`='$f'
  WHERE
  personal.ID='$g'";
         $consulta= conectar()->query($sql);
         return $consulta;
       }

       function BuscarPersonal($a){
            $sql ="SELECT * FROM personal WHERE personal.ID='$a'";
            $consulta= conectar()->query($sql);
            $Distrito=array();
            $filas=$consulta->num_rows;
       while($fila=mysqli_fetch_array($consulta))
           {
        $Distrito[0]["NOMBRE"]=$fila[1];
        $Distrito[0]["APELLIDO"]=$fila[2];
        $Distrito[0]["SEXO"]=$fila[3]; //ID
        $Distrito[0]["DISTRITO"]=$fila[4]; //ID
        $Distrito[0]["PUESTO"]=$fila[5];
        $Distrito[0]["ID"]=$a;
           }
           $consulta->free();
            return $Distrito;
          }
