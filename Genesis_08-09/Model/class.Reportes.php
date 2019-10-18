<?php
function Lusuarios(){
$sql ="SELECT usuarios.ID,personal.NOMBRE,personal.APELLIDO,usuarios.USUARIO,usuarios.PASS,rol.TIPO,usuarios.ACTIVO,distrito.DISTRITO FROM usuarios
INNER JOIN personal on personal.ID= usuarios.PERSONAL
INNER JOIN rol on rol.ID=usuarios.ROL
INNER JOIN distrito on distrito.ID=usuarios.DISTRITO";
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

   function Lpersonal(){
   $sql ="SELECT personal.ID,personal.NOMBRE,personal.APELLIDO, PUESTO.PUESTO,DISTRITO.DISTRITO FROM personal
INNER JOIN PUESTO on personal.PUESTO=PUESTO.ID
INNER JOIN DISTRITO on personal.DISTRITO=DISTRITO.ID
WHERE personal.ACTIVO=1";
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

   function Lembarazadas(){
   $sql ="SELECT * FROM `mujeres` WHERE `POSPARTO`=1";
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


/* Datos de Antecedentes*/

function contA1($I,$F){
  $sql ="select count(AO1) from fro WHERE AO1=1 AND FECHA  BETWEEN '$I' AND '$F'";
       $consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
  while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
      $consulta->free();   return $Distrito[0];
     }
     function contA2($I,$F){
       $sql ="select count(AO2) from fro WHERE AO2=1 AND FECHA  BETWEEN '$I' AND '$F'";
            $consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
       while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
           $consulta->free();   return $Distrito[0];
          }

          function contA3($I,$F){
            $sql ="select count(AO3) from fro WHERE AO3=1 AND FECHA  BETWEEN '$I' AND '$F'";
                 $consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
            while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
                $consulta->free();   return $Distrito[0];
               }

               function contA4($I,$F){
                 $sql ="select count(AO4) from fro WHERE AO4=1 AND FECHA  BETWEEN '$I' AND '$F'";
                      $consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
                 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
                     $consulta->free();   return $Distrito[0];
                    }

                    function contA5($I,$F){
                      $sql ="select count(AO5) from fro WHERE AO5=1 AND FECHA  BETWEEN '$I' AND '$F'";
                           $consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
                      while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
                          $consulta->free();   return $Distrito[0];
                         }

                         function contA6($I,$F){
                           $sql ="select count(AO6) from fro WHERE AO6=1 AND FECHA  BETWEEN '$I' AND '$F'";
                                $consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
                           while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
                               $consulta->free();   return $Distrito[0];
                              }

                              function contA7($I,$F){
                                $sql ="select count(AO7) from fro WHERE AO7=1 AND FECHA  BETWEEN '$I' AND '$F'";
                                     $consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
                                while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
                                    $consulta->free();   return $Distrito[0];
                                   }
function HCG1($I,$F){
$sql ="select count(HCG1) from fro WHERE 	HCG1=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function HCG2($I,$F){
$sql ="select count(HCG2) from fro WHERE 	HCG2=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function HCG3($I,$F){
$sql ="select count(HCG3) from fro WHERE 	HCG3=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function HCG4($I,$F){
$sql ="select count(HCG4) from fro WHERE 	HCG4=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function HCG5($I,$F){
$sql ="select count(HCG5) from fro WHERE 	HCG5=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function HCG6($I,$F){
$sql ="select count(HCG6) from fro WHERE 	HCG6=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
///-------------------------
function AGOFUR($I,$F){
$sql ="select count(AGOFUR) from fro WHERE AGOFUR  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function AGOFPP($I,$F){
$sql ="select count(AGOFPP) from fro WHERE AGOFPP  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function AGO3($I,$F,$d){
$sql ="select count(AGO3) from fro WHERE 	AGO3>'$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function AGO4($I,$F,$d){
$sql ="select count(AGO4) from fro WHERE 	AGO4>'$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function AGO5($I,$F,$d){
$sql ="select count(AGO5) from fro WHERE 	AGO5>'$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function AGO6($I,$F,$d){
$sql ="select count(AGO6) from fro WHERE 	AGO6>'$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function AGO7($I,$F,$d){
$sql ="select count(AGO7) from fro WHERE 	AGO7>'$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function AGO8($I,$F,$d){
$sql ="select count(AGO8) from fro WHERE 	AGO8>'$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
//--------------
function EA1($I,$F){
$sql ="select count(EA1) from fro WHERE	EA1=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA2($I,$F){
$sql ="select count(EA2) from fro WHERE 	EA2=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA3	($I,$F){
$sql ="select count(EA3) from fro WHERE 	EA3=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA4($I,$F){
$sql ="select count(EA4) from fro WHERE 	EA4=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA5($I,$F){
$sql ="select count(EA5) from fro WHERE 	EA5=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA6($I,$F){
$sql ="select count(EA6) from fro WHERE 	EA6=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA7($I,$F){
$sql ="select count(EA7) from fro WHERE 	EA7=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA8($I,$F){
$sql ="select count(EA8) from fro WHERE 	EA8=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA9($I,$F){
$sql ="select count(EA9) from fro WHERE 	EA9=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA10($I,$F){
$sql ="select count(EA10) from fro WHERE 	EA10=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA11($I,$F){
$sql ="select count(EA11) from fro WHERE 	EA11=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EA12($I,$F){
$sql ="select count(EA12) from fro WHERE 	EA12=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function REFERIDO($I,$F){
$sql ="select count(REFERIDO) from fro WHERE 	REFERIDO=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function PRIORIDAD($I,$F){
$sql ="select count(PRIORIDAD) from fro WHERE 	PRIORIDAD=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}

function EVISTAS($I,$F){
$sql ="select count(ID) from fro WHERE FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}

/* Datos de Referencias*/
function REVISTAS($I,$F){
$sql ="select count(ID) from referencia WHERE FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}

function PESOREF($I,$F,$d){
$sql ="select count(EF_PESO) from referencia WHERE 	EF_PESO>='$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}

function PULSO($I,$F,$d){
$sql ="select count(EF_PULSO) from referencia WHERE 	EF_PULSO>='$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function FR($I,$F,$d){
$sql ="select count(EF_FR) from referencia WHERE 	EF_FR>='$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function FCF($I,$F,$d){
$sql ="select count(EF_FCF) from referencia WHERE 	EF_FCF>='$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function TALLA($I,$F,$d){
$sql ="select count(EF_TALLA) from referencia WHERE 	EF_TALLA>='$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function PA($I,$F,$d){
$sql ="select count(EF_PA) from referencia WHERE 	EF_PA>='$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function T($I,$F,$d){
$sql ="select count(EF_T	) from referencia WHERE 	EF_T>='$d' AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function EMERGENCIAS($I,$F){
$sql ="select count(REFERIDO) from referencia WHERE 	REFERIDO=1 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}
function CONSULTAEX($I,$F){
$sql ="select count(REFERIDO) from referencia WHERE 	REFERIDO=0 AND FECHA  BETWEEN '$I' AND '$F'";
$consulta= conectar()->query($sql);   $Distrito=array();   $filas=$consulta->num_rows;
 while($fila=mysqli_fetch_array($consulta)){   $Distrito[]=$fila;  }
 $consulta->free();   return $Distrito[0];
}

//SELECT * FROM `referencia`



 function BOLETAREFERENCIA($ID)
{
  $sql ="SELECT * FROM referencia
  INNER JOIN fro on referencia.ID_FRO=fro.ID
  INNER JOIN mujeres on fro.ID_EMB=mujeres.ID
  INNER JOIN distrito AS DA ON referencia.SERE=DA.ID
  INNER JOIN distrito AS DB ON referencia.SERF=DB.ID
  INNER JOIN contrareferencia on referencia.ID=contrareferencia.ID_REF
   WHERE referencia.ID='$ID'";
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
function BOLETAREFERENCIA2($ID)
{
 $sql ="SELECT * FROM referencia
   INNER JOIN fro on referencia.ID_FRO=fro.ID
   INNER JOIN mujeres on fro.ID_EMB=mujeres.ID
   INNER JOIN distrito AS DA ON referencia.SERE=DA.ID
   INNER JOIN distrito AS DB ON referencia.SERF=DB.ID
    WHERE referencia.ID='$ID'";
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
