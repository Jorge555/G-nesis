<?php /* Smarty version Smarty-3.1.21, created on 2019-09-20 18:25:56
         compiled from "views\Personal\Listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3710378265d83a136177e54-98180571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c76b65d4c309ed8573d0fb4f0743fcaf5ff1a91d' => 
    array (
      0 => 'views\\Personal\\Listado.tpl',
      1 => 1568996748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3710378265d83a136177e54-98180571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d83a13626ba51_59324444',
  'variables' => 
  array (
    'Listado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83a13626ba51_59324444')) {function content_5d83a13626ba51_59324444($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Listado</title>
    </head>
    <body>
        <div class="container" id="tb">
            <div class="row">
            </div>
            <div class="row" >
                <div class="col-md-10">
                     <form id="miform" method="post" >
                    <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Personal/Nuevo"> Nuevo</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Puesto</th>
                            <th>Distrito</th>
                            <th>Activo</th>
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
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['APELLIDO'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['PUESTO'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['DISTRITO'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['ACTIVO'];?>
</th>
                        <td>
                      <button type="submit" class="btn btn-primary" name="Modificar" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
                      <button type="submit" class="btn btn-danger" name="Baja" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-arrow-down"></span> Baja</button>
                      <button type="submit" class="btn btn-primary" name="Alta" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-arrow-up"></span> Activo</button>
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
         $(document).ready(function(){
         $('#xtabla').DataTable();
         });

    function eliminar(IDEMPLEADO){
          alertify.confirm('Desea Dar de Baja?',function(e){
              if(e){
                location.href="#"+IDEMPLEADO;
              }
          })  ;

         }
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }} ?>
