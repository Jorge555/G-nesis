<?php /* Smarty version Smarty-3.1.21, created on 2019-06-04 03:08:37
         compiled from "views\FROMREFERENCIA\Ver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13521303385cf1b2f535ae48-82146585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aacd398e11e2d3f1e7afe720a538842fcdafded' => 
    array (
      0 => 'views\\FROMREFERENCIA\\Ver.tpl',
      1 => 1559610511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13521303385cf1b2f535ae48-82146585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cf1b2f55360c4_13876091',
  'variables' => 
  array (
    'AUX' => 0,
    'AUX3' => 0,
    'AUX2' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf1b2f55360c4_13876091')) {function content_5cf1b2f55360c4_13876091($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=50">

         <title>REFERENCIA</title>
    </head>
    <body onload="miFuncion();">

      <?php echo '<script'; ?>
 type="text/jscript">
        function miFuncion() {
      var campo1 = $('#dato5').val();
      var campo2 = $('#dato55').val();
      if(campo1=="1"){ $('#dato5').attr('checked', true); }
      if(campo2=="0"){ $('#dato55').attr('checked', true); }
          }
      <?php echo '</script'; ?>
>
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
                                <tr><th>Servicio de Salud que Envia</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX3']->value[0]['DISTRITO1'];?>
" disabled></th>
                                <th>Servico de Salud que Refiere</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX3']->value[0]['DISTRITO2'];?>
" disabled >
                                </th>
                              </tr><tr><th>Fecha</th><th><input type="date" name="dato3" id="dato3" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['FECHA'];?>
" disabled></th>
                                <th>Nombre Paciente</th><th><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['NOMBRE_M'];?>
" disabled ></th>
                               </tr><tr><th>Telefono</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['TEL'];?>
" disabled></th>
                                <th>Hora de Traslado 24hrs</th><th><input type="time"  name="dato4" id="dato4"  value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['HORA'];?>
" disabled></th>
                              </tr><tr><th colspan="2"><input type="radio"  name="dato5" id="dato5" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['CE'];?>
" disabled > Consulta Externa <br> <input type="radio"  name="dato55" id="dato55" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['CE'];?>
" disabled> Emergencia</th>
                              <th colspan="2">Historia de enfermedad actual<textarea class="form-control rounded-0" disabled  ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['HISTORIAE'];?>
</textarea></th>
                              </tr></tbody></table>
                        </fieldset>
                        <fieldset>
                            <legend>Antecedentes Medicos</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th colspan="2">Medicos <textarea class="form-control rounded-0"   disabled ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['AM_MEDI'];?>
</textarea></th>
                                <th colspan="2">Memtales<textarea class="form-control rounded-0"   disabled ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['AM_MENT'];?>
</textarea></th>
                              </tr><tr><th colspan="2">Quirugicos<textarea class="form-control rounded-0"  disabled ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['AM_QUI'];?>
</textarea></th>
                                <th colspan="2">Traumaticos<textarea class="form-control rounded-0" disabled ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['AM_TRAU'];?>
</textarea></th>
                              </tr><tr><th colspan="4">Alergicos<textarea class="form-control rounded-0"   disabled  ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['AM_ALERG'];?>
</textarea></th><th></th>
                              </tr></tbody></table>
                        </fieldset>
                        <fieldset>
                            <legend>Examen Fisico</legend>
                            <table class="table  table-striped  table-bordered" ><tbody>
                                <tr><th>Peso</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EF_PESO'];?>
" disabled></th>
                                <th>Talla</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EF_TALLA'];?>
" disabled></th>
                              </tr><tr><th>Pulso</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EF_PULSO'];?>
" disabled></th>
                                <th>P/A</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EF_PA'];?>
" disabled></th>
                              </tr><tr><th>F/R</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EF_FR'];?>
" disabled></th>
                                <th>T</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EF_T'];?>
" disabled></th>
                              </tr><tr><th>FCF</th><th><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EF_FCF'];?>
" disabled></th>
                              <th>Ingresion Clinica</th><th><input type="date" value="<?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['INGC'];?>
" disabled></th>
                            </tr><tr><th colspan="2">Motivo de Referencia<textarea class="form-control rounded-0"  disabled><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['MOTREFE'];?>
</textarea> </th>
                              <th colspan="2">Tratamiento y Menejo efectuado en el servicio<textarea class="form-control rounded-0" disabled ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['TRATAMIENTO'];?>
</textarea></th>
                            </tr><tr><th colspan="4">Examenes Ralizados<textarea class="form-control rounded-0" disabled ><?php echo $_smarty_tpl->tpl_vars['AUX2']->value[0]['EXAMENES'];?>
</textarea></th><th></th>
                              </tr></tbody></table>
                        </fieldset>

                        <input type="submit"  class="btn btn-danger" id="Regresar" name="Regresar" value="Regresar">
                    </form>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

        </div>
    </body>
</html>
<?php }} ?>
