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
                    <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Personal/Nuevo"> Nuevo</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Puesto</th>
                            <th>Distrito</th>
                            <th>Activo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      {foreach from=$Listado item=dato}
                      <tr>
                        <th>{$dato.NOMBRE}</th>
                        <th>{$dato.APELLIDO}</th>
                        <th>{$dato.PUESTO}</th>
                        <th>{$dato.DISTRITO}</th>
                        <th>{$dato.ACTIVO}</th>
                        <td>
                      <button type="submit" class="btn btn-primary" name="Modificar" value="{$dato.ID}"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
                      <button type="submit" class="btn btn-danger" name="Baja" value="{$dato.ID}"><span class="glyphicon glyphicon-arrow-down"></span> Baja</button>
                      <button type="submit" class="btn btn-primary" name="Alta" value="{$dato.ID}"><span class="glyphicon glyphicon-arrow-up"></span> Activo</button>
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
