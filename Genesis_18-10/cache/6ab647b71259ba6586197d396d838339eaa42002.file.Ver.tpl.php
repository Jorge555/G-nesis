<?php /* Smarty version Smarty-3.1.21, created on 2019-09-27 04:38:00
         compiled from "views\Mujeres\Ver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275645d8d760839b4d5-18934232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ab647b71259ba6586197d396d838339eaa42002' => 
    array (
      0 => 'views\\Mujeres\\Ver.tpl',
      1 => 1559610485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275645d8d760839b4d5-18934232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AUX' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8d76083f3627_91472054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8d76083f3627_91472054')) {function content_5d8d76083f3627_91472054($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Nuevo</title>
    </head>
    <body>
      <font color="white"> </font>
      <div class="container" >
          <div class="row">
              <div class=" col-md-10" id="tb"  >
                  <form role="form" method="POST" >
                    <br>
                      <fieldset  >
                          <legend>Datos Embarazada</legend>
                            <input hidden type="text"  name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ID'];?>
" >
                            <table class="table  table-striped  table-bordered"><tbody>
                            <tr><th>Nombre de la Embarazada </th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['NOMBRE_M'];?>
" disabled></th>
                            </tr><tr><th> Edad en años</th><th> <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EDAD_M'];?>
"disabled></th>
                            </tr><tr><th>DPI</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['DPI_M'];?>
"disabled></th>
                            </tr><tr><th>Pueblo</th><th> <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['PUEBLO_M'];?>
"disabled></th>
                            </tr><tr><th>Escolaridad</th><th> <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ESC_M'];?>
"disabled></th>
                            </tr></tbody></table>
                            </fieldset>
                              <fieldset>
                                <legend>Datos Esposo</legend>
                                <table class="table  table-striped  table-bordered"><tbody>
                                <tr><th>Nombre Esposo o conviviente </th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['NOMBRE_H'];?>
"disabled></th>
                                </tr><tr><th> Edad en años</th><th> <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EDAD_H'];?>
"disabled></th>
                                </tr><tr><th>DPI</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['DPI_H'];?>
"disabled></th>
                                </tr><tr><th>Pueblo</th><th> <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['PUEBLO_H'];?>
"disabled></th>
                                </tr><tr><th>Escolaridad</th><th> <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ESC_H'];?>
"disabled></th>
                                </tr></tbody></table>
                                </fieldset>
                              </fieldset>
                            <fieldset>
                          <legend>Otros Datos</legend>
                          <table class="table  table-striped  table-bordered"><tbody>
                          <tr><th>Distancias en KM al Servicio de salud mas cercano </th><th><input type="text"value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['DIST'];?>
"disabled></th>
                          </tr><tr><th>Tiempo en horas para llegar</th><th><input type="text"value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['TIEMPO'];?>
"disabled></th>
                          </tr><tr><th>Nombre de la comunidad</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['COMUNIDAD'];?>
"disabled></th>
                          </tr><tr><th>No. de celular de señora,pareja o comunitario</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['TEL'];?>
"disabled></th>
                          </tr></tbody></table>
                        </fieldset>
                        <a class="btn btn-primary" href="index.php?accion=Mujeres/Lista">Regresar</a>
                      </form>
                  </div>
                    <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

              </div>
            </div>
            </body>
    </html>
<?php }} ?>
