
<script type="text/jscript">
function lol(){
  //    $('#BTNFROMREFERENCIA').attr('disabled', false);  desactiva el boton
  //  $('#BTNFROMREFERENCIA').removeClass('hidden');  muestra el boton
  //  $('#BTNFROMREFERENCIA').attr('disabled', true);  activa el boton
  //  $('#BTNFROMREFERENCIA').addClass('hidden');       oculta el boton
  //se cabia el hidden por disabled   desactiva el link de un boton le href
}

  function activar() {
  var campo1 = $('#dato').val();   var campo9 = $('#dato9').val();    var campo15 = $('#dato25').val();  var campo23 = $('#dato33').val();
  var campo2 = $('#dato2').val();  var campo10 = $('#dato10').val();  var campo16= $('#dato26').val();  var campo24 = $('#dato34').val();
  var campo3 = $('#dato3').val();  var campo11 = $('#dato11').val();  var campo17 = $('#dato27').val();  var campo25 = $('#dato35').val();
  var campo4 = $('#dato4').val();  var campo12 = $('#dato12').val();  var campo18 = $('#dato28').val();
  var campo5 = $('#dato5').val();  var campo13 = $('#dato13').val();  var campo19 = $('#dato29').val();
  var campo6 = $('#dato6').val();  var campo14 = $('#dato24').val();  var campo20 = $('#dato30').val();
  var campo7 = $('#dato7').val();                                     var campo21 = $('#dato31').val();
  var campo8 = $('#dato8').val();                                     var campo22 = $('#dato32').val();
////14
  var campoaux=$('#PRIORIDAD').val();
  if(campoaux=="0"){ alert("Necesita Referencia");  }

    if (campo1||campo7||campo13||campo19||campo25||
        campo2||campo8||campo14||campo20||
        campo3||campo9||campo15||campo21||
        campo4||campo10||campo16||campo22||
        campo5||campo11||campo17||campo23||
        campo6||campo12||campo18||campo24) {
      document.getElementById('PRIORIDAD').value="1";
    //  document.getElementById('Regresar').value="Necesita Referencia";
  }

  Responsable2();
}
  function desactivar() {
    var campo1 = $('#dato').val();   var campo9 = $('#dato9').val();    var campo15 = $('#dato25').val();  var campo23 = $('#dato33').val();
    var campo2 = $('#dato2').val();  var campo10 = $('#dato10').val();  var campo16= $('#dato26').val();  var campo24 = $('#dato34').val();
    var campo3 = $('#dato3').val();  var campo11 = $('#dato11').val();  var campo17 = $('#dato27').val();  var campo25 = $('#dato35').val();
    var campo4 = $('#dato4').val();  var campo12 = $('#dato12').val();  var campo18 = $('#dato28').val();
    var campo5 = $('#dato5').val();  var campo13 = $('#dato13').val();  var campo19 = $('#dato29').val();
    var campo6 = $('#dato6').val();  var campo14 = $('#dato24').val();  var campo20 = $('#dato30').val();
    var campo7 = $('#dato7').val();                                     var campo21 = $('#dato31').val();
    var campo8 = $('#dato8').val();                                     var campo22 = $('#dato32').val();

  if (campo1||campo7||campo13||campo19||campo25||
      campo2||campo8||campo14||campo20||
      campo3||campo9||campo15||campo21||
      campo4||campo10||campo16||campo22||
      campo5||campo11||campo17||campo23||
      campo6||campo12||campo18||campo24) {
      document.getElementById('PRIORIDAD').value="0";
    //  document.getElementById('Regresar').value="Regresar";
    }
    Responsable();
  }


  //ResponsableFRO

  window.onload = function(){ ///da los valores a los input de date
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia;
    if(mes<10)
      mes='0'+mes
    document.getElementById('dato15').value=ano+"-"+mes+"-"+dia;
    document.getElementById('dato16').value=ano+"-"+mes+"-"+dia;
    document.getElementById('dato17').value=ano+"-"+mes+"-"+dia;
  }

  function Responsable() {
  var FROs = $('#ResponsableFRO').val();
  if(FROs==""){ document.getElementById('ResponsableFRO').value=" "; }

}
function Responsable2() {
var FROs = $('#ResponsableFRO').val();
if(FROs==" "){ document.getElementById('ResponsableFRO').value=""; }
}
</script>
