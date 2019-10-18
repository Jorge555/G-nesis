<?php /* Smarty version Smarty-3.1.21, created on 2019-09-19 17:38:53
         compiled from "views\Reportes\Reportes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18008793975d83a10d8c2c98-04544893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e60c183dc81890ccb766597f98126a3cd9375dfb' => 
    array (
      0 => 'views\\Reportes\\Reportes.tpl',
      1 => 1559612595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18008793975d83a10d8c2c98-04544893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d83a10d8ffb93_79977487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83a10d8ffb93_79977487')) {function content_5d83a10d8ffb93_79977487($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Genesis</title>
</head>
<body>
  <div class=" col-md-3"></div>
  <div class=" col-md-6" id="tb">
     <form class="form-signin" role="form" method="POST">
       <br>
       <fieldset>
         <legend>Reportes Admnistrador</legend>
         <input type="submit" class="btn btn-primary" name="Lusuarios" value="Usuarios">
         <input type="submit" class="btn btn-primary" name="Lpersonal" value="Personal">
       </fieldset>    <br>
        <fieldset>
        <legend>Reportes Generales</legend>
        <Label>Nota: Algunos Reportes Necesitan Los Parametros de Inico y Final de Fechas de Datos</Label>
        <table class="table  table-striped  table-bordered">
          <tbody>
            <tr>
              <th>Fecha Inicio</th>
              <th><input type="date" id="dato1" name="dato1"></th>
              <th>Fecha Final</th>
              <th><input type="date" id="dato2" name="dato2"></th>
            </tr>
          </tbody>
        </table>
        <input type="submit" class="btn btn-primary" name="Estadistica" value="Antecedentes Obsetricos">
        <input type="submit" class="btn btn-primary" name="Estadistica3" value="Historial Clinica">
        <input type="submit" class="btn btn-primary" name="Estadistica4" value="Embarazo Actual">
        <input type="submit" class="btn btn-primary" name="LEmbarazadas" value="Listado Embararazadas">
        <input type="submit" class="btn btn-primary" name="Estadistica5" value="Otros">
      </fieldset>    <br>
      <fieldset>
          <legend>Examen Fisico</legend>
          <table class="table  table-striped  table-bordered" ><tbody>
              <tr><th>Peso</th><th><input type="number" name="dato12" id="dato12" value="0"></th>
              <th>Talla</th><th><input type="number" name="dato13" id="dato13" value="0"></th>
            </tr><tr><th>Pulso</th><th><input type="number" name="dato14" id="dato14" value="0"></th>
              <th>P/A</th><th><input type="number" name="dato15" id="dato15" value="0"></th>
            </tr><tr><th>F/R</th><th><input type="number" name="dato16" id="dato16" value="0"></th>
              <th>T</th><th><input type="number" name="dato17" id="dato17" value="0"></th>
            </tr><tr><th>FCF</th><th><input type="number" name="dato18" id="dato18" value="0"></th>
          </tr></tbody></table>
      <input type="submit" class="btn btn-primary" name="Estadistica2" value="Ver Reporte Referencias">
      </fieldset>    <br>
          <fieldset>
            <legend>Antecedestes Gineo-Obsetricos</legend>
              <Label>Nota: Llenar los Parametros de Inico y Final de Fechas de Datos</Label>
            <table class="table  table-striped  table-bordered" ><tbody>
                <tr><th>No. de embarazos</th><th><input type="number" id="dato21" name="dato21" value="0"></th>
                <th>No. de partos</th><th><input type="number" id="dato22" name="dato22" value="0"></th>
              </tr><tr><th>No. cesareas</th><th><input type="number"id="dato23" name="dato23" value="0"></th>
                <th>No. de abortos</th><th><input type="number" id="dato24" name="dato24"value="0"></th>
              </tr><tr><th>No. Hijos Vivos</th><th><input type="number" id="dato25" name="dato25"value="0"></th>
                <th>No.Hijos Muertos</th><th><input type="number"id="dato26" name="dato26" value="0"></th>
              </tr></tbody></table>
                <input type="submit" class="btn btn-primary" name="Estadistica6" value="Antecedestes Gineo-Obsetricos">
          </fieldset>
   </form>
   <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

  </div>
</body>

</html>
<?php }} ?>
