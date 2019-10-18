<!DOCTYPE html>
<html>
    <head>
        <title>Listado</title>
    </head>
    <body>
        <div class="container" id="tb">
            <div class="row">
            </div>
            <div class="row" >
                <div class="col-md-10">
                  <h2>Antecedentes Gineo-Obsetricos de:</h2>
                  <h3>{$IDEB[0].NOMBRE_M}</h3>
                    <form id="miform" method="post" >
                    <button type="submit" class="btn btn-primary" name="Nuevo" value="{$IDEB[0].ID}" >Nuevo Registro</button>
                    <a class="btn btn-primary" href="index.php?accion=Mujeres/Lista"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>Fecha</th>
                            <th>Prioridad</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                          {foreach from=$RFRO item=dato}
                     <tr>
                      <th>{$dato.FECHA}</th>
                        <th>
                              {if $dato.PRIORIDAD == "1"}
                                <button  class="btn btn-danger" name="btnPrioridad2"></button>
                              {else}
                                <button class="btn btn-primary" name="btnPrioridad" ></button>
                              {/if}
                        </th>
                             <td>
                            <button type="submit" class="btn btn-primary" name="Registro" value="{$dato.ID}"><span class="glyphicon glyphicon-folder-open"></span>  Ver Datos</button>
                            {if $dato.REFERIDO == "0"}
                            <button type="submit" class="btn btn-primary" name="Referir" value="{$dato.ID}"><span class="glyphicon glyphicon-share-alt"></span> Referir</button>
                            {/if}
                              </td>
                            </tr>
                              {/foreach}
                    </tbody>
                </table>
              </form>
                </div>
            </div>
        </div>
        <script>
         $(document).ready(function(){
         $('#xtabla').DataTable();
         });

    function eliminar(IDEMPLEADO){
          alertify.confirm('Desea Dar de Baja?',function(e){
              if(e){
                location.href="#"+IDEMPLEADO;
              }
          })  ;

         }
        </script>
    </body>
</html>
