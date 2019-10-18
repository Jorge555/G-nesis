<?php

 function ListadoFRO($id){
      $sql ="SELECT * FROM fro where fro.ID_EMB='$id'";
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

    function  insertarFRO ($a,$b,$c,$d,$e,$f,$g,$h,
              $a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1,
              $a2,$b2,$c2,$d2,$e2,$f2,$g2,$h2,
              $a3,$b3,$c3,$d3,$e3,$f3,$g3,$h3,$i,$j,$k,$l,
              $a4,$b4,$c4){
    //  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
    $sql="INSERT INTO `fro`(`ID_EMB`, `AO1`, `AO2`, `AO3`, `AO4`, `AO5`, `AO6`, `AO7`,
       `HCG1`, `HCG2`, `HCG3`, `HCG4`, `HCG5`, `HCG6`, `HCG7`, `FECHA`,
        `AGOFUR`,`AGOFPP`, `AGO3`, `AGO4`, `AGO5`, `AGO6`, `AGO7`, `AGO8`,
        `EA1`, `EA2`, `EA3`, `EA4`, `EA5`, `EA6`, `EA7`, `EA8`, `EA9`, `EA10`, `EA11`, `EA12`,
         `RESP`, `REFERIDO`, `PRIORIDAD`)
    VALUES  ('$a','$b','$c','$d','$e','$f','$g','$h',
              '$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1',
              '$a2','$b2','$c2','$d2','$e2','$f2','$g2','$h2',
              '$a3','$b3','$c3','$d3','$e3','$f3','$g3','$h3','$i','$j','$k','$l',
              '$a4','$b4','$c4')";
     $consulta= conectar()->query($sql);
      return  $consulta;
    }

           function BuscarFRO($a){
                $sql ="SELECT * FROM fro WHERE fro.ID='$a'";
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


              function BuscarFROF($a){
                   $sql ="SELECT fro.ID,mujeres.NOMBRE_M,mujeres.TELEFONO FROM fro
                    INNER JOIN mujeres on fro.ID_EMB=mujeres.ID
                    WHERE fro.ID='$a'";
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

                 function  updateRefe($a){
                   $sql="UPDATE `fro` SET `REFERIDO`=1 WHERE fro.ID='$a'";
                    $consulta= conectar()->query($sql);
                     return  $consulta;
                 }
