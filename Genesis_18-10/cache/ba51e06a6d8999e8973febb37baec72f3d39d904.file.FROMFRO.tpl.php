<?php /* Smarty version Smarty-3.1.21, created on 2019-09-27 04:43:49
         compiled from "views\FROMFRO\FROMFRO.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84495d8d7765e8a103-42900007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba51e06a6d8999e8973febb37baec72f3d39d904' => 
    array (
      0 => 'views\\FROMFRO\\FROMFRO.tpl',
      1 => 1567994560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84495d8d7765e8a103-42900007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ID' => 0,
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d8d7765efca52_22067101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8d7765efca52_22067101')) {function content_5d8d7765efca52_22067101($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>FRO</title>
</head>
<body>
  <font color="white"> </font>
  <div class=" col-md-1"></div>
    <div class=" col-md-12"  id="tb">
    <form role="form" action="#" method="POST">
      <div class=" col-md-12">
      <div class=" col-md-6">
        <br>
        <fieldset>
          <legend>ANTECEDENTES OBSTETRICOS</legend>
          <input title="text" id="ID" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" hidden>
          <input title="text" id="PRIORIDAD" name="PRIORIDAD" value="0" hidden >
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>Muerte fetal o muerte neonatal previas</th><th style="width: 15%"><input onclick="activar()" id="dato" name="dato"  type="radio" value="1" >Si <input onclick="desactivar()" id="dato" name="dato" type="radio" value="0" checked>No</th>
              </tr><tr><th>Antecedentes de 3 o más abortos espontáneos</th><th><input onclick="activar()" id="dato2" name="dato2" type="radio" value="1">Si <input onclick="desactivar()" id="dato2" name="dato2" type="radio" value="0" checked>No</th>
              </tr><tr><th>Antecedentes de 3 o más gestas</th><th><input onclick="activar()" id="dato3" name="dato3" type="radio" value="1">Si <input onclick="desactivar()" id="dato3" name="dato3" type="radio" value="0" checked>No</th>
              </tr><tr><th>Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.)</th><th><input onclick="activar()" id="dato4" name="dato4" type="radio" value="1">Si <input onclick="desactivar()" id="dato4" name="dato4" type="radio" value="0" checked>No</th>
              </tr><tr><th>Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.)</th><th><input onclick="activar()" id="dato5" name="dato5" type="radio" value="1">Si <input onclick="desactivar()" id="dato5" name="dato5" type="radio" value="0" checked>No</th>
              </tr><tr><th>Antecedentes de hipertensión o preclampsia/eclampsia</th><th><input onclick="activar()" id="dato6" name="dato6" type="radio" value="1">Si <input onclick="desactivar()" id="dato6" name="dato6" type="radio" value="0" checked>No</th>
              </tr><tr><th>Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical)</th><th><input onclick="activar()" id="dato7" name="dato7" type="radio" value="1">Si <input onclick="desactivar()" id="dato7" name="dato7" type="radio" value="0" checked>No</th>
            </tr></tbody></table>
        </fieldset>
        <fieldset>
          <legend>HISTORIA CLÍNICA GENERAL </legend>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>Diabetes</th><th><input onclick="activar()" id="dato8" name="dato8" type="radio" value="1">Si <input onclick="desactivar()" id="dato8" name="dato8" type="radio" value="0" checked>No</th>
              </tr><tr><th>Enfermedad Renal</th><th><input onclick="activar()" id="dato9" name="dato9" type="radio" value="1">Si <input onclick="desactivar()" id="dato9" name="dato9" type="radio" value="0" checked>No</th>
              </tr><tr><th>Enfermedad del corazón</th><th><input onclick="activar()" id="dato10" name="dato10" type="radio" value="1">Si <input onclick="desactivar()" id="dato10" name="dato10" type="radio" value="0" checked>No</th>
              </tr><tr><th>Hipertensión arterial</th><th><input onclick="activar()" id="dato11" name="dato11" type="radio" value="1">Si <input onclick="desactivar()" id="dato11" name="dato11" type="radio" value="0" checked>No</th>
              </tr><tr><th>Consumo de drogas incluido alcohol y tabaco</th><th><input onclick="activar()" id="dato12" name="dato12" type="radio" value="1">Si <input onclick="desactivar()" id="dato12" name="dato12" type="radio" value="0" checked>No</th>
              </tr><tr><th>Cualquier otra enfermedad o afección médica severo</th><th><input onclick="activar()" id="dato13" name="dato13" type="radio" value="1">Si <input onclick="desactivar()" id="dato13" name="dato13" type="radio" value="0" checked>No</th>
              </tr><tr><th colspan="2">Porfavor,especifique: <textarea class="form-control rounded-0"  id="dato14" name="dato14"></textarea></th>
              </tr><tr><th>Fecha:&nbsp;&nbsp;&nbsp;&nbsp; <input type="date" id="dato15" name="dato15" required></th><th></th>
              </tr><tr><th colspan="2">Nombre Responsable: <input id="ResponsableFRO" name="ResponsableFRO" type="text" required value=" "></th>
            </tr></tbody></table>
        </fieldset>
      </div>
      <div class=" col-md-6">
          <br>
        <fieldset>
          <legend>Antecedestes Gineo-Obsetricos</legend>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>FUR</th><th><input type="date" id="dato16" name="dato16" required></th>
              <th>FPP</th><th><input type="date" id="dato17" name="dato17" required></th>
            </tr><tr><th>No. de embarazos</th><th><input type="number" id="dato18" name="dato18" value="0"></th>
              <th>No. de partos</th><th><input type="number" id="dato19" name="dato19" value="0"></th>
            </tr><tr><th>No. cesareas</th><th><input type="number"id="dato20" name="dato20" value="0"></th>
              <th>No. de abortos</th><th><input type="number" id="dato21" name="dato21"value="0"></th>
            </tr><tr><th>No. Hijos Vivos</th><th><input type="number" id="dato22" name="dato22"value="0"></th>
              <th>No.Hijos Muertos</th><th><input type="number"id="dato23" name="dato23" value="0"></th>
            </tr></tbody></table>
        </fieldset>
        <fieldset>
          <legend>EMBARAZO ACTUAL</legend>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>Diagnostico o sospecha de embarazo múltiple</th><th  style="width: 15%"><input onclick="activar()" id="dato24" name="dato24" type="radio" value="1">Si <input onclick="desactivar()" id="dato24" name="dato24" type="radio" value="0" checked>No</th>
              </tr><tr><th>Menos de 20 años</th><th><input onclick="activar()" id="dato25" name="dato25" type="radio" value="1">Si <input onclick="desactivar()" id="dato25" name="dato25" type="radio" value="0" checked>No</th>
              </tr><tr><th>Más de 35 años</th><th><input onclick="activar()" id="dato26" name="dato26" type="radio" value="1">Si <input onclick="desactivar()" id="dato26" name="dato26" type="radio" value="0" checked>No</th>
              </tr><tr><th>Paciente Rh (-)</th><th><input onclick="activar()" id="dato27" name="dato27" type="radio" value="1">Si <input onclick="desactivar()" id="dato27" name="dato27" type="radio" value="0" checked>No</th>
              </tr><tr><th>Hemorragia vaginal sin importar cantidad</th><th><input onclick="activar()" id="dato28" name="dato28" type="radio" value="1">Si <input onclick="desactivar()" id="dato28" name="dato28" type="radio" value="0" checked>No</th>
              </tr><tr><th>VIH positivo o sífilis positivo</th><th><input onclick="activar()" id="dato29" name="dato29" type="radio" value="1">Si <input onclick="desactivar()" id="dato29" name="dato29" type="radio" value="0" checked>No</th>
              </tr><tr><th>Presión arterial diastólica de 90 mm Hg o más durante el registro de datos</th><th><input onclick="activar()" id="dato30" name="dato30" type="radio" value="1">Si <input onclick="desactivar()" id="dato30" name="dato30" type="radio" value="0" checked>No</th>
              </tr><tr><th>Anemia clínica o de laboratorio</th><th><input onclick="activar()" id="dato31" name="dato31" type="radio" value="1">Si <input onclick="desactivar()" id="dato31" name="dato31" type="radio" value="0" checked>No</th>
              </tr><tr><th>Desnutrición u obesidad</th><th><input onclick="activar()" id="dato32" name="dato32" type="radio" value="1">Si <input onclick="desactivar()" id="dato32" name="dato32" type="radio" value="0" checked>No</th>
              </tr><tr><th>Dolor abdominal</th><th><input onclick="activar()" id="dato33" name="dato33" type="radio" value="1">Si <input onclick="desactivar()" id="dato33" name="dato33" type="radio" value="0" checked>No</th>
              </tr><tr><th>Sintomatología urinaria</th><th><input onclick="activar()" id="dato34" name="dato34" type="radio" value="1">Si <input onclick="desactivar()" id="dato34" name="dato34" type="radio" value="0" checked>No</th>
              </tr><tr><th>Ictericia</th><th><input onclick="activar()" id="dato35" name="dato35" type="radio" value="1">Si <input onclick="desactivar()" id="dato35" name="dato35" type="radio" value="0" checked>No</th>
            </tr></tbody></table>
        </fieldset>
      </div>
      </div>
        <div class="col-md-12">
        <p>La presencia de algunas de las características anteriores hace necesaria la evaluación de la paciente por un médico, quien tomara la decisión de referirla o no a otro servicio de mayor complejidad.</p>
        <p>Ficha adaptada de: The Joint Commission on Accreditation of Healthcare Organizations: Sentinel events: Evaluation causes a planning improvement. 2nd edition, 2002 p. 3”</p>
         <input type="submit" class="btn btn-primary"  name="Guardar" value="Guardar">
         <input type="submit"  class="btn btn-danger" id="Regresar" name="Regresar" value="Regresar">
           <br>  <br>
      </div>
    </form>
</div>
<?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

</body>

</html>
<?php }} ?>
