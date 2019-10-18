<?php /* Smarty version Smarty-3.1.21, created on 2019-09-08 23:16:27
         compiled from "views\FROMFRO\Listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174825d756faba1bdc5-05962182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4564ebafb0148052772a80832a06a50e03439b37' => 
    array (
      0 => 'views\\FROMFRO\\Listado.tpl',
      1 => 1559319676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174825d756faba1bdc5-05962182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IDEB' => 0,
    'RFRO' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d756faba6aa66_94232996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d756faba6aa66_94232996')) {function content_5d756faba6aa66_94232996($_smarty_tpl) {?><!DOCTYPE html>
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
                  <h2>Antecedentes Gineo-Obsetricos de:</h2>
                  <h3><?php echo $_smarty_tpl->tpl_vars['IDEB']->value[0]['NOMBRE_M'];?>
</h3>
                    <form id="miform" method="post" >
                    <button type="submit" class="btn btn-primary" name="Nuevo" value="<?php echo $_smarty_tpl->tpl_vars['IDEB']->value[0]['ID'];?>
" >Nuevo Registro</button>
                    <a class="btn btn-primary" href="index.php?accion=Mujeres/Lista"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>Fecha</th>
                            <th>Prioridad</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                          <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RFRO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                     <tr>
                      <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['FECHA'];?>
</th>
                        <th>
                              <?php if ($_smarty_tpl->tpl_vars['dato']->value['PRIORIDAD']=="1") {?>
                                <button  class="btn btn-danger" name="btnPrioridad2"></button>
                              <?php } else { ?>
                                <button class="btn btn-primary" name="btnPrioridad" ></button>
                              <?php }?>
                        </th>
                             <td>
                            <button type="submit" class="btn btn-primary" name="Registro" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-folder-open"></span>  Ver Datos</button>
                            <?php if ($_smarty_tpl->tpl_vars['dato']->value['REFERIDO']=="0") {?>
                            <button type="submit" class="btn btn-primary" name="Referir" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-share-alt"></span> Referir</button>
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
