<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=50">
         <title>REFERENCIA</title>
    </head>
    <body>
        <font color="white"> </font>
        <div class="container" >
            <div class="row">
                <div class=" col-md-12" id="tb" >
                    <form role="form" action="#" method="POST">
                      <br>
                        <fieldset>
                            <legend>Boleta Contra Referencia</legend>
                                <input type="text" name="ID" value="{$AUX[0].ID_REF}" hidden/>
                                <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th colspan="2">Resumen de la devolucion <textarea class="form-control rounded-0" disabled >{$AUX[0].RESUMEN}</textarea></th>
                                <th colspan="2">Tratamiento Brindado<textarea class="form-control rounded-0" disabled >{$AUX[0].TRAT}</textarea></th>
                              </tr><tr><th colspan="2">Diagnostico<textarea class="form-control rounded-0" disabled >{$AUX[0].DIAG}</textarea></th>
                                <th colspan="2">Recomendaciones<textarea class="form-control rounded-0" disabled>{$AUX[0].RECOM}</textarea></th>
                              </tr></tbody></table>
                        </fieldset>
                        <input type="submit"  class="btn btn-danger"  name="Regresar" value="Regresar">
                    </form>
                </div>
            </div>
            {$Mensaje}
        </div>
    </body>
</html>
