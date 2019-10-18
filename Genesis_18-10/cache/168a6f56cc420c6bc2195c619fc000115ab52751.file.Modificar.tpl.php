<?php /* Smarty version Smarty-3.1.21, created on 2019-05-13 07:05:22
         compiled from "views\Mujeres\Modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3531173455cd5036c61ce51-37973188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '168a6f56cc420c6bc2195c619fc000115ab52751' => 
    array (
      0 => 'views\\Mujeres\\Modificar.tpl',
      1 => 1557464928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3531173455cd5036c61ce51-37973188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cd5036c652958_04533797',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd5036c652958_04533797')) {function content_5cd5036c652958_04533797($_smarty_tpl) {?><!DOCTYPE html>
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
<?php }} ?>
