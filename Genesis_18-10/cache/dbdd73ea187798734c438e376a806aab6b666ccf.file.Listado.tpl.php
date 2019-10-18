<?php /* Smarty version Smarty-3.1.21, created on 2019-10-12 23:58:35
         compiled from "views\FROMREFERENCIA\Listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143465d8d763983c8f7-05735117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbdd73ea187798734c438e376a806aab6b666ccf' => 
    array (
      0 => 'views\\FROMREFERENCIA\\Listado.tpl',
      1 => 1570917513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143465d8d763983c8f7-05735117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8d7639915f88_63849089',
  'variables' => 
  array (
    'IDEB' => 0,
    'RFDATA' => 0,
    'dato' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8d7639915f88_63849089')) {function content_5d8d7639915f88_63849089($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Listado</title>
    </head>
    <body>
        <div class="container" id="tb">
            <div class="row" >
                <div class="col-md-10">
                    <h3><?php echo $_smarty_tpl->tpl_vars['IDEB']->value[0]['NOMBRE_M'];?>
</h3>
                    <form id="miform" method="post" >
                    <a class="btn btn-primary" href="index.php?accion=Mujeres/Lista"><span class="glyphicon glyphicon-arrow-left"></span>Regresar</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="xtabla">
                    <thead>
                        <tr>
                             <th>Fecha</th>
                              <th>Servicio Envia</th>
                              <th>Servicio Recibe</th>
                              <th>ContraReferido</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RFDATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                     <tr>
                       <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['FECHA'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['DISTRITO1'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['dato']->value['DISTRITO2'];?>
</th>
                             <td>
                               <?php if ($_smarty_tpl->tpl_vars['dato']->value['CONTRAR']=="1") {?>
                                 <button  class="btn btn-success" name="btnPrioridad2"></button>
                               <?php } else { ?>
                                 <button class="btn btn-secondary" name="btnPrioridad" ></button>
                               <?php }?>
                                </td>
                                <td>
                               <button type="submit" class="btn btn-primary" name="Registro" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-folder-open"></span>Ver Datos</button>
                               <?php if ($_smarty_tpl->tpl_vars['dato']->value['CONTRAR']=="1") {?>
                               <button type="submit" class="btn btn-primary" name="RCONTRA" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-folder-open"></span>Ver ContraReferencia</button>
                               <?php }?>
                               <button type="submit" class="btn btn-primary" name="IMPRIMIR" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['ID'];?>
"><span class="glyphicon glyphicon-print"></span> IMPRIMIR REFERENCIA</button>
                                 </td>
                            </tr>
                             <?php } ?>
                    </tbody>
                </table>
                  </form>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

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
