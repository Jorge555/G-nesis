<?php /* Smarty version Smarty-3.1.21, created on 2019-05-29 22:52:11
         compiled from "views\Usuario\Modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17401417125ceea320da6e12-72916709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b323ec2dc637f4f39a0b19d4b270d7894027ce8' => 
    array (
      0 => 'views\\Usuario\\Modificar.tpl',
      1 => 1559163130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17401417125ceea320da6e12-72916709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ceea320e0d0d1_82638099',
  'variables' => 
  array (
    'AUX' => 0,
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
<?php if ($_valid && !is_callable('content_5ceea320e0d0d1_82638099')) {function content_5ceea320e0d0d1_82638099($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
  <title>Moficar Usuario</title>
</head>

<body>
  <?php echo '<script'; ?>
 type="text/jscript">
    //  function ShowSelected() {
    //obtiene la id del select
    //    var d = document.getElementById("distrito").value;
    //  }

  <?php echo '</script'; ?>
>

  <font color="white"> </font>
  <div class="container">
    <div class="row">
      <div class=" col-md-3"></div>
      <div class=" col-md-6" id="tb">
        <form role="form" name="fromNUSER" method="POST">
          <fieldset>
            <legend>Modificar Usuario</legend>
            <input hidden type="text"  name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ID'];?>
">
            <div class="form-group">
              <label>Usuario</label>
              <div class="input-group">
                <input type="text" class="form-control" name="user" id="user" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['USER'];?>
">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>

            <div class="form-group">
              <label>Contraseña</label>
              <div class="input-group">
                <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['PASS'];?>
">
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>

            <div class="form-group">
              <label>Distrito</label>
              <div class="input-group">
                <select class="form-control" name="distrito" id="distrito"  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['DIST'];?>
" >
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

                <select class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ROL'];?>
" name="rol" id="rol" >
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

                <select class="form-control" name="personal" id="personal" disabled value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['PERSONAL'];?>
" >
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
        <button class="btn btn-info" name="UG" type="submit" ondblclick="obtener()">Guardar</button>
        <a class="btn btn-danger" href="index.php?accion=Usuario/Lista">Cancelar</a>
        </form>
      </div>
      <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>


    </div>
  </div>
</body>

</html>
<?php }} ?>
