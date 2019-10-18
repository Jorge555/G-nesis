<?php /* Smarty version Smarty-3.1.21, created on 2019-10-12 23:56:41
         compiled from "views\Mujeres\Listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227765d8c4fcdc459a7-25913603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cb2f32b0818b9a11e6192c7989bdda11b23da7f' => 
    array (
      0 => 'views\\Mujeres\\Listado.tpl',
      1 => 1570917399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227765d8c4fcdc459a7-25913603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8c4fcdc9cb23_89041329',
  'variables' => 
  array (
    'Listado' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8c4fcdc9cb23_89041329')) {function content_5d8c4fcdc9cb23_89041329($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Listado</title>
    </head>
    <body>
        <div class="container" id="tb">
            <div class="row">
            </div>
            <div class="row" >
                <div class="col-md-12">
                    <br>
                  <form id="miform" method="post" >
                    <a type="button" class="btn btn-primary btn-md" href="index.php?accion=Mujeres/Nuevo"> Nuevo</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>NOMBRE</th>
                              <th>DPI</th>
                              <th>EMBARAZADA</th>
                              <th>PRIORIDAD</th>
                             <th>REGISTROS</th>
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
                        <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['NOMBRE_M'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['DPI_M'];?>
</th>
                        <th>
                          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['dato']->value['POSPARTO'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="1") {?>
                            <button  class="btn btn-success" name="btnPrioridad2"></button>
                          <?php } else { ?>
                            <button class="btn btn-secondary" name="btnPrioridad" ></button>
                          <?php }?>
                          </th>
                        <th>
                          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['dato']->value['PRIORIDAD'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="1") {?>
                            <button  class="btn btn-danger" name="btnPrioridad2"></button>
                          <?php } else { ?>
                            <button class="btn btn-primary" name="btnPrioridad" ></button>
                          <?php }?>
                          </th>
                        <td>
                                    <button type="submit" class="btn btn-primary" name="Registro" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-folder-open"></span>  Ver Datos</button>
                                    <button type="submit" class="btn btn-primary" name="Antecedentes" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-folder-open"></span> Antecedentes</button>
                                    <button type="submit" class="btn btn-primary" name="Referencias" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-folder-open"></span> Referencias</button>

                            </td>
                            <td>
                                        <!--
                                        <button type="submit" class="btn btn-primary" name="Modificar" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
                                        -->
                                        <button type="submit" class="btn btn-primary" name="EMBARAZADA" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-plus"></span>EMBARAZADA</button>
                                        <button type="submit" class="btn btn-danger" name="POSPARTO" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-ok"></span>POSPARTO</button>
                                </td>
                            </tr>
                              <?php } ?>
                    </tbody>
                </table>

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
