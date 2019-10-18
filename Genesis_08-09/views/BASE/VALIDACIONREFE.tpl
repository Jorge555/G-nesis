
<script type="text/jscript">

  window.onload = function(){ ///da los valores a los input de date
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia;
    if(mes<10)
      mes='0'+mes
    document.getElementById('dato3').value=ano+"-"+mes+"-"+dia;
    document.getElementById('dato19').value=ano+"-"+mes+"-"+dia;
    var hora=fecha.getHours();
    var seg=fecha.getMinutes();

document.getElementById('dato4').value=hora+":"+seg;

  }
//hora

</script>
