<?php

 function ListadoRefe(){
      $sql ="SELECT referencia.ID,referencia.FECHA,da.DISTRITO,referencia.CONTRAR,mujeres.NOMBRE_M FROM `referencia`
      INNER JOIN distrito AS da on referencia.SERE=da.ID
      INNER JOIN fro on referencia.ID_FRO=fro.ID
      INNER JOIN mujeres on fro.ID_EMB=mujeres.ID";
      //WHERE referencia.CONTRAR=0 AND referencia.SERF=$distrito";
      $consulta= conectar()->query($sql);
      $Distrito=array();
      $filas=$consulta->num_rows;
   $n=0;
while($fila=mysqli_fetch_array($consulta))
     {
       $Distrito[$n]["ID"]=$fila[0];
       $Distrito[$n]["FECHA"]=$fila[1];
       $Distrito[$n]["DISTRITO"]=$fila[2];
       $Distrito[$n]["CONTRAR"]=$fila[3];
       $Distrito[$n]["NOMBRE"]=$fila[4];
       $n=$n+1;
     }
     $consulta->free();
      return $Distrito;
		}


    function  insertarCONTRAREF($a,$b,$c,$d,$e){
    //  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
    $sql="INSERT INTO `contrareferencia`(`ID_REF`, `RESUMEN`, `TRAT`, `DIAG`, `RECOM`)
    VALUES  ( '$a','$b','$c','$d','$e')";
     $consulta= conectar()->query($sql);
      return  $consulta;
    }



    function BuscarCONTRAREF($a){
         $sql ="SELECT * FROM contrareferencia WHERE contrareferencia.ID_REF='$a'";
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
