<?php

function  EstadoE($a,$b){
  $sql="UPDATE `mujeres` SET `POSPARTO`=$b,`PRIORIDAD`=0 WHERE mujeres.ID='$a'";
   $consulta= conectar()->query($sql);
    return  $consulta;
}
function  EstadoPrioridad($a){
  $sql="UPDATE `mujeres` SET  `POSPARTO`=1,`PRIORIDAD`=1 WHERE mujeres.ID='$a'";
   $consulta= conectar()->query($sql);
    return  $consulta;
}

 function ListadoMujeres(){
      $sql ="SELECT * FROM mujeres";
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

    function IDM($ID){
         $sql ="SELECT mujeres.ID FROM mujeres
INNER JOIN fro ON  mujeres.ID=fro.ID_EMB
INNER JOIN referencia ON fro.ID=referencia.ID_FRO
WHERE referencia.ID=$ID";
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

      function BuscarM($a){
           $sql ="SELECT *  FROM mujeres AS MU
 INNER JOIN pueblo AS p1 on MU.PUE_M=p1.ID
 INNER JOIN escolaridad AS es1 on MU.ESC_M= es1.ID
 INNER JOIN pueblo AS p2 on MU.PUE_H= p2.ID
 INNER JOIN escolaridad AS es2 on MU.ESC_H=es2.ID
 WHERE MU.ID='$a'";
           $consulta= conectar()->query($sql);
           $Distrito=array();
           $filas=$consulta->num_rows;
      while($fila=mysqli_fetch_array($consulta))
          {
        $Distrito[0]["ID"]=$a;
       $Distrito[0]["NOMBRE_M"]=$fila[1];
       $Distrito[0]["DPI_M"]=$fila[2];
       $Distrito[0]["EDAD_M"]=$fila[3];
       $Distrito[0]["PUEBLO_M"]=$fila[18];//////
       $Distrito[0]["ESC_M"]=$fila[20];/////
       $Distrito[0]["NOMBRE_H"]=$fila[6];
       $Distrito[0]["DPI_H"]=$fila[7];
       $Distrito[0]["EDAD_H"]=$fila[8];
       $Distrito[0]["PUEBLO_H"]=$fila[22];//
       $Distrito[0]["ESC_H"]=$fila[24];///
       $Distrito[0]["DIST"]=$fila[11];
       $Distrito[0]["TIEMPO"]=$fila[12];
       $Distrito[0]["COMUNIDAD"]=$fila[13];
       $Distrito[0]["TEL"]=$fila[14];
          }
          $consulta->free();
           return $Distrito;
         }

         function  insertarM($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n){
         //  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
         $sql="INSERT INTO `mujeres`(`NOMBRE_M`, `DPI_M`, `EDAD`, `PUE_M`, `ESC_M`, `NOMBRE_H`, `DPI_H`, `EDAD_H`, `PUE_H`, `ESC_H`, `DISTANCIA_SER`, `TIEMPO_SER`, `COMUNIDAD`, `TELEFONO`, `POSPARTO`)
         VALUES  ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n',1)";
          $consulta= conectar()->query($sql);
           return  $consulta;
         }
