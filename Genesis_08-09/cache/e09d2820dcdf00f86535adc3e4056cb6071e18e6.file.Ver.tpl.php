<?php /* Smarty version Smarty-3.1.21, created on 2019-09-19 19:34:33
         compiled from "views\FROMFRO\Ver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19669527225d83bc29288a71-63091998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e09d2820dcdf00f86535adc3e4056cb6071e18e6' => 
    array (
      0 => 'views\\FROMFRO\\Ver.tpl',
      1 => 1559609659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19669527225d83bc29288a71-63091998',
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
  'unifunc' => 'content_5d83bc294ea071_35659825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83bc294ea071_35659825')) {function content_5d83bc294ea071_35659825($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>FRO</title>
</head>
<body onload="miFuncion();">
  <?php echo '<script'; ?>
 type="text/jscript">
  function miFuncion() {
    var campo1 = $('#dato').val();   var campo9 = $('#dato9').val();    var campo15 = $('#dato25').val();  var campo23 = $('#dato33').val();
    var campo2 = $('#dato2').val();  var campo10 = $('#dato10').val();  var campo16= $('#dato26').val();  var campo24 = $('#dato34').val();
    var campo3 = $('#dato3').val();  var campo11 = $('#dato11').val();  var campo17 = $('#dato27').val();  var campo25 = $('#dato35').val();
    var campo4 = $('#dato4').val();  var campo12 = $('#dato12').val();  var campo18 = $('#dato28').val();
    var campo5 = $('#dato5').val();  var campo13 = $('#dato13').val();  var campo19 = $('#dato29').val();
    var campo6 = $('#dato6').val();  var campo14 = $('#dato24').val();  var campo20 = $('#dato30').val();
    var campo7 = $('#dato7').val();                                     var campo21 = $('#dato31').val();
    var campo8 = $('#dato8').val();                                     var campo22 = $('#dato32').val();
  ////14
  if(campo1=="1"){ $('#dato').attr('checked', true); }
  if(campo2=="1"){ $('#dato2').attr('checked', true); }
  if(campo3=="1"){ $('#dato3').attr('checked', true); }
  if(campo4=="1"){ $('#dato4').attr('checked', true); }
  if(campo5=="1"){ $('#dato5').attr('checked', true); }
  if(campo6=="1"){ $('#dato6').attr('checked', true); }
  if(campo7=="1"){ $('#dato7').attr('checked', true); }
  if(campo8=="1"){ $('#dato8').attr('checked', true); }
  if(campo9=="1"){ $('#dato9').attr('checked', true); }
  if(campo10=="1"){ $('#dato10').attr('checked', true); }
  if(campo11=="1"){ $('#dato11').attr('checked', true); }
  if(campo12=="1"){ $('#dato12').attr('checked', true); }
  if(campo13=="1"){ $('#dato13').attr('checked', true); }
  if(campo14=="1"){ $('#dato24').attr('checked', true); }
  if(campo15=="1"){ $('#dato25').attr('checked', true); }
  if(campo16=="1"){ $('#dato26').attr('checked', true); }
  if(campo17=="1"){ $('#dato27').attr('checked', true); }
  if(campo18=="1"){ $('#dato28').attr('checked', true); }
  if(campo19=="1"){ $('#dato29').attr('checked', true); }
  if(campo20=="1"){ $('#dato30').attr('checked', true); }
  if(campo21=="1"){ $('#dato31').attr('checked', true); }
 if(campo22=="1"){ $('#dato32').attr('checked', true); }
  if(campo23=="1"){ $('#dato33').attr('checked', true); }
  if(campo24=="1"){ $('#dato34').attr('checked', true); }
  if(campo25=="1"){ $('#dato35').attr('checked', true); }
  /////
}
  <?php echo '</script'; ?>
>
  <font color="white"> </font>
  <div class=" col-md-1"></div>
    <div class=" col-md-10">
    <form role="form" action="#" method="POST">
      <div class=" col-md-12" id="tb">
      <div class=" col-md-6">
          <br>
        <fieldset>
          <legend>ANTECEDENTES OBSTETRICOS</legend>
          <input  type="text"  name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['ID'];?>
" hidden>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>Muerte fetal o muerte neonatal previas</th><th style="width: 15%"><input  id="dato" name="dato"  type="radio" disabled value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AO1'];?>
" >Si <input  id="dato" name="dato" type="radio" disabled >No</th>
              </tr><tr><th>Antecedentes de 3 o más abortos espontáneos</th><th><input  id="dato2" name="dato2" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AO2'];?>
">Si <input  id="dato2" name="dato2" type="radio" disabled >No</th>
              </tr><tr><th>Antecedentes de 3 o más gestas</th><th><input  id="dato3" name="dato3" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AO3'];?>
">Si <input  id="dato3" name="dato3" type="radio" disabled >No</th>
              </tr><tr><th>Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.)</th><th><input  id="dato4" name="dato4" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AO4'];?>
">Si <input  id="dato4" name="dato4" type="radio" disabled >No</th>
              </tr><tr><th>Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.)</th><th><input  id="dato5" name="dato5" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AO5'];?>
">Si <input  id="dato5" name="dato5" type="radio" disabled >No</th>
              </tr><tr><th>Antecedentes de hipertensión o preclampsia/eclampsia</th><th><input  id="dato6" name="dato6" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AO6'];?>
">Si <input  id="dato6" name="dato6" type="radio" disabled >No</th>
              </tr><tr><th>Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical)</th><th><input  id="dato7" name="dato7" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AO7'];?>
">Si <input  id="dato7" name="dato7" type="radio" disabled >No</th>
            </tr></tbody></table>
        </fieldset>
        <fieldset>
          <legend>HISTORIA CLÍNICA GENERAL </legend>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>Diabetes</th><th><input  id="dato8" name="dato8" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['HCG1'];?>
">Si <input  id="dato8" name="dato8" type="radio" disabled >No</th>
              </tr><tr><th>Enfermedad Renal</th><th><input  id="dato9" name="dato9" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['HCG2'];?>
">Si <input  id="dato9" name="dato9" type="radio" disabled >No</th>
              </tr><tr><th>Enfermedad del corazón</th><th><input  id="dato10" name="dato10" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['HCG3'];?>
">Si <input  id="dato10" name="dato10" type="radio" disabled >No</th>
              </tr><tr><th>Hipertensión arterial</th><th><input  id="dato11" name="dato11" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['HCG4'];?>
">Si <input  id="dato11" name="dato11" type="radio" disabled >No</th>
              </tr><tr><th>Consumo de drogas incluido alcohol y tabaco</th><th><input  id="dato12" name="dato12" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['HCG5'];?>
">Si <input  id="dato12" name="dato12" type="radio" disabled >No</th>
              </tr><tr><th>Cualquier otra enfermedad o afección médica severo</th><th><input  id="dato13" name="dato13" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['HCG6'];?>
">Si <input  id="dato13" name="dato13" type="radio" disabled >No</th>
              </tr><tr><th colspan="2">Porfavor,especifique: <textarea class="form-control rounded-0"  id="dato14" name="dato14" disabled><?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['HCG7'];?>
</textarea></th>
              </tr><tr><th>Fecha</th><th><input type="date" id="dato15" name="dato15" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['FECHA'];?>
" disabled ></th>
              </tr><tr><th colspan="2">Nombre Responsable <input id="ResponsableFRO" name="ResponsableFRO" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['RESP'];?>
" disabled></th>
            </tr></tbody></table>
        </fieldset>
      </div>
      <div class=" col-md-6" >  <br>
        <fieldset>
          <legend>Antecedestes Gineo-Obsetricos</legend>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>FUR</th><th><input type="date" id="dato16" name="dato16" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGOFUR'];?>
" disabled ></th>
              <th>FPP</th><th><input type="date" id="dato17" name="dato17" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGOFPP'];?>
" disabled></th>
            </tr><tr><th>No. de embarazos</th><th><input type="number" id="dato18" name="dato18" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGO3'];?>
" disabled></th>
              <th>No. de partos</th><th><input type="number" id="dato19" name="dato19" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGO4'];?>
" disabled></th>
            </tr><tr><th>No. cesareas</th><th><input type="number"id="dato20" name="dato20" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGO5'];?>
" disabled></th>
              <th>No. de abortos</th><th><input type="number" id="dato21" name="dato21" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGO6'];?>
" disabled></th>
            </tr><tr><th>No. Hijos Vivos</th><th><input type="number" id="dato22" name="dato22" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGO7'];?>
" disabled></th>
              <th>No.Hijos Muertos</th><th><input type="number"id="dato23" name="dato23" value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['AGO8'];?>
" disabled></th>
            </tr></tbody></table>
        </fieldset>
        <fieldset>
          <legend>EMBARAZO ACTUAL</legend>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>Diagnostico o sospecha de embarazo múltiple</th><th  style="width: 15%"><input  id="dato24" name="dato24" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA1'];?>
">Si <input  id="dato24" name="dato24" type="radio" disabled >No</th>
              </tr><tr><th>Menos de 20 años</th><th><input  id="dato25" name="dato25" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA2'];?>
">Si <input  id="dato25" name="dato25" type="radio" disabled >No</th>
              </tr><tr><th>Más de 35 años</th><th><input  id="dato26" name="dato26" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA3'];?>
">Si <input  id="dato26" name="dato26" type="radio" disabled >No</th>
              </tr><tr><th>Paciente Rh (-)</th><th><input  id="dato27" name="dato27" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA4'];?>
">Si <input  id="dato27" name="dato27" type="radio" disabled >No</th>
              </tr><tr><th>Hemorragia vaginal sin importar cantidad</th><th><input  id="dato28" name="dato28" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA5'];?>
">Si <input  id="dato28" name="dato28" type="radio" disabled >No</th>
              </tr><tr><th>VIH positivo o sífilis positivo</th><th><input  id="dato29" name="dato29" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA6'];?>
">Si <input  id="dato29" name="dato29" type="radio" disabled >No</th>
              </tr><tr><th>Presión arterial diastólica de 90 mm Hg o más durante el registro de datos</th><th><input  id="dato30" name="dato30" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA7'];?>
">Si <input  id="dato30" name="dato30" type="radio" disabled >No</th>
              </tr><tr><th>Anemia clínica o de laboratorio</th><th><input  id="dato31" name="dato31" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA8'];?>
">Si <input  id="dato31" name="dato31" type="radio" disabled >No</th>
              </tr><tr><th>Desnutrición u obesidad</th><th><input  id="dato32" name="dato32" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA9'];?>
">Si <input  id="dato32" name="dato32" type="radio" disabled >No</th>
              </tr><tr><th>Dolor abdominal</th><th><input  id="dato33" name="dato33" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA10'];?>
">Si <input  id="dato33" name="dato33" type="radio" disabled >No</th>
              </tr><tr><th>Sintomatología urinaria</th><th><input  id="dato34" name="dato34" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA11'];?>
">Si <input  id="dato34" name="dato34" type="radio" disabled >No</th>
              </tr><tr><th>Ictericia</th><th><input  id="dato35" name="dato35" type="radio" disabled  value="<?php echo $_smarty_tpl->tpl_vars['AUX']->value[0]['EA12'];?>
">Si <input  id="dato35" name="dato35" type="radio" disabled >No</th>
            </tr></tbody></table>
        </fieldset>
      </div>
      <div class="col-md-12" >
      <p>La presencia de algunas de las características anteriores hace necesaria la evaluación de la paciente por un médico, quien tomara la decisión de referirla o no a otro servicio de mayor complejidad.</p>
      <p>Ficha adaptada de: The Joint Commission on Accreditation of Healthcare Organizations: Sentinel events: Evaluation causes a planning improvement. 2nd edition, 2002 p. 3”</p>
       <input type="submit"  class="btn btn-danger" id="Regresar" name="Regresar" value="Regresar">
         <br>  <br>
    </div>
      </div>

    </form>
</div>
<?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

</body>

</html>
<?php }} ?>
