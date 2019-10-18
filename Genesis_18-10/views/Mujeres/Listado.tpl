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
                <div class="col-md-12">
                    <br>
                  <form id="miform" method="post" >
                    <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Mujeres/Nuevo"> Nuevo</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>NOMBRE</th>
                              <th>DPI</th>
                              <th>EMBARAZADA</th>
                              <th>PRIORIDAD</th>
                             <th>REGISTROS</th>
                              <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      {foreach from=$Listado item=dato}
                      <tr>
                        <th>{$dato.NOMBRE_M}</th>
                        <th>{$dato.DPI_M}</th>
                        <th>
                          {if {$dato.POSPARTO} == "1"}
                            <button  class="btn btn-success" name="btnPrioridad2"></button>
                          {else}
                            <button class="btn btn-secondary" name="btnPrioridad" ></button>
                          {/if}
                          </th>
                        <th>
                          {if {$dato.PRIORIDAD} == "1"}
                            <button  class="btn btn-danger" name="btnPrioridad2"></button>
                          {else}
                            <button class="btn btn-primary" name="btnPrioridad" ></button>
                          {/if}
                          </th>
                        <td>
                                    <button type="submit" class="btn btn-primary" name="Registro" value="{$dato.ID}"><span class="glyphicon glyphicon-folder-open"></span>  Ver Datos</button>
                                    <button type="submit" class="btn btn-primary" name="Antecedentes" value="{$dato.ID}"><span class="glyphicon glyphicon-folder-open"></span> Antecedentes</button>
                                    <button type="submit" class="btn btn-primary" name="Referencias" value="{$dato.ID}"><span class="glyphicon glyphicon-folder-open"></span> Referencias</button>

                            </td>
                            <td>
                                        <!--
                                        <button type="submit" class="btn btn-primary" name="Modificar" value="{$dato.ID}"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
                                        -->
                                        <button type="submit" class="btn btn-primary" name="EMBARAZADA" value="{$dato.ID}"><span class="glyphicon glyphicon-plus"></span>EMBARAZADA</button>
                                        <button type="submit" class="btn btn-danger" name="POSPARTO" value="{$dato.ID}"><span class="glyphicon glyphicon-ok"></span>POSPARTO</button>
                                </td>
                            </tr>
                              {/foreach}
                    </tbody>
                </table>

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
