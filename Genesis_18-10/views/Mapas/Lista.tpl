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
      <div class="col-md-10">
          <br>
        <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Mapas/Lista_ubicaciones"> Listado Ubicaciones</a>
        <br><br>
        <table class="table table-striped table-bordered table-hover" id="xtabla">
          <thead>
            <tr>
              <th>Lugar</th>
              <th>Latitud</th>
              <th>Longitud</th>
              <th>Distrito</th>
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
              <th>
                <form method="POST" action="index.php?accion=Mapas/Mapas">
                  <input type="text" class="form-control" name="distrito" id="distrito" value="{$dato.ID}" required>
                  <button type="submit" class="btn btn-primary" name="MapaD" value="{$dato.ID}"><span class="glyphicon glyphicon-map-marker"></span>Mapa</button>
                </form>
              </th>
            </tr>
            {/foreach}
          </tbody>
        </table>
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
