<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Personal</title>
    </head>
    <body>
        <div class="container" >
            <div class="row">
                <div class=" col-md-3">
                </div>
                <div class=" col-md-6" id="tb" >
                   <h3>Modificar</h3>
                    <form role="form" id="Personal" method="POST" >
                        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>

                          <input hidden type="text"  name="id" id="id" value="{$AUX[0].ID}">
                        <div class="form-group">
                            <label>Nombre</label>
                            <div class="input-group">
                                <input type="text" class="form-control"name="nombre" id="nombre" value="{$AUX[0].NOMBRE}" >
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="apellido" id="apellido" value="{$AUX[0].APELLIDO}" >
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                           <label>Sexo</label>
                            <div class="input-group">
                             <select class="form-control" name="sexo" id="sexo" value="{$AUX[0].SEXO}" >
                                <option value="0" {if $AUX[0].SEXO eq "0"} selected {/if}>Mujer</option>
                                <option value="1" {if $AUX[0].SEXO eq "1"} selected {/if}>Hombre</option>
                                </select>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                          <label>Distrito</label>
                          <div class="input-group">
                            <select class="form-control" name="distrito" id="distrito" value="{$AUX[0].DISTRITO}" >
                              {foreach from=$Distrito item=dato1}
                              <option value="{$dato1.ID}" {if $AUX[0].DISTRITO eq $dato1.ID} selected {/if}>{$dato1.DISTRITO}</option>
                              {/foreach}
                            </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Puesto</label>
                          <div class="input-group">
                            <select class="form-control" name="puesto" id="puesto" value="{$AUX[0].PUESTO}" >
                              {foreach from=$Puesto item=dato2}
                              <option value="{$dato2.ID}" {if $AUX[0].PUESTO eq $dato2.ID} selected {/if}>{$dato2.PUESTO}</option>
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

                       <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                       <a class="btn btn-danger" href="index.php?accion=Personal/Lista">Cancelar</a>

                    </form>
                </div>
  {$Mensaje}
        </div>
    </body>
</html>
