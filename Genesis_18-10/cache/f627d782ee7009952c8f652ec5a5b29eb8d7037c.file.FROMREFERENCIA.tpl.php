<?php /* Smarty version Smarty-3.1.21, created on 2019-05-04 16:38:01
         compiled from "views\FROMREFERENCIA.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12960636785ccda2d3b2b9f1-29100858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f627d782ee7009952c8f652ec5a5b29eb8d7037c' => 
    array (
      0 => 'views\\FROMREFERENCIA.tpl',
      1 => 1556980483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12960636785ccda2d3b2b9f1-29100858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ccda2d3b60657_65511042',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccda2d3b60657_65511042')) {function content_5ccda2d3b60657_65511042($_smarty_tpl) {?><!DOCTYPE html>
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
                    <form role="form" action="" method="POST">
                        <fieldset>
                            <legend>Boleta de Referencia</legend>
                            <p>Numero Correlativo  <input type="number"></p>
                            <p>Servicio de Salud que Envia:<input type="text">  <input type="radio"> Consulta Externa  <input type="radio"> Emergencia</p>
                            <p>Servico de Salud que Refiere:<input type="text"> Telefono:<input type="text"> </p>
                            <p>Fecha:<input type="date"> Hora de Traslado<input type="time"> </p>
                            <p>Nombre Paciente<input type="text"> Edad<input type="number"> <input type="radio" name="sex">Mujer  <input type="radio" name="sex">Hombre</p>
                            <p>Historia de enfermedad actual<input type="text"> </p>
                        </fieldset>
                        <fieldset>
                            <legend>Antecedentes Medicos</legend>
                            <p>Medicos <input type="text"> Memtales <input type="text"></p>
                            <p>Quirugicos <input type="text"> Traumaticos <input type="text"></p>
                            <p>Alergicos <input type="text"> </p>
                        </fieldset>
                        <fieldset>
                            <legend>Antecedentes Gineco-Obstericos</legend>
                            <p>Gestas<input type="number"> Partos<input type="number"> Abortos<input type="number"> Hijos Vivos<input type="number"></p>
                            <p>Hijos Muertos<input type="number"> FUR<input type="date"> CSTP<input type="radio" name="op">Si  <input type="radio" name="op">No</p>
                            <p>Otros <input type="text"> </p>
                        </fieldset>
                        <fieldset>
                            <legend>Examen Fisico</legend>
                            <p>Peso<input type="text"> Talla<input type="text"> Pulso<input type="text"></p>
                            <p>P/A<input type="text"> F/R<input type="text"> T<input type="text"> FCF<input type="text"></p>
                            <p>Examenes Realizados <input type="text"> </p>
                            <p>Ingresion Clinica <input type="text"> </p>
                            <p>Motivo de Referencia <input type="text"> </p>
                            <p>Tratamiento y Menejo efectuado en el servicio <input type="text"> </p>
                        </fieldset>
                        <fieldset>
                            <legend>Boleta Contra Referencia</legend>
                            <p>Numero Correlativo  <input type="number"></p>
                            <p>Nombre Paciente<input type="text"> Edad<input type="number"> <input type="radio" name="sex2">Mujer  <input type="radio" name="sex2">Hombre</p>
                            <p>Direccion del Paciente<input type="text"> </p>
                            <p>Servicio que atendio<input type="text"> </p>
                            <p>Servicio a donde se contra refiere<input type="text"> </p>
                            <p>Resumen de la devolucion<input type="text"> </p>
                            <p>Tratamiento Brindado<input type="text"> </p>
                            <p>Diagnostico<input type="text"> </p>
                            <p>Recomendaciones<input type="text"> </p>
                        </fieldset>
                        <input type="submit" class="btn btn-info"  name="Guardar" value="Guardar">
                        <input type="submit" class="btn btn-danger"  name="Cancelar" value="Cancelar">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }} ?>
