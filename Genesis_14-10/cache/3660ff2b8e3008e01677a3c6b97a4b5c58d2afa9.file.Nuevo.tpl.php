<?php /* Smarty version Smarty-3.1.21, created on 2019-10-13 01:11:20
         compiled from "views\Mapas\Nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92195d8aeba66a0538-69942428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3660ff2b8e3008e01677a3c6b97a4b5c58d2afa9' => 
    array (
      0 => 'views\\Mapas\\Nuevo.tpl',
      1 => 1570921850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92195d8aeba66a0538-69942428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8aeba670a153_97978018',
  'variables' => 
  array (
    'Distrito' => 0,
    'dato1' => 0,
    'Iconos' => 0,
    'dato2' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8aeba670a153_97978018')) {function content_5d8aeba670a153_97978018($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Nueva Ubicacion</title>
</head>
<body>
  <font color="white"> </font>
  <div class="container">
    <div class="row">
      <div class=" col-md-3"></div>
      <div class=" col-md-6" id="tb">
        <form role="form" name="fromNMapa" method="POST">
          <br>
          <fieldset>
            <legend>Nueva Ubicacion</legend>
            <div class="form-group">
              <label>Lugar</label>
              <div class="input-group">
                <input type="text" class="form-control" name="lugar" id="lugar" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Latitud</label>
              <div class="input-group">
                <input type="text" class="form-control" name="latitud" id="latitud" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Longitud</label>
              <div class="input-group">
                <input type="text" class="form-control" name="longitud" id="longitud" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Distrito</label>
              <div class="input-group">
                <select class="form-control" name="distrito" id="distrito" required>
                  <option value="">Seleccione Distrito</option>
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
              <label>Icono</label>
              <div class="input-group">
                <select class="form-control" name="icono" id="icono" required>
                  <option value="">Seleccione Icono</option>
                  <?php  $_smarty_tpl->tpl_vars['dato2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Iconos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato2']->key => $_smarty_tpl->tpl_vars['dato2']->value) {
$_smarty_tpl->tpl_vars['dato2']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['dato2']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato2']->value['NOMBRE'];?>
</option>
                  <?php } ?>
                </select>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label>Activo</label>
              <div class="input-group">
                <input type="radio" name="activo" id="activo" value="1" checked>Si <input type="radio" name="activo" id="activo" value="0">No
              </div>
            </div>
          </fieldset>
          <button class="btn btn-primary" name="MG" type="submit">Guardar</button>
          <a class="btn btn-danger" href="index.php?accion=Mapas/Lista">Cancelar</a>
        </form>
      </div>
      <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

    </div>
  </div>
</body>

</html>
<?php }} ?>
