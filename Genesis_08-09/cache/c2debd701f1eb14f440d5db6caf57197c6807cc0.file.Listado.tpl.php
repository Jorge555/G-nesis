<?php /* Smarty version Smarty-3.1.21, created on 2019-09-08 22:49:46
         compiled from "views\Usuario\Listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226245d75696a67fed6-85127807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2debd701f1eb14f440d5db6caf57197c6807cc0' => 
    array (
      0 => 'views\\Usuario\\Listado.tpl',
      1 => 1559609204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226245d75696a67fed6-85127807',
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
  'unifunc' => 'content_5d75696a6c5c22_98048894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d75696a6c5c22_98048894')) {function content_5d75696a6c5c22_98048894($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
  <title>Listado</title>
</head>

<body>
  <div class="container" id="tb">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-md-10">
         <form id="miform" method="post" >
             <br>
        <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Usuario/Nuevo"> Nuevo</a>
        <br><br>
        <table class="table table-striped table-bordered table-hover" id="xtabla">
          <thead>
            <tr>
              <th>Personal</th>
              <th>Usuario</th>
              <th>Pass</th>
              <th>Rol</th>
              <th>Activo</th>
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
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['NOMBRE'];?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value['APELLIDO'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['USUARIO'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['PASS'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['TIPO'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['ACTIVO'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['DISTRITO'];?>
</th>
              <td>
            <button type="submit" class="btn btn-primary" name="Modificar" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
            <button type="submit" class="btn btn-danger" name="Baja" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-arrow-down"></span> Dar de Baja</button>
            <button type="submit" class="btn btn-primary" name="Alta" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-arrow-up"></span> Activar</button>
              </td>
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
          window.location.href = "index.php?accion=Usuario/Modificar";
    //    }
    //  });
  }

  <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
