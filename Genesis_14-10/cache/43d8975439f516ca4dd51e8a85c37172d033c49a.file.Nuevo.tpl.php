<?php /* Smarty version Smarty-3.1.21, created on 2019-06-04 03:06:37
         compiled from "views\Mujeres\Nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15455363255cd5031bca7ab8-70445061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43d8975439f516ca4dd51e8a85c37172d033c49a' => 
    array (
      0 => 'views\\Mujeres\\Nuevo.tpl',
      1 => 1559610395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15455363255cd5031bca7ab8-70445061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cd5031bcddc38_98915059',
  'variables' => 
  array (
    'Pueblos' => 0,
    'dato1' => 0,
    'Escolaridad' => 0,
    'dato2' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd5031bcddc38_98915059')) {function content_5cd5031bcddc38_98915059($_smarty_tpl) {?><!DOCTYPE html>
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
                          <table class="table  table-striped  table-bordered"><tbody>
                          <tr><th>Nombre de la Embarazada </th><th><input type="text"class="form-control" required  name="nombre_m" id="nombre_m"></th>
                          </tr><tr><th> Edad en años</th><th><input type="number" class="form-control"  name="edad_m" id="edad_m"></th>
                          </tr><tr><th>DPI</th><th><input type="text"  class="form-control" name="dpi_m" id="dpi_m"></th>
                          </tr><tr><th>Pueblo</th><th> <select name="pueblo_m" id="pueblo_m" class="form-control">
                            <?php  $_smarty_tpl->tpl_vars['dato1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pueblos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato1']->key => $_smarty_tpl->tpl_vars['dato1']->value) {
$_smarty_tpl->tpl_vars['dato1']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['dato1']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato1']->value['PUEBLO'];?>
</option>
                            <?php } ?>
                          </select></th>
                        </tr><tr><th>Escolaridad</th><th><select name="escolaridad_m" id="escolaridad_m" class="form-control">
                                <?php  $_smarty_tpl->tpl_vars['dato2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Escolaridad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato2']->key => $_smarty_tpl->tpl_vars['dato2']->value) {
$_smarty_tpl->tpl_vars['dato2']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['dato2']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato2']->value['ESCOLARIDAD'];?>
</option>
                                <?php } ?>
                              </select></th>
                          </tr></tbody></table>
                            </fieldset>
                              <fieldset>
                                <legend>Datos Esposo</legend>
                                <table class="table  table-striped  table-bordered"><tbody>
                                <tr><th>Nombre Esposo o conviviente</th><th><input type="text"class="form-control" required  name="nombre_h" id="nombre_h"></th>
                                </tr><tr><th> Edad en años</th><th><input type="number" class="form-control"  name="edad_h" id="edad_h"></th>
                                </tr><tr><th>DPI</th><th><input type="text"  class="form-control" name="dpi_h" id="dpi_h"></th>
                                </tr><tr><th>Pueblo</th><th> <select name="pueblo_h" id="pueblo_h" class="form-control">
                                  <?php  $_smarty_tpl->tpl_vars['dato1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pueblos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato1']->key => $_smarty_tpl->tpl_vars['dato1']->value) {
$_smarty_tpl->tpl_vars['dato1']->_loop = true;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['dato1']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato1']->value['PUEBLO'];?>
</option>
                                  <?php } ?>
                                </select></th>
                              </tr><tr><th>Escolaridad</th><th><select name="escolaridad_h" id="escolaridad_h" class="form-control">
                                      <?php  $_smarty_tpl->tpl_vars['dato2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Escolaridad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato2']->key => $_smarty_tpl->tpl_vars['dato2']->value) {
$_smarty_tpl->tpl_vars['dato2']->_loop = true;
?>
                                      <option value="<?php echo $_smarty_tpl->tpl_vars['dato2']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato2']->value['ESCOLARIDAD'];?>
</option>
                                      <?php } ?>
                                    </select></th>
                                </tr></tbody></table>
                              </fieldset>
                            <fieldset>
                              <legend>Otros Datos</legend>

                              <table class="table  table-striped  table-bordered"><tbody>
                              <tr><th>Distancias en KM al Servicio de salud mas cercano</th><th><input type="number" class="form-control" required  name="distancia" id="distancia"></th>
                              </tr><tr><th>Tiempo en horas para llegar</th><th><input type="time" class="form-control"  name="tiempo" id="tiempo"></th>
                              </tr><tr><th>Nombre de la comunidad</th><th><input type="text"  class="form-control" name="comunidad" id="comunidad"></th>
                              </tr><tr><th>No. de celular de señora,pareja o comunitario</th><th><input type="number"  class="form-control" name="celular" id="celular"></th>
                              </tr></tbody></table>
                        </fieldset>
                         <input type="submit" class="btn btn-primary"  name="Guardar" value="Guardar">
                        <a class="btn btn-danger" href="index.php?accion=Mujeres/Lista">Regresar</a>
                      </form>
                  </div>
                    <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

              </div>
            </div>
            </body>
    </html>
<?php }} ?>
