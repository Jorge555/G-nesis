<?php /* Smarty version Smarty-3.1.21, created on 2019-05-04 16:37:58
         compiled from "views\FROMFRO.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13159134385ccd9f8c08ea68-87815352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab15e778ab62096bb4dda2ab69961190e5406d87' => 
    array (
      0 => 'views\\FROMFRO.tpl',
      1 => 1556980578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13159134385ccd9f8c08ea68-87815352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ccd9f8c0c46b4_95489785',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccd9f8c0c46b4_95489785')) {function content_5ccd9f8c0c46b4_95489785($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=50">

        <title>FRO</title>
    </head>
    <body>

        <font color="white"> </font>
        <div class="container" >
            <div class="row">
                <div class=" col-md-10" id="tb" >
                    <form role="form" action="index.php?accion=FROMFRO" method="POST">
                        <fieldset>
                            <legend>FICHA DE RIESGO OBSTÉTRICO DEL MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL</legend>
                            <p>Registro No. <input type="number"></p>
                            <p>Nombre de la Embarazada <input type="text"> Edad en años <input type="number"></p>
                            <p>Pueblo <input type="radio">Maya  <input type="radio">Xinca  <input type="radio">Garifuna  <input type="radio">Meztizo  <input type="radio">Otro</p>
                            <p>Escolaridad <input type="text"> Ocupacion  <input type="text"></p>
                            <p>Nombre Esposo o conviviente <input type="text"> Edad en años <input type="number"></p>
                           <p>Pueblo <input type="radio">Maya  <input type="radio">Xinca  <input type="radio">Garifuna  <input type="radio">Meztizo  <input type="radio">Otro</p>
                            <p>Escolaridad <input type="text"> Ocupacion  <input type="text"></p>
                            <p>Distancias en KM al Servicio de salud mas cercano<input type="number"> Tiempo en horas para llegar <input type="time"></p>
                            <p>Nombre de la comunidad<input type="text"></p>
                            <p>No. de celular de señora,pareja o comunitario<input type="text"></p>
                            <p>Fecha ultima Regla<input type="date"> Fecha Probable de parto<input type="date"> No. de embarazos<input type="number"></p>
                            <p>No. de partos<input type="number"> No. de cesareas<input type="number"> No. de abortos<input type="number"></p>
                            <p>No. de Hijos Vivos<input type="number"> No. de Hijos Muertos<input type="number"></p>
                            <p>Instrucciones: Responda las siguientes preguntas marcando con una cruz el cuadro correspondiente</p>
                        </fieldset>
                        <fieldset>
                            <legend>ANTECEDENTES OBSTETRICOS</legend>
                            <p>1.       Muerte fetal o muerte neonatal previas<input type="radio">Si  <input type="radio">No</p>
                            <p>2.       Antecedentes de 3 o más abortos espontáneos <input type="radio">Si  <input type="radio">No</p>
                            <p>3.       Antecedentes de 3 o más gestas<input type="radio">Si  <input type="radio">No</p>
                            <p>4.       Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.)<input type="radio">Si  <input type="radio">No</p>
                            <p>5.       Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.)<input type="radio">Si  <input type="radio">No</p>
                            <p>6.       Antecedentes de hipertensión o preclampsia/eclampsia<input type="radio">Si  <input type="radio">No</p>
                            <p>7.       Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical)<input type="radio">Si  <input type="radio">No</p>

                        </fieldset>
                        <fieldset>
                            <legend>EMBARAZO ACTUAL</legend>
                            <p>1.      Diagnostico o sospecha de embarazo múltiple<input type="radio">Si  <input type="radio">No</p>
                            <p>2.      Menos de 20 años<input type="radio">Si  <input type="radio">No</p>
                            <p>3.      Más de 35 años<input type="radio">Si  <input type="radio">No</p>
                            <p>4.      Paciente Rh (-)<input type="radio">Si  <input type="radio">No</p>
                            <p>5.      Hemorragia vaginal sin importar cantidad<input type="radio">Si  <input type="radio">No</p>
                            <p>6.      VIH positivo o sífilis positivo<input type="radio">Si  <input type="radio">No</p>
                            <p>7.      Presión arterial diastólica de 90 mm Hg o más durante el registro de datos<input type="radio">Si  <input type="radio">No</p>
                            <p>8.      Anemia clínica o de laboratorio<input type="radio">Si  <input type="radio">No</p>
                            <p>9.      Desnutrición u obesidad<input type="radio">Si  <input type="radio">No</p>
                            <p>10.     Dolor abdominal<input type="radio">Si  <input type="radio">No</p>
                            <p>11.     Sintomatología urinaria<input type="radio">Si  <input type="radio">No</p>
                            <p>12.     Ictericia<input type="radio">Si  <input type="radio">No</p>
                        </fieldset>
                        <fieldset>
                            <legend>HISTORIA CLÍNICA GENERAL </legend>
                            <p>1.       Diabetes <input type="radio">Si  <input type="radio">No</p>
                            <p>2.       Enfermedad Renal <input type="radio">Si  <input type="radio">No</p>
                            <p>3.       Enfermedad del corazón <input type="radio">Si  <input type="radio">No</p>
                            <p>4.       Hipertensión arterial <input type="radio">Si  <input type="radio">No</p>
                            <p>5.       Consumo de drogas incluido alcohol y tabaco <input type="radio">Si  <input type="radio">No</p>
                            <p>6.       Cualquier otra enfermedad o afección médica seve <input type="radio">Si  <input type="radio">No</p>
                            <p>Porfavor,especifique <input type="text"> </p>
                        </fieldset>

                        <p>La presencia de algunas de las características anteriores hace necesaria la evaluación de la paciente por un médico, quien tomara la decisión de referirla o no a otro servicio de mayor complejidad.</p>
                        <p><input type="radio">Si  <input type="radio">No</p>
                        <p>Fecha<input type="date"> Nombre Responsable<input type="text"> </p>
                        <p>1.Ficha adaptada de: The Joint Commission on Accreditation of Healthcare Organizations:  Sentinel events: Evaluation causes a planning improvement. 2nd edition, 2002 p. 3”</p>
                        <input type="submit" class="btn btn-info"  name="Guardar" value="Guardar">
                        <input type="submit" class="btn btn-danger"  name="Cancelar" value="Cancelar">
                    </form>
                </div>
            </div>
        </div>




    </body>
</html>
<?php }} ?>
