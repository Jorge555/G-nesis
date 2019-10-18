<!DOCTYPE html>
<html>
    <head>
        <title>Listado</title>
    </head>
    <body>
        <div class="container" id="tb">
            <div class="row" >
                <div class="col-md-10">
                    <h3>{$IDEB[0].NOMBRE_M}</h3>
                    <form id="miform" method="post" >
                    <a class="btn btn-primary" href="index.php?accion=Mujeres/Lista"><span class="glyphicon glyphicon-arrow-left"></span>Regresar</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>Fecha</th>
                              <th>Servicio Envia</th>
                              <th>Servicio Recibe</th>
                              <th>ContraReferido</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       {foreach from=$RFDATA item=dato}
                     <tr>
                       <th>{$dato.FECHA}</th>
                       <th>{$dato.DISTRITO1}</th>
                       <th>{$dato.DISTRITO2}</th>
                             <td>
                               {if $dato.CONTRAR== "1"}
                                 <button  class="btn btn-success" name="btnPrioridad2"></button>
                               {else}
                                 <button class="btn btn-secondary" name="btnPrioridad" ></button>
                               {/if}
                                </td>
                                <td>
                               <button type="submit" class="btn btn-primary" name="Registro" value="{$dato.ID}"><span class="glyphicon glyphicon-folder-open"></span>Ver Datos</button>
                               {if $dato.CONTRAR== "1"}
                               <button type="submit" class="btn btn-primary" name="RCONTRA" value="{$dato.ID}"><span class="glyphicon glyphicon-folder-open"></span>Ver ContraReferencia</button>
                               {/if}
                               <button type="submit" class="btn btn-primary" name="IMPRIMIR" value="{$dato.ID}"><span class="glyphicon glyphicon-print"></span> IMPRIMIR REFERENCIA</button>
                                 </td>
                            </tr>
                             {/foreach}
                    </tbody>
                </table>
                  </form>
                </div>
            </div>
            {$Mensaje}
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
