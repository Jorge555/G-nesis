<?php /* Smarty version Smarty-3.1.21, created on 2019-06-04 02:54:52
         compiled from "views\FROMREFERENCIA\FROMREFERENCIA.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17829919285cd4f2704067a5-20250940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fa450759ded64a1af351534c2b6e094edf74dae' => 
    array (
      0 => 'views\\FROMREFERENCIA\\FROMREFERENCIA.tpl',
      1 => 1559609690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17829919285cd4f2704067a5-20250940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cd4f27043d283_74898255',
  'variables' => 
  array (
    'AUX' => 0,
    'Distrito' => 0,
    'dato1' => 0,
    'dato2' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd4f27043d283_74898255')) {function content_5cd4f27043d283_74898255($_smarty_tpl) {?><!DOCTYPE html>
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
                          <input  type="text"  name="ID" id="ID" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ID'];?>
" hidden>
                          <br>
                        <fieldset>
                            <legend>Datos de Referencia</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th>Servicio de Salud que Envia</th><th>
                                  <select class="form-control" name="dato1" id="dato1" >
                                    <?php  $_smarty_tpl->tpl_vars['dato1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Distrito']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato1']->key => $_smarty_tpl->tpl_vars['dato1']->value) {
$_smarty_tpl->tpl_vars['dato1']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['dato1']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato1']->value['DISTRITO'];?>
</option>
                                    <?php } ?>
                                  </select>
                                </th>
                                <th>Servico de Salud que Refiere</th><th>
                                  <select class="form-control" name="dato2" id="dato2" >
                                    <?php  $_smarty_tpl->tpl_vars['dato2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Distrito']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato2']->key => $_smarty_tpl->tpl_vars['dato2']->value) {
$_smarty_tpl->tpl_vars['dato2']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['dato2']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato2']->value['DISTRITO'];?>
</option>
                                    <?php } ?>
                                  </select>
                                </th>
                              </tr><tr><th>Fecha</th><th><input type="date" name="dato3" id="dato3"></th>
                                <th>Nombre Paciente</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['NOMBRE_M'];?>
" disabled ></th>
                               </tr><tr><th>Telefono</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['TELEFONO'];?>
" disabled></th>
                                <th>Hora de Traslado 24hrs</th><th><input type="time"  name="dato4" id="dato4"></th>
</tr><tr><th colspan="2"><input type="radio"  name="dato5" id="dato5" value="1"> Consulta Externa <br> <input type="radio"  name="dato5" id="dato5" value="0" checked> Emergencia</th>
                              <th colspan="2">Historia de enfermedad actual<textarea class="form-control rounded-0" name="dato6" id="dato6" ></textarea></th>
                              </tr></tbody></table>
                        </fieldset>
                        <fieldset>
                            <legend>Antecedentes Medicos</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th colspan="2">Medicos <textarea class="form-control rounded-0"  name="dato7" id="dato7"></textarea></th>
                                <th colspan="2">Memtales<textarea class="form-control rounded-0"  name="dato8" id="dato8"></textarea></th>
                              </tr><tr><th colspan="2">Quirugicos<textarea class="form-control rounded-0"  name="dato9" id="dato9"></textarea></th>
                                <th colspan="2">Traumaticos<textarea class="form-control rounded-0"  name="dato10" id="dato10"></textarea></th>
                              </tr><tr><th colspan="4">Alergicos<textarea class="form-control rounded-0" name="dato11" id="dato11" ></textarea></th><th></th>
                              </tr></tbody></table>
                        </fieldset>
                        <fieldset>
                            <legend>Examen Fisico</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th>Peso</th><th><input type="number" name="dato12" id="dato12"></th>
                                <th>Talla</th><th><input type="number" name="dato13" id="dato12"></th>
                              </tr><tr><th>Pulso</th><th><input type="number" name="dato14" id="dato14"></th>
                                <th>P/A</th><th><input type="number" name="dato15" id="dato15"></th>
                              </tr><tr><th>F/R</th><th><input type="number" name="dato16" id="dato16"></th>
                                <th>T</th><th><input type="number" name="dato17" id="dato17"></th>
                              </tr><tr><th>FCF</th><th><input type="number" name="dato18" id="dato18"></th>
                              <th>Ingresion Clinica</th><th><input type="date"name="dato19" id="dato19"></th>
                            </tr><tr><th colspan="2">Motivo de Referencia<textarea class="form-control rounded-0"  name="dato20" id="dato20"></textarea> </th>
                              <th colspan="2">Tratamiento y Menejo efectuado en el servicio<textarea class="form-control rounded-0" name="dato21" id="dato21" ></textarea></th>
                            </tr><tr><th colspan="4">Examenes Ralizados<textarea class="form-control rounded-0" name="dato22" id="dato22" ></textarea></th><th></th>
                              </tr></tbody></table>
                        </fieldset>
                        <input type="submit" class="btn btn-primary"  name="Guardar" value="Guardar">
                        <input type="submit"  class="btn btn-danger" id="Regresar" name="Regresar" value="Regresar">
                    </form>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

        </div>
    </body>
</html>
<?php }} ?>
