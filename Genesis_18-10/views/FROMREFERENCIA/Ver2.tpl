<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=50">

         <title>REFERENCIA</title>
    </head>
    <body onload="miFuncion();">

      <script type="text/jscript">
        function miFuncion() {
      var campo1 = $('#dato5').val();
      var campo2 = $('#dato55').val();
      if(campo1=="1"){ $('#dato5').attr('checked', true); }
      if(campo2=="0"){ $('#dato55').attr('checked', true); }
          }
      </script>
        <font color="white"> </font>
        <div class="container" >
            <div class="row">
                <div class=" col-md-12" id="tb" >
                    <form role="form" action="#" method="POST">
                          <input  type="text"  name="ID" id="ID" value="{$AUX[0].ID}" hidden>
                          <br>
                        <fieldset>
                            <legend>Datos de Referencia</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th>Servicio de Salud que Envia</th><th><input type="text" value="{$AUX3[0].DISTRITO1}" disabled></th>
                                <th>Servico de Salud que Refiere</th><th><input type="text" value="{$AUX3[0].DISTRITO2}" disabled >
                                </th>
                              </tr><tr><th>Fecha</th><th><input type="date" name="dato3" id="dato3" value="{$AUX2[0].FECHA}" disabled></th>
                                <th>Nombre Paciente</th><th><input type="text" value="{$AUX[0].NOMBRE_M}" disabled ></th>
                               </tr><tr><th>Telefono</th><th><input type="number" value="{$AUX[0].TEL}" disabled></th>
                                <th>Hora de Traslado 24hrs</th><th><input type="time"  name="dato4" id="dato4"  value="{$AUX2[0].HORA}" disabled></th>
                              </tr><tr><th colspan="2"><input type="radio"  name="dato5" id="dato5" value="{$AUX2[0].CE}" disabled > Consulta Externa <br> <input type="radio"  name="dato55" id="dato55" value="{$AUX2[0].CE}" disabled> Emergencia</th>
                              <th colspan="2">Historia de enfermedad actual<textarea class="form-control rounded-0" disabled  >{$AUX2[0].HISTORIAE}</textarea></th>
                              </tr></tbody></table>
                        </fieldset>
                        <fieldset>
                            <legend>Antecedentes Medicos</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th colspan="2">Medicos <textarea class="form-control rounded-0"   disabled >{$AUX2[0].AM_MEDI}</textarea></th>
                                <th colspan="2">Memtales<textarea class="form-control rounded-0"   disabled >{$AUX2[0].AM_MENT}</textarea></th>
                              </tr><tr><th colspan="2">Quirugicos<textarea class="form-control rounded-0"  disabled >{$AUX2[0].AM_QUI}</textarea></th>
                                <th colspan="2">Traumaticos<textarea class="form-control rounded-0" disabled >{$AUX2[0].AM_TRAU}</textarea></th>
                              </tr><tr><th colspan="4">Alergicos<textarea class="form-control rounded-0"   disabled  >{$AUX2[0].AM_ALERG}</textarea></th><th></th>
                              </tr></tbody></table>
                        </fieldset>
                        <fieldset>
                            <legend>Examen Fisico</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th>Peso</th><th><input type="number" value="{$AUX2[0].EF_PESO}" disabled></th>
                                <th>Talla</th><th><input type="number" value="{$AUX2[0].EF_TALLA}" disabled></th>
                              </tr><tr><th>Pulso</th><th><input type="number" value="{$AUX2[0].EF_PULSO}" disabled></th>
                                <th>P/A</th><th><input type="number" value="{$AUX2[0].EF_PA}" disabled></th>
                              </tr><tr><th>F/R</th><th><input type="number" value="{$AUX2[0].EF_FR}" disabled></th>
                                <th>T</th><th><input type="number" value="{$AUX2[0].EF_T}" disabled></th>
                              </tr><tr><th>FCF</th><th><input type="number" value="{$AUX2[0].EF_FCF}" disabled></th>
                              <th>Ingresion Clinica</th><th><input type="date" value="{$AUX2[0].INGC}" disabled></th>
                            </tr><tr><th colspan="2">Motivo de Referencia<textarea class="form-control rounded-0"  disabled>{$AUX2[0].MOTREFE}</textarea> </th>
                              <th colspan="2">Tratamiento y Menejo efectuado en el servicio<textarea class="form-control rounded-0" disabled >{$AUX2[0].TRATAMIENTO}</textarea></th>
                            </tr><tr><th colspan="4">Examenes Ralizados<textarea class="form-control rounded-0" disabled >{$AUX2[0].EXAMENES}</textarea></th><th></th>
                              </tr></tbody></table>
                        </fieldset>
                        <input type="submit"  class="btn btn-danger" id="Regresar" name="Regresar" value="Regresar">
                           {if $AUX2[0].CONTRAR== "0"}
                        <input type="submit" class="btn btn-primary"  name="Guardar" value="ContraReferir">
                            {/if}
                    </form>
                </div>
            </div>
            {$Mensaje}
        </div>
    </body>
</html>
