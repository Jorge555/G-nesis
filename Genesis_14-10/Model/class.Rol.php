<?php
  function ListadoR(){
    $sql ="SELECT * FROM rol";
    $consulta= conectar()->query($sql);
    $Rol=array();
    $filas=$consulta->num_rows;
    while($fila=mysqli_fetch_array($consulta)){
      $Rol[]=$fila;
    }
    $consulta->free();
    return $Rol;
	}
