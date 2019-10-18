<!DOCTYPE html>
<html>

<head>
  <title>Moficar Usuario</title>
</head>

<body>
  <script type="text/jscript">
    //  function ShowSelected() {
    //obtiene la id del select
    //    var d = document.getElementById("distrito").value;
    //  }

  </script>

  <font color="white"> </font>
  <div class="container">
    <div class="row">
      <div class=" col-md-3"></div>
      <div class=" col-md-6" id="tb">
        <form role="form" name="fromNUSER" method="POST">
          <fieldset>
            <legend>Modificar Usuario</legend>
            <input hidden type="text"  name="id" id="id" value="{$AUX[0].ID}">
            <div class="form-group">
              <label>Usuario</label>
              <div class="input-group">
                <input type="text" class="form-control" name="user" id="user" value="{$AUX[0].USER}">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>

            <div class="form-group">
              <label>Contraseña</label>
              <div class="input-group">
                <input type="text" class="form-control" name="pass" id="pass" value="{$AUX[0].PASS}">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>

            <div class="form-group">
              <label>Distrito</label>
              <div class="input-group">
                <select class="form-control" name="distrito" id="distrito"  value="{$AUX[0].DIST}" >
                  {foreach from=$Distrito item=dato1}
                  <option value="{$dato1.ID}" {if $AUX[0].DIST eq $dato1.ID} selected {/if}>{$dato1.DISTRITO}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>

            <div class="form-group">
              <label>Rol</label>
              <div class="input-group">

                <select class="form-control" value="{$AUX[0].ROL}" name="rol" id="rol" >
                  {foreach from=$Rol item=dato2}
                  <option value="{$dato2.ID}" {if $AUX[0].ROL eq $dato2.ID} selected {/if}>{$dato2.TIPO}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>

            <div class="form-group">
              <label>Personal</label>
              <div class="input-group">

                <select class="form-control" name="personal" id="personal" disabled value="{$AUX[0].PERSONAL}" >
                 {foreach from=$Personal item=dato3}
                  <option value="{$dato3.ID}" {if $AUX[0].PERSONAL eq $dato3.ID} selected {/if}>{$dato3.NOMBRE} {$dato3.APELLIDO}</option>
                  {/foreach}
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>

            <div class="form-group">
              <label>Activo</label>
              <div class="input-group">
                <input type="radio" name="activo" id="activo" value="1" {if $AUX[0].ACTIVO eq "1"} checked {/if}>Si <input type="radio" name="activo" id="activo" value="0" {if $AUX[0].ACTIVO eq "0"} checked {/if}>No
              </div>
            </div>
          </fieldset>
        <button class="btn btn-info" name="UG" type="submit" ondblclick="obtener()">Guardar</button>
        <a class="btn btn-danger" href="index.php?accion=Usuario/Lista">Cancelar</a>
        </form>
      </div>
      {$Mensaje}

    </div>
  </div>
</body>

</html>
