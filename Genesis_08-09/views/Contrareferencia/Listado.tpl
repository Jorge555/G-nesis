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
                      <form id="miform" method="post" >
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>Fecha</th>
                             <th>Servicio Envia</th>
                             <th>Paciente</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      {foreach from=$LRC item=dato}
                     <tr>
                       <th>{$dato.FECHA}</th>
                        <th>{$dato.DISTRITO}</th>
                         <th>{$dato.NOMBRE}</th>
                             <td>
                                    <button type="submit" class="btn btn-primary" name="Registro" value="{$dato.ID}"><span class="glyphicon glyphicon-folder-open"></span>Ver Datos Referencia</button>
                                      {if {$dato.CONTRAR} == "1"}
                                        <button type="submit" class="btn btn-primary" name="Registro2" value="{$dato.ID}"><span class="glyphicon glyphicon-share-alt"></span>Ver Datos ContraReferencia</button>
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
