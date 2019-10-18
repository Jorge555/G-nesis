<?php /* Smarty version Smarty-3.1.21, created on 2019-09-19 19:42:47
         compiled from "views\Contrareferencia\Contrareferencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12899843595d83be176998d7-37835882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '428d49a2f1e55ad7470757d777f8d95be9804bb5' => 
    array (
      0 => 'views\\Contrareferencia\\Contrareferencia.tpl',
      1 => 1559610555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12899843595d83be176998d7-37835882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATO' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d83be177136d4_22761823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83be177136d4_22761823')) {function content_5d83be177136d4_22761823($_smarty_tpl) {?><!DOCTYPE html>
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
                                <input type="text" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['DATO']->value;?>
" hidden/>
                                <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th colspan="2">Resumen de la devolucion <textarea class="form-control rounded-0"  name="dato1" id="dato1"></textarea></th>
                                <th colspan="2">Tratamiento Brindado<textarea class="form-control rounded-0"  name="dato2" id="dato2"></textarea></th>
                              </tr><tr><th colspan="2">Diagnostico<textarea class="form-control rounded-0"  name="dato3" id="dato3"></textarea></th>
                                <th colspan="2">Recomendaciones<textarea class="form-control rounded-0"  name="dato4" id="dato4"></textarea></th>
                              </tr></tbody></table>
                        </fieldset>
                        <input type="submit"  class="btn btn-danger"  name="Regresar" value="Regresar">
                        <input type="submit"  class="btn btn-danger"  name="Guardar" value="Guardar">
                    </form>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

        </div>
    </body>
</html>
<?php }} ?>
