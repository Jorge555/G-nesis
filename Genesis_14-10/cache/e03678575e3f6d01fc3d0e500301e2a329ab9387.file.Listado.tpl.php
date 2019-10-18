<?php /* Smarty version Smarty-3.1.21, created on 2019-10-15 18:15:16
         compiled from "views\Contrareferencia\Listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21072111145da5f09491bf78-59472691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03678575e3f6d01fc3d0e500301e2a329ab9387' => 
    array (
      0 => 'views\\Contrareferencia\\Listado.tpl',
      1 => 1559358886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21072111145da5f09491bf78-59472691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LRC' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5da5f0949d2c73_92576830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da5f0949d2c73_92576830')) {function content_5da5f0949d2c73_92576830($_smarty_tpl) {?><!DOCTYPE html>
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
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>Fecha</th>
                             <th>Servicio Envia</th>
                             <th>Paciente</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LRC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                     <tr>
                       <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['FECHA'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['DISTRITO'];?>
</th>
                         <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['NOMBRE'];?>
</th>
                             <td>
                                    <button type="submit" class="btn btn-primary" name="Registro" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-folder-open"></span>Ver Datos Referencia</button>
                                      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['dato']->value['CONTRAR'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="1") {?>
                                        <button type="submit" class="btn btn-primary" name="Registro2" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-share-alt"></span>Ver Datos ContraReferencia</button>
                                      <?php }?>
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
