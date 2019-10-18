<!DOCTYPE html>
<html>

<head>
  <title>Nuevo Usuario</title>
</head>

<body>
  <script type="text/jscript">
   function obtener() {
    //obtiene la id del select
    //    var d = document.getElementById("distrito").value;
     }
  </script>
  <font color="white"> </font>
  <div class="container">
    <div class="row">
      <div class=" col-md-3"></div>
      <div class=" col-md-6" id="tb">
        <form role="form" name="fromNUSER" method="POST">
            <br>
          <fieldset>
            <legend>Nuevo Usuario</legend>
            <div class="form-group">
              <label>Usuario</label>
              <div class="input-group">
                <input type="text" class="form-control" name="user" id="user">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <div class="input-group">
                <input type="text" class="form-control" name="pass" id="pass">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Distrito</label>
              <div class="input-group">
                <select class="form-control" name="distrito" id="distrito" >
                  {foreach from=$Distrito item=dato1}
                  <option value="{$dato1.ID}">{$dato1.DISTRITO}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Rol</label>
              <div class="input-group">
                <select class="form-control" name="rol" id="rol">
                  {foreach from=$Rol item=dato2}
                  <option value="{$dato2.ID}">{$dato2.TIPO}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Personal</label>
              <div class="input-group">
                <select class="form-control" name="personal" id="personal">
                  {foreach from=$Personal item=dato3}
                  <option value="{$dato3.ID}">{$dato3.NOMBRE} {$dato3.APELLIDO}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Activo</label>
              <div class="input-group">
                <input type="radio" name="activo" id="activo" value="1" checked="true">Si <input type="radio" name="activo" id="activo" value="0">No
              </div>
            </div>
          </fieldset>
          <button class="btn btn-primary" name="UG" type="submit">Guardar</button>
          <a class="btn btn-danger" href="index.php?accion=Usuario/Lista">Cancelar</a>
        </form>
           {$Mensaje}
      </div>
   
    </div>
  </div>
</body>

</html>
