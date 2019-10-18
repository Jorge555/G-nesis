<?php

 function ListadoREFERENCIA(){
      $sql ="SELECT * FROM referencia";
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

    function  insertarREFERENCIA ($a,$b,$c,$d,$e,$f,$g,$h,
                    $a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1,
                    $a2,$b2,$c2,$d2,$e2,$f2,$g2,$h2){
    //  echo "<script> alert('Conexion exitosa $a $b $c $d $e'); </script>";
    $sql="INSERT INTO `referencia`(`ID_FRO`, `SERE`, `SERF`, `FECHA`, `HORA`, `CE`, `HISTORIAE`, `AM_MEDI`,
                      `AM_MENT`, `AM_QUI`, `AM_TRAU`, `AM_ALERG`, `EF_PESO`, `EF_TALLA`, `EF_PULSO`, `EF_PA`,
                      `EF_FR`, `EF_T`, `EF_FCF`, `INGC`, `MOTREFE`, `TRATAMIENTO`, `EXAMENES`, `CONTRAR`)
    VALUES  ( '$a','$b','$c','$d','$e','$f','$g','$h',
              '$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1',
              '$a2','$b2','$c2','$d2','$e2','$f2','$g2','$h2')";
     $consulta= conectar()->query($sql);
      return  $consulta;
    }

    function RFDATA($a){
         $sql ="SELECT referencia.ID,fro.FECHA, da.DISTRITO,db.DISTRITO, referencia.CONTRAR FROM referencia
INNER JOIN distrito as da on referencia.SERE=da.ID
INNER JOIN distrito as db on referencia.SERF= db.ID
INNER JOIN fro on referencia.ID_FRO = fro.ID
INNER JOIN mujeres on fro.ID_EMB=mujeres.ID
WHERE mujeres.ID='$a'";
         $consulta= conectar()->query($sql);
         $Distrito=array();
         $filas=$consulta->num_rows;
         $n=0;
    while($fila=mysqli_fetch_array($consulta))
        {
    $Distrito[$n]["ID"]=$fila[0];
    $Distrito[$n]["FECHA"]=$fila[1];
    $Distrito[$n]["DISTRITO1"]=$fila[2];
    $Distrito[$n]["DISTRITO2"]=$fila[3];
    $Distrito[$n]["CONTRAR"]=$fila[4];
    $n=$n+1;
        }
        $consulta->free();
         return $Distrito;
       }


       function BuscarREFE($a){
            $sql ="SELECT * FROM referencia WHERE referencia.ID='$a'";
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


          function SERVDATA($a){
               $sql ="SELECT referencia.ID, da.DISTRITO,db.DISTRITO FROM referencia
        INNER JOIN distrito as da on referencia.SERE=da.ID
        INNER JOIN distrito as db on referencia.SERF= db.ID
        WHERE referencia.ID='$a'";
               $consulta= conectar()->query($sql);
               $Distrito=array();
               $filas=$consulta->num_rows;
               $n=0;
          while($fila=mysqli_fetch_array($consulta))
              {
          $Distrito[$n]["ID"]=$fila[0];
          $Distrito[$n]["DISTRITO1"]=$fila[1];
          $Distrito[$n]["DISTRITO2"]=$fila[2];
          $n=$n+1;
              }
              $consulta->free();
               return $Distrito;
             }


             function ActualizarContraR($a){
                  $sql ="UPDATE `referencia` SET`CONTRAR`=1 WHERE referencia.ID='$a'";
                  $consulta= conectar()->query($sql);
                  return $consulta;
                }
