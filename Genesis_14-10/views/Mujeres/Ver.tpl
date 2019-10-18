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
                            <input hidden type="text"  name="id" id="id" value="{$AUX[0].ID}" >
                            <table class="table  table-striped  table-bordered"><tbody>
                            <tr><th>Nombre de la Embarazada </th><th><input type="text" value="{$AUX[0].NOMBRE_M}" disabled></th>
                            </tr><tr><th> Edad en años</th><th> <input type="text" value="{$AUX[0].EDAD_M}"disabled></th>
                            </tr><tr><th>DPI</th><th><input type="text" value="{$AUX[0].DPI_M}"disabled></th>
                            </tr><tr><th>Pueblo</th><th> <input type="text" value="{$AUX[0].PUEBLO_M}"disabled></th>
                            </tr><tr><th>Escolaridad</th><th> <input type="text" value="{$AUX[0].ESC_M}"disabled></th>
                            </tr></tbody></table>
                            </fieldset>
                              <fieldset>
                                <legend>Datos Esposo</legend>
                                <table class="table  table-striped  table-bordered"><tbody>
                                <tr><th>Nombre Esposo o conviviente </th><th><input type="text" value="{$AUX[0].NOMBRE_H}"disabled></th>
                                </tr><tr><th> Edad en años</th><th> <input type="text" value="{$AUX[0].EDAD_H}"disabled></th>
                                </tr><tr><th>DPI</th><th><input type="text" value="{$AUX[0].DPI_H}"disabled></th>
                                </tr><tr><th>Pueblo</th><th> <input type="text" value="{$AUX[0].PUEBLO_H}"disabled></th>
                                </tr><tr><th>Escolaridad</th><th> <input type="text" value="{$AUX[0].ESC_H}"disabled></th>
                                </tr></tbody></table>
                                </fieldset>
                              </fieldset>
                            <fieldset>
                          <legend>Otros Datos</legend>
                          <table class="table  table-striped  table-bordered"><tbody>
                          <tr><th>Distancias en KM al Servicio de salud mas cercano </th><th><input type="text"value="{$AUX[0].DIST}"disabled></th>
                          </tr><tr><th>Tiempo en horas para llegar</th><th><input type="text"value="{$AUX[0].TIEMPO}"disabled></th>
                          </tr><tr><th>Nombre de la comunidad</th><th><input type="text" value="{$AUX[0].COMUNIDAD}"disabled></th>
                          </tr><tr><th>No. de celular de señora,pareja o comunitario</th><th><input type="text" value="{$AUX[0].TEL}"disabled></th>
                          </tr></tbody></table>
                        </fieldset>
                        <a class="btn btn-primary" href="index.php?accion=Mujeres/Lista">Regresar</a>
                      </form>
                  </div>
                    {$Mensaje}
              </div>
            </div>
            </body>
    </html>
