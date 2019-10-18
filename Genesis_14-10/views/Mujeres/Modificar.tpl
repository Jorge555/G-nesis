<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo</title>
    </head>
    <body>
        <div class="container" >

            <div class="row">
                <div class=" col-md-3">
                </div>

                <div class=" col-md-6" id="tb" >

                   <h3>Modificar</h3>
                    <form role="form" action="" method="POST">
                        <input type="hidden" name="op" value="insertar"/>
                        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>

                        <div class="form-group">
                            <label>Nombre</label>
                            <div class="input-group">
                                <input type="text" class="form-control" >
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Edad</label>
                            <div class="input-group">
                                <input type="number" class="form-control">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                           <label>Sexo</label>
                            <div class="input-group">
                             <select class="form-control">
                                <option value="M">Mujer</option>
                                  <option value="H">Hombre</option>
                                </select>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Direccion</label>
                            <div class="input-group">
                                <input type="text" class="form-control" >
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                       <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                        <a class="btn btn-danger" href="index.php?accion=Mujeres/Lista">Cancelar</a>

                    </form>
                </div>


        </div>
    </body>
</html>
