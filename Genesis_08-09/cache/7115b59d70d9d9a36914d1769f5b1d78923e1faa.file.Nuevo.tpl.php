<?php /* Smarty version Smarty-3.1.21, created on 2019-09-20 22:16:10
         compiled from "views\Personal\Nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11482675575d83bd5e133ce2-23437489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7115b59d70d9d9a36914d1769f5b1d78923e1faa' => 
    array (
      0 => 'views\\Personal\\Nuevo.tpl',
      1 => 1569010566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11482675575d83bd5e133ce2-23437489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d83bd5e1ea9e0_30229779',
  'variables' => 
  array (
    'Distrito' => 0,
    'dato1' => 0,
    'Puesto' => 0,
    'dato2' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83bd5e1ea9e0_30229779')) {function content_5d83bd5e1ea9e0_30229779($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Personal</title>
    </head>
    <body>
     
        <div class="container" >
            <div class="row">
                <div class=" col-md-3">
                </div>
                <div class=" col-md-6" id="tb" >
                   <h3>Nuevo Personal</h3>
                    <form role="form" id="Personal" method="POST" >
                        <input type="hidden" name="op" value="insertar"/>
                        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>

                        <div class="form-group">
                            <label>Nombre</label>
                            <div class="input-group">
                                <input type="text" class="form-control"name="nombre" id="nombre" >
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="apellido" id="apellido">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                           <label>Sexo</label>
                            <div class="input-group">
                             <select class="form-control" name="sexo" id="sexo">
                                <option value="0">Mujer</option>
                                <option value="1">Hombre</option>
                                </select>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                          <label>Distrito</label>
                          <div class="input-group">
                            <select class="form-control" name="distrito" id="distrito">
                              <?php  $_smarty_tpl->tpl_vars['dato1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Distrito']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato1']->key => $_smarty_tpl->tpl_vars['dato1']->value) {
$_smarty_tpl->tpl_vars['dato1']->_loop = true;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['dato1']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato1']->value['DISTRITO'];?>
</option>
                              <?php } ?>
                            </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Puesto</label>
                          <div class="input-group">
                            <select class="form-control" name="puesto" id="puesto">
                              <?php  $_smarty_tpl->tpl_vars['dato2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Puesto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato2']->key => $_smarty_tpl->tpl_vars['dato2']->value) {
$_smarty_tpl->tpl_vars['dato2']->_loop = true;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['dato2']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato2']->value['PUESTO'];?>
</option>
                              <?php } ?>
                            </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Activo</label>
                          <div class="input-group">
                            <input type="radio" name="activo" id="activo" value="1" checked="true">Si <input type="radio" name="activo" id="activo" value="0">No
                          </div>
                        </div>

                       <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                       <a class="btn btn-danger" href="index.php?accion=Personal/Lista">Cancelar</a>

                    </form>
                     <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

                </div>
 
        </div>
    </body>
</html>
<?php }} ?>
