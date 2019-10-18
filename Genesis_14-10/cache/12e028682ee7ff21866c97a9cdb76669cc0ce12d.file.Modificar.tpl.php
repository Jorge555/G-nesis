<?php /* Smarty version Smarty-3.1.21, created on 2019-09-27 04:31:22
         compiled from "views\Personal\Modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63735d8c39902ee382-20252156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e028682ee7ff21866c97a9cdb76669cc0ce12d' => 
    array (
      0 => 'views\\Personal\\Modificar.tpl',
      1 => 1569551480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63735d8c39902ee382-20252156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8c399038c147_59210631',
  'variables' => 
  array (
    'AUX' => 0,
    'Distrito' => 0,
    'dato1' => 0,
    'Puesto' => 0,
    'dato2' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8c399038c147_59210631')) {function content_5d8c399038c147_59210631($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Modificar Personal</title>
    </head>
    <body>
        <div class="container" >
            <div class="row">
                <div class=" col-md-3">
                </div>
                <div class=" col-md-6" id="tb" >
                   <h3>Modificar</h3>
                    <form role="form" id="Personal" method="POST" >
                        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>

                          <input hidden type="text"  name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ID'];?>
">
                        <div class="form-group">
                            <label>Nombre</label>
                            <div class="input-group">
                                <input type="text" class="form-control"name="nombre" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['NOMBRE'];?>
" >
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['APELLIDO'];?>
" >
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                           <label>Sexo</label>
                            <div class="input-group">
                             <select class="form-control" name="sexo" id="sexo" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['SEXO'];?>
" >
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['AUX']->value[0]['SEXO']=="0") {?> selected <?php }?>>Mujer</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['AUX']->value[0]['SEXO']=="1") {?> selected <?php }?>>Hombre</option>
                                </select>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">
                          <label>Distrito</label>
                          <div class="input-group">
                            <select class="form-control" name="distrito" id="distrito" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['DISTRITO'];?>
" >
                              <?php  $_smarty_tpl->tpl_vars['dato1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Distrito']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato1']->key => $_smarty_tpl->tpl_vars['dato1']->value) {
$_smarty_tpl->tpl_vars['dato1']->_loop = true;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['dato1']->value['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['AUX']->value[0]['DISTRITO']==$_smarty_tpl->tpl_vars['dato1']->value['ID']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['dato1']->value['DISTRITO'];?>
</option>
                              <?php } ?>
                            </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Puesto</label>
                          <div class="input-group">
                            <select class="form-control" name="puesto" id="puesto" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['PUESTO'];?>
" >
                              <?php  $_smarty_tpl->tpl_vars['dato2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Puesto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato2']->key => $_smarty_tpl->tpl_vars['dato2']->value) {
$_smarty_tpl->tpl_vars['dato2']->_loop = true;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['dato2']->value['ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['AUX']->value[0]['PUESTO']==$_smarty_tpl->tpl_vars['dato2']->value['ID']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['dato2']->value['PUESTO'];?>
</option>
                              <?php } ?>
                            </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Activo</label>
                          <div class="input-group">
                            <input type="radio" name="activo" id="activo" value="1" <?php if ($_smarty_tpl->tpl_vars['AUX']->value[0]['ACTIVO']=="1") {?> checked <?php }?>>Si <input type="radio" name="activo" id="activo" value="0" <?php if ($_smarty_tpl->tpl_vars['AUX']->value[0]['ACTIVO']=="0") {?> checked <?php }?>>No
                          </div>
                        </div>

                       <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
                       <a class="btn btn-danger" href="index.php?accion=Personal/Lista">Cancelar</a>

                    </form>
                </div>
  <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

        </div>
    </body>
</html>
<?php }} ?>
