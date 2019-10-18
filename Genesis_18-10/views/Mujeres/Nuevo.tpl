<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo</title>
    </head>
    <body>
      <font color="white"> </font>
      <div class="container" >
          <div class="row">
              <div class=" col-md-10" id="tb"  >
                  <form role="form" method="POST" >
                      <br>
                      <fieldset  >
                          <legend>Datos Embarazada</legend>
                          <table class="table  table-striped  table-bordered"><tbody>
                          <tr><th>Nombre de la Embarazada </th><th><input type="text"class="form-control" required  name="nombre_m" id="nombre_m"></th>
                          </tr><tr><th> Edad en años</th><th><input type="number" class="form-control"  name="edad_m" id="edad_m"></th>
                          </tr><tr><th>DPI</th><th><input type="text"  class="form-control" name="dpi_m" id="dpi_m"></th>
                          </tr><tr><th>Pueblo</th><th> <select name="pueblo_m" id="pueblo_m" class="form-control">
                            {foreach from=$Pueblos item=dato1}
                            <option value="{$dato1.ID}">{$dato1.PUEBLO}</option>
                            {/foreach}
                          </select></th>
                        </tr><tr><th>Escolaridad</th><th><select name="escolaridad_m" id="escolaridad_m" class="form-control">
                                {foreach from=$Escolaridad item=dato2}
                                <option value="{$dato2.ID}">{$dato2.ESCOLARIDAD}</option>
                                {/foreach}
                              </select></th>
                          </tr></tbody></table>
                            </fieldset>
                              <fieldset>
                                <legend>Datos Esposo</legend>
                                <table class="table  table-striped  table-bordered"><tbody>
                                <tr><th>Nombre Esposo o conviviente</th><th><input type="text"class="form-control" required  name="nombre_h" id="nombre_h"></th>
                                </tr><tr><th> Edad en años</th><th><input type="number" class="form-control"  name="edad_h" id="edad_h"></th>
                                </tr><tr><th>DPI</th><th><input type="text"  class="form-control" name="dpi_h" id="dpi_h"></th>
                                </tr><tr><th>Pueblo</th><th> <select name="pueblo_h" id="pueblo_h" class="form-control">
                                  {foreach from=$Pueblos item=dato1}
                                  <option value="{$dato1.ID}">{$dato1.PUEBLO}</option>
                                  {/foreach}
                                </select></th>
                              </tr><tr><th>Escolaridad</th><th><select name="escolaridad_h" id="escolaridad_h" class="form-control">
                                      {foreach from=$Escolaridad item=dato2}
                                      <option value="{$dato2.ID}">{$dato2.ESCOLARIDAD}</option>
                                      {/foreach}
                                    </select></th>
                                </tr></tbody></table>
                              </fieldset>
                            <fieldset>
                              <legend>Otros Datos</legend>

                              <table class="table  table-striped  table-bordered"><tbody>
                              <tr><th>Distancias en KM al Servicio de salud mas cercano</th><th><input type="number" class="form-control" required  name="distancia" id="distancia"></th>
                              </tr><tr><th>Tiempo en horas para llegar</th><th><input type="time" class="form-control"  name="tiempo" id="tiempo" max="50:30:00" min="00:05:00"></th>
                              </tr><tr><th>Nombre de la comunidad</th><th><input type="text"  class="form-control" name="comunidad" id="comunidad"></th>
                              </tr><tr><th>No. de celular de señora,pareja o comunitario</th><th><input type="number"  class="form-control" name="celular" id="celular"></th>
                              </tr></tbody></table>
                        </fieldset>
                         <input type="submit" class="btn btn-primary"  name="Guardar" value="Guardar">
                        <a class="btn btn-danger" href="index.php?accion=Mujeres/Lista">Regresar</a>
                      </form>
                  </div>
                    {$Mensaje}
              </div>
            </div>
            </body>
    </html>
