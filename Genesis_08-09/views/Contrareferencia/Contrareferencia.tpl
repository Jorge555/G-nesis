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
                                <input type="text" name="ID" value="{$DATO}" hidden/>
                                <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th colspan="2">Resumen de la devolucion <textarea class="form-control rounded-0"  name="dato1" id="dato1"></textarea></th>
                                <th colspan="2">Tratamiento Brindado<textarea class="form-control rounded-0"  name="dato2" id="dato2"></textarea></th>
                              </tr><tr><th colspan="2">Diagnostico<textarea class="form-control rounded-0"  name="dato3" id="dato3"></textarea></th>
                                <th colspan="2">Recomendaciones<textarea class="form-control rounded-0"  name="dato4" id="dato4"></textarea></th>
                              </tr></tbody></table>
                        </fieldset>
                        <input type="submit"  class="btn btn-danger"  name="Regresar" value="Regresar">
                        <input type="submit"  class="btn btn-danger"  name="Guardar" value="Guardar">
                    </form>
                </div>
            </div>
            {$Mensaje}
        </div>
    </body>
</html>
