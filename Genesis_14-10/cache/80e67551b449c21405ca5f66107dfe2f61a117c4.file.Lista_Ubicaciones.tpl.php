<?php /* Smarty version Smarty-3.1.21, created on 2019-10-15 18:17:02
         compiled from "views\Mapas\Lista_Ubicaciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14894783505da5f0fe610399-12174359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80e67551b449c21405ca5f66107dfe2f61a117c4' => 
    array (
      0 => 'views\\Mapas\\Lista_Ubicaciones.tpl',
      1 => 1570918553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14894783505da5f0fe610399-12174359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Listado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5da5f0fe6c7095_67548913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da5f0fe6c7095_67548913')) {function content_5da5f0fe6c7095_67548913($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Listado Ubicacion</title>
</head>
<body>
  <div class="container" id="tb">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-md-12">
         <form id="miform" method="post" >
             <br>
        <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Mapas/Nuevo"> Nuevo</a>
        <br><br>
        <table class="table table-striped table-bordered table-hover" id="xtabla">
          <thead>
            <tr>
              <th>Lugar</th>
              <th>Latitud</th>
              <th>Longitud</th>
              <th>Distrito</th>
              <th>Icono</th>
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
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['NOMBRE'];?>
</th>
              <th>
              <button type="submit" class="btn btn-primary" name="Modificar" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
              </th>
            </tr>
            <?php } ?>
          </tbody>
        </table>
         </form>
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
