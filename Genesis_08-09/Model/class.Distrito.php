<?php

 function ListadoD(){
      $sql ="SELECT * FROM distrito";
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
