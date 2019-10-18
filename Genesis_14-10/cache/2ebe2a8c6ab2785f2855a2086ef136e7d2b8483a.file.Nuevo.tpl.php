<?php /* Smarty version Smarty-3.1.21, created on 2019-06-04 02:47:05
         compiled from "views\Usuario\Nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143111395cec1e15d09081-03440544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebe2a8c6ab2785f2855a2086ef136e7d2b8483a' => 
    array (
      0 => 'views\\Usuario\\Nuevo.tpl',
      1 => 1559609223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143111395cec1e15d09081-03440544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cec1e15d52e26_07109978',
  'variables' => 
  array (
    'Distrito' => 0,
    'dato1' => 0,
    'Rol' => 0,
    'dato2' => 0,
    'Personal' => 0,
    'dato3' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cec1e15d52e26_07109978')) {function content_5cec1e15d52e26_07109978($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
  <title>Nuevo Usuario</title>
</head>

<body>
  <?php echo '<script'; ?>
 type="text/jscript">
   function obtener() {
    //obtiene la id del select
    //    var d = document.getElementById("distrito").value;
     }
  <?php echo '</script'; ?>
>
  <font color="white"> </font>
  <div class="container">
    <div class="row">
      <div class=" col-md-3"></div>
      <div class=" col-md-6" id="tb">
        <form role="form" name="fromNUSER" method="POST">
            <br>
          <fieldset>
            <legend>Nuevo Usuario</legend>
            <div class="form-group">
              <label>Usuario</label>
              <div class="input-group">
                <input type="text" class="form-control" name="user" id="user">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <div class="input-group">
                <input type="text" class="form-control" name="pass" id="pass">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Distrito</label>
              <div class="input-group">
                <select class="form-control" name="distrito" id="distrito" >
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
              <label>Rol</label>
              <div class="input-group">
                <select class="form-control" name="rol" id="rol">
                  <?php  $_smarty_tpl->tpl_vars['dato2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Rol']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato2']->key => $_smarty_tpl->tpl_vars['dato2']->value) {
$_smarty_tpl->tpl_vars['dato2']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['dato2']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato2']->value['TIPO'];?>
</option>
                  <?php } ?>
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Personal</label>
              <div class="input-group">
                <select class="form-control" name="personal" id="personal">
                  <?php  $_smarty_tpl->tpl_vars['dato3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Personal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato3']->key => $_smarty_tpl->tpl_vars['dato3']->value) {
$_smarty_tpl->tpl_vars['dato3']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['dato3']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato3']->value['NOMBRE'];?>
 <?php echo $_smarty_tpl->tpl_vars['dato3']->value['APELLIDO'];?>
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
          </fieldset>
          <button class="btn btn-primary" name="UG" type="submit">Guardar</button>
          <a class="btn btn-danger" href="index.php?accion=Usuario/Lista">Cancelar</a>
        </form>
      </div>
      <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

    </div>
  </div>
</body>

</html>
<?php }} ?>
