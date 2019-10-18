<!DOCTYPE html>
<html>
<head>
  <title>Listado Ubicacion</title>
</head>
<body>
  <div class="container" id="tb">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-md-12">
         <form id="miform" method="post" >
             <br>
        <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Mapas/Nuevo"> Nuevo</a>
        <br><br>
        <table class="table table-striped table-bordered table-hover" id="xtabla">
          <thead>
            <tr>
              <th>Lugar</th>
              <th>Latitud</th>
              <th>Longitud</th>
              <th>Distrito</th>
              <th>Icono</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$Listado item=dato}
            <tr>
              <th>{$dato.LUGAR}</th>
              <th>{$dato.LATITUD}</th>
              <th>{$dato.LONGITUD}</th>
              <th>{$dato.DISTRITO}</th>
              <th>{$dato.NOMBRE}</th>
              <th>
              <button type="submit" class="btn btn-primary" name="Modificar" value="{$dato.ID}"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
              </th>
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
          window.location.href = "index.php?accion=Mapas/Modificar";
    //    }
    //  });
  }

  </script>
</body>

</html>
