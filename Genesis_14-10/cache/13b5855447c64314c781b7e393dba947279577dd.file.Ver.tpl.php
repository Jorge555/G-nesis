<?php /* Smarty version Smarty-3.1.21, created on 2019-06-04 03:09:25
         compiled from "views\Contrareferencia\Ver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8483865635cf1ec6d6d0c44-90066876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b5855447c64314c781b7e393dba947279577dd' => 
    array (
      0 => 'views\\Contrareferencia\\Ver.tpl',
      1 => 1559610542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8483865635cf1ec6d6d0c44-90066876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cf1ec6d70fc04_17471871',
  'variables' => 
  array (
    'AUX' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf1ec6d70fc04_17471871')) {function content_5cf1ec6d70fc04_17471871($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=50">
         <title>REFERENCIA</title>
    </head>
    <body>
        <font color="white"> </font>
        <div class="container" >
            <div class="row">
                <div class=" col-md-12" id="tb" >
                    <form role="form" action="#" method="POST">
                      <br>
                        <fieldset>
                            <legend>Boleta Contra Referencia</legend>
                                <input type="text" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ID_REF'];?>
" hidden/>
                                <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th colspan="2">Resumen de la devolucion <textarea class="form-control rounded-0" disabled ><?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['RESUMEN'];?>
</textarea></th>
                                <th colspan="2">Tratamiento Brindado<textarea class="form-control rounded-0" disabled ><?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['TRAT'];?>
</textarea></th>
                              </tr><tr><th colspan="2">Diagnostico<textarea class="form-control rounded-0" disabled ><?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['DIAG'];?>
</textarea></th>
                                <th colspan="2">Recomendaciones<textarea class="form-control rounded-0" disabled><?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['RECOM'];?>
</textarea></th>
                              </tr></tbody></table>
                        </fieldset>
                        <input type="submit"  class="btn btn-danger"  name="Regresar" value="Regresar">
                    </form>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

        </div>
    </body>
</html>
<?php }} ?>
