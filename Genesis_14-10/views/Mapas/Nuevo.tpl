<!DOCTYPE html>
<html>
<head>
  <title>Nueva Ubicacion</title>
</head>
<body>
  <font color="white"> </font>
  <div class="container">
    <div class="row">
      <div class=" col-md-3"></div>
      <div class=" col-md-6" id="tb">
        <form role="form" name="fromNMapa" method="POST">
          <br>
          <fieldset>
            <legend>Nueva Ubicacion</legend>
            <div class="form-group">
              <label>Lugar</label>
              <div class="input-group">
                <input type="text" class="form-control" name="lugar" id="lugar" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Latitud</label>
              <div class="input-group">
                <input type="text" class="form-control" name="latitud" id="latitud" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Longitud</label>
              <div class="input-group">
                <input type="text" class="form-control" name="longitud" id="longitud" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Distrito</label>
              <div class="input-group">
                <select class="form-control" name="distrito" id="distrito" required>
                  <option value="">Seleccione Distrito</option>
                  {foreach from=$Distrito item=dato1}
                  <option value="{$dato1.ID}">{$dato1.DISTRITO}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Icono</label>
              <div class="input-group">
                <select class="form-control" name="icono" id="icono" required>
                  <option value="">Seleccione Icono</option>
                  {foreach from=$Iconos item=dato2}
                  <option value="{$dato2.ID}">{$dato2.NOMBRE}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Activo</label>
              <div class="input-group">
                <input type="radio" name="activo" id="activo" value="1" checked>Si <input type="radio" name="activo" id="activo" value="0">No
              </div>
            </div>
          </fieldset>
          <button class="btn btn-primary" name="MG" type="submit">Guardar</button>
          <a class="btn btn-danger" href="index.php?accion=Mapas/Lista">Cancelar</a>
        </form>
      </div>
      {$Mensaje}
    </div>
  </div>
</body>
</html>
