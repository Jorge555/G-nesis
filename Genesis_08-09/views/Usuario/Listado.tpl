<!DOCTYPE html>
<html>
<head>
  <title>Listado</title>
</head>

<body>
  <div class="container" id="tb">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-md-10">
         <form id="miform" method="POST" >
             <br>
        <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Usuario/Nuevo"> Nuevo</a>
        <br><br>
        <table class="table table-striped table-bordered table-hover" id="xtabla">
          <thead>
            <tr>
              <th>Personal</th>
              <th>Usuario</th>   <!--para comentar una linea  -->
              <th>Pass</th>
              <th>Rol</th>
              <th>Activo</th>
              <th>Distrito</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$Listado item=dato}
            <tr>
              <th>{$dato.NOMBRE} {$dato.APELLIDO}</th>
              <th>{$dato.USUARIO}</th>
              <th>{$dato.PASS}</th>
              <th>{$dato.TIPO}</th> 
              <th>{$dato.ACTIVO}</th>
              <th>{$dato.DISTRITO}</th>
              <td>
            <button type="submit" class="btn btn-primary" name="Modificar" value="{$dato.ID}"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
            <button type="submit" class="btn btn-danger" name="Baja" value="{$dato.ID}"><span class="glyphicon glyphicon-arrow-down"></span> Dar de Baja</button>
            <button type="submit" class="btn btn-primary" name="Alta" value="{$dato.ID}"><span class="glyphicon glyphicon-arrow-up"></span> Activar</button>
              </td>
            </tr>
            {/foreach}
          </tbody>
        </table>
         </form>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#xtabla').DataTable();
    });

    function Modificar() {
      //alertify.confirm('Desea Dar de Baja?', function(e) {
      //  if (e) {
          window.location.href = "index.php?accion=Usuario/Modificar";
    //    }
    //  });
  }

  </script>
</body>

</html>
