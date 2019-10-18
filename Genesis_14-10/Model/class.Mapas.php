<?php
  function  insertarM($a,$b,$c,$d,$e,$f){
    $sql="INSERT INTO ubicacion(`LUGAR`,`LATITUD`,`LONGITUD`,`DISTRITO`,`ICONO`,`ACTIVO`)
      VALUES  ('$a','$b','$c','$d','$e','$f')";
    $consulta= conectar()->query($sql);
    return  $consulta;
  }
  function ListadoCentro(){
    $sql ="SELECT Ubicacion.LUGAR,Ubicacion.LATITUD,Ubicacion.LONGITUD,distrito.DISTRITO,distrito.ID FROM Ubicacion
      INNER JOIN distrito on Ubicacion.DISTRITO=distrito.ID WHERE Ubicacion.LUGAR=CONCAT('Centro ',distrito.DISTRITO)";
    $consulta= conectar()->query($sql);
    $Usuario=array();
    $filas=$consulta->num_rows;
    while($fila=mysqli_fetch_array($consulta)){ 
      $Usuario[]=$fila;
    }
    $consulta->free();
    return $Usuario;
  }
  function ListadoM(){
    $sql ="SELECT Ubicacion.ID,Ubicacion.LUGAR,Ubicacion.LATITUD,Ubicacion.LONGITUD,distrito.DISTRITO,iconos.NOMBRE,Ubicacion.ACTIVO FROM Ubicacion
      INNER JOIN distrito on Ubicacion.DISTRITO=distrito.ID  INNER JOIN iconos ON ubicacion.ICONO=iconos.ID";
    $consulta= conectar()->query($sql);
    $Usuario=array();
    $filas=$consulta->num_rows;
    while($fila=mysqli_fetch_array($consulta))
    {
      $Usuario[]=$fila;
    }
    $consulta->free();
    return $Usuario;
  }
  function ListadoMD($a){
    $sql ="SELECT Ubicacion.ID,Ubicacion.LUGAR,Ubicacion.LATITUD,Ubicacion.LONGITUD,distrito.DISTRITO,iconos.ICONO,Ubicacion.ACTIVO FROM Ubicacion
      INNER JOIN distrito on Ubicacion.DISTRITO=distrito.ID  INNER JOIN iconos ON ubicacion.ICONO=iconos.ID WHERE Ubicacion.DISTRITO='$a'";
    $consulta= conectar()->query($sql);
    $Usuario=array();
    $filas=$consulta->num_rows;
    while($fila=mysqli_fetch_array($consulta))
    {
      $Usuario[]=$fila;
    }
    $consulta->free();
    return $Usuario;
  }
  function BuscarCentro($a){
    $sql ="SELECT Ubicacion.LATITUD,Ubicacion.LONGITUD FROM Ubicacion
      INNER JOIN distrito on Ubicacion.DISTRITO=distrito.ID WHERE Ubicacion.DISTRITO='$a' AND Ubicacion.LUGAR=CONCAT('Centro ',distrito.DISTRITO)";
    $consulta= conectar()->query($sql);
    $Usuario=array();
    $filas=$consulta->num_rows;
    while($fila=mysqli_fetch_array($consulta)){ 
      $Usuario[0]["LATITUD"]=$fila[0];
      $Usuario[0]["LONGITUD"]=$fila[1];
      $Usuario[0]["DISTRITO"]=$a;
    }
    $consulta->free();
    return $Usuario;
  }
  function ListadoIconos(){
    $sql ="SELECT * FROM iconos";
    $consulta= conectar()->query($sql);
    $iconos=array();
    $filas=$consulta->num_rows;
    while($fila=mysqli_fetch_array($consulta))
    {
      $iconos[]=$fila;
    }
    $consulta->free();
    return $iconos;
  }
?>