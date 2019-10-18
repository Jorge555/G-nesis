<?php /* Smarty version Smarty-3.1.21, created on 2019-10-13 01:35:15
         compiled from "views\Mapas\Lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151935d8aeb7ada3fd8-44831572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e774553b5ea2d36214fbbbe952133d1452ae512a' => 
    array (
      0 => 'views\\Mapas\\Lista.tpl',
      1 => 1570923304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151935d8aeb7ada3fd8-44831572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8aeb7ade45f7_25414539',
  'variables' => 
  array (
    'Listado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8aeb7ade45f7_25414539')) {function content_5d8aeb7ade45f7_25414539($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Listado Ubicacion</title>
</head>
<body>
  <div class="container" id="tb">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-md-10">
          <br>
        <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Mapas/Lista_ubicaciones"> Listado Ubicaciones</a>
        <br><br>
        <table class="table table-striped table-bordered table-hover" id="xtabla">
          <thead>
            <tr>
              <th>Lugar</th>
              <th>Latitud</th>
              <th>Longitud</th>
              <th>Distrito</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Listado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['LUGAR'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['LATITUD'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['LONGITUD'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['DISTRITO'];?>
</th>
              <th>
                <form method="POST" action="index.php?accion=Mapas/Mapas">
                  <input type="text" class="form-control" name="distrito" id="distrito" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
" required>
                  <button type="submit" class="btn btn-primary" name="MapaD" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-map-marker"></span>Mapa</button>
                </form>
              </th>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php echo '<script'; ?>
>
    $(document).ready(function() {
      $('#xtabla').DataTable();
    });

    function Modificar() {
      //alertify.confirm('Desea Dar de Baja?', function(e) {
      //  if (e) {
          window.location.href = "index.php?accion=Mapas/Modificar";
    //    }
    //  });
  }

  <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
