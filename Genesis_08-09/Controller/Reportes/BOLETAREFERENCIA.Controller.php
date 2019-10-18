<?php
include("pdf/fpdf.php");
include("Model/class.Reportes.php");
session_start();

class PDF extends FPDF
{
function Header()
{
  $this->Image('assets/img/mspas.png',10,8,25);
    $this->SetFont('Arial','B',15);
     $this->Cell(65);
    $this->Cell(60,10,'Boleta de Referencia',1,0,'C');
    $this->Ln(15);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,5,utf8_decode('Pagina '.$this->PageNo().'/{nb}'),0,0,'C');
}

}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$ID= $_SESSION['IDRF'];
if(BOLETAREFERENCIA($ID)){
foreach (BOLETAREFERENCIA($ID) as $dato) {
$pdf->SetFont('Arial','',8);
$pdf->cell(40,5,utf8_decode(""),0,0,'c',0);
$pdf->cell(40,5,utf8_decode(""),0,0,'c',0);
$pdf->cell(40,5,utf8_decode("Fecha"),1,0,'c',0);
$pdf->cell(40,5,utf8_decode($dato[4]),1,1,'c',0);
$pdf->cell(40,5,utf8_decode("Servicio que envia"),1,0,'c',0);
$pdf->cell(40,5,utf8_decode($dato[83]),1,0,'c',0);
$pdf->cell(40,5,utf8_decode("Servicio a que se Refiere"),1,0,'c',0);
$pdf->cell(40,5,utf8_decode($dato[85]),1,1,'c',0);
$pdf->cell(40,5,utf8_decode("Nombre Pacciente:"),1,0,'c',0);
$pdf->cell(120,5,utf8_decode($dato[66]),1,1,'c',0);
$pdf->cell(40,5,utf8_decode("Telefono:"),1,0,'c',0);
$pdf->cell(40,5,utf8_decode($dato[67]),1,0,'c',0);
$pdf->cell(40,5,utf8_decode("Hora de Traslado"),1,0,'c',0);
$pdf->cell(40,5,utf8_decode($dato[5]),1,1,'c',0);
$pdf->cell(40,5,utf8_decode("Tipo Referencia"),1,0,'c',0);
if($dato[6]=="0"){
  $pdf->cell(120,5,utf8_decode("Consulta Externa"),1,1,'c',0);
}else {
  $pdf->cell(120,5,utf8_decode("Emergencia"),1,1,'c',0);
}
$pdf->cell(40,5,utf8_decode("Historial de Enfermedad"),1,0,'c',0);
$pdf->cell(120,5,utf8_decode($dato[7]),1,1,'c',0);
/*-----------------------------------------------------------------------------160*/
$pdf->SetFont('Arial','B',10);
$pdf->cell(160,5,utf8_decode("Antecedentes Medicos"),1,1,'c',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(20,5,utf8_decode("Medicos"),1,0,'c',0);
$pdf->cell(60,5,utf8_decode($dato[8]),1,0,'c',0);
$pdf->cell(20,5,utf8_decode("Mentales"),1,0,'c',0);
$pdf->cell(60,5,utf8_decode($dato[9]),1,1,'c',0);
$pdf->cell(20,5,utf8_decode("Quirugicos"),1,0,'c',0);
$pdf->cell(60,5,utf8_decode($dato[10]),1,0,'c',0);
$pdf->cell(20,5,utf8_decode("Traumaticos"),1,0,'c',0);
$pdf->cell(60,5,utf8_decode($dato[11]),1,1,'c',0);
$pdf->cell(20,5,utf8_decode("Alergicos:"),1,0,'c',0);
$pdf->cell(140,5,utf8_decode($dato[12]),1,1,'c',0);
/*-----------------------------------------------------------------------------160*/
$pdf->SetFont('Arial','B',10);
$pdf->cell(160,5,utf8_decode("Examenes Fisicos"),1,1,'c',0);
$pdf->SetFont('Arial','',8);
$pdf->cell(15,5,utf8_decode("Peso"),1,0,'c',0);
$pdf->cell(15,5,utf8_decode($dato[13]),1,0,'c',0);
$pdf->cell(15,5,utf8_decode("Talla"),1,0,'c',0);
$pdf->cell(15,5,utf8_decode($dato[14]),1,0,'c',0);
$pdf->cell(20,5,utf8_decode("Pulso"),1,0,'c',0);
$pdf->cell(20,5,utf8_decode($dato[15]),1,0,'c',0);
$pdf->cell(30,5,utf8_decode("P/A"),1,0,'c',0);
$pdf->cell(30,5,utf8_decode($dato[16]),1,1,'c',0);
$pdf->cell(15,5,utf8_decode("F/R"),1,0,'c',0);
$pdf->cell(15,5,utf8_decode($dato[17]),1,0,'c',0);
$pdf->cell(15,5,utf8_decode("T"),1,0,'c',0);
$pdf->cell(15,5,utf8_decode($dato[18]),1,0,'c',0);
$pdf->cell(20,5,utf8_decode("FCF"),1,0,'c',0);
$pdf->cell(20,5,utf8_decode($dato[19]),1,0,'c',0);
$pdf->cell(30,5,utf8_decode("Ingreso Clinica"),1,0,'c',0);
$pdf->cell(30,5,utf8_decode($dato[20]),1,1,'c',0);
$pdf->cell(35,10,utf8_decode("Motivo Referencia"),1,0,'c',0);
$pdf->cell(125,10,utf8_decode($dato[21]),1,1,'c',0);
$pdf->cell(35,10,utf8_decode("Tratamiento Efectuado"),1,0,'c',0);
$pdf->cell(125,10,utf8_decode($dato[22]),1,1,'c',0);
$pdf->cell(35,10,utf8_decode("Examenes Ralizados"),1,0,'c',0);
$pdf->cell(125,10,utf8_decode($dato[23]),1,1,'c',0);
/*-----------------------------------------------------------------------------160*/
  $pdf->SetFont('Arial','B',10);
  $pdf->cell(160,5,utf8_decode("Antecedentes Obsetricos"),1,1,'c',0);
  $pdf->SetFont('Arial','',8);
  $pdf->cell(140,5,utf8_decode("Muerte fetal o muerte neonatal previas"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[27]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Antecedentes de 3 o más abortos espontáneos"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[28]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Antecedentes de 3 o más gestas"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[29]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.)"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[30]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.)"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[31]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Antecedentes de hipertensión o preclampsia/eclampsia	"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[32]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Cirugías previas en el tacto reproductivo(miomectomia,conización,cesáreas o cerclaje cervical)"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[33]),1,1,'c',0);
/*-----------------------------------------------------------------------------160*/
  $pdf->SetFont('Arial','B',10);
  $pdf->cell(160,5,utf8_decode("Antecedentes Obsetricos"),1,1,'c',0);
  $pdf->SetFont('Arial','',8);
  $pdf->cell(40,5,utf8_decode("Diabetes"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[34]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("Enfermedad Renal"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[35]),1,1,'c',0);
  $pdf->cell(40,5,utf8_decode("Enfermedad del corazón"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[36]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("Hipertensión arterial"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[37]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Consumo de drogas incluido alcohol y tabaco	"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[38]),1,1,'c',0);
  $pdf->cell(140,5,utf8_decode("Cualquier otra enfermedad o afección médica severo"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[39]),1,1,'c',0);
  $pdf->cell(30,5,utf8_decode("Especificacion:"),1,0,'c',0);
  $pdf->cell(130,5,utf8_decode($dato[40]),1,1,'c',0);
/*-----------------------------------------------------------------------------160*/
  $pdf->SetFont('Arial','B',10);
  $pdf->cell(160,5,utf8_decode("Antecedentes Gineo-Obsetricos"),1,1,'c',0);
  $pdf->SetFont('Arial','',8);
  $pdf->cell(40,5,utf8_decode("FUR"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[42]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("FPP"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[43]),1,1,'c',0);
  $pdf->cell(40,5,utf8_decode("No. de embarazos"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[44]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("No. de partos"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[45]),1,1,'c',0);
  $pdf->cell(40,5,utf8_decode("No. cesareas"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[46]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("No. de abortos"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[47]),1,1,'c',0);
  $pdf->cell(40,5,utf8_decode("No. Hijos Vivos"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[48]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("No.Hijos Muertos"),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode($dato[49]),1,1,'c',0);
/*-----------------------------------------------------------------------------160*/
  $pdf->SetFont('Arial','B',10);
  $pdf->cell(160,5,utf8_decode("Datos de Embarazos"),1,1,'c',0);
  $pdf->SetFont('Arial','',8);
  $pdf->cell(70,5,utf8_decode("Diagnostico o sospecha de embarazo múltiple"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[50]),1,0,'c',0);
  $pdf->cell(35,5,utf8_decode("Menos de 50 años"),1,0,'c',0);
  $pdf->cell(35,5,utf8_decode($dato[51]),1,1,'c',0);

  $pdf->cell(70,5,utf8_decode("Más de 35 años"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[52]),1,0,'c',0);
  $pdf->cell(35,5,utf8_decode("Paciente Rh (-)"),1,0,'c',0);
  $pdf->cell(35,5,utf8_decode($dato[53]),1,1,'c',0);

  $pdf->cell(70,5,utf8_decode("Hemorragia vaginal sin importar cantidad"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[54]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("VIH positivo o sífilis positivo"),1,0,'c',0);
  $pdf->cell(30,5,utf8_decode($dato[55]),1,1,'c',0);

  $pdf->cell(130,5,utf8_decode("Presión arterial diastólica de 90 mm Hg o más durante el registro de datos"),1,0,'c',0);
  $pdf->cell(30,5,utf8_decode($dato[56]),1,1,'c',0);

  $pdf->cell(70,5,utf8_decode("Anemia clínica o de laboratorio"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[57]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("Desnutrición u obesidad"),1,0,'c',0);
  $pdf->cell(30,5,utf8_decode($dato[58]),1,1,'c',0);

  $pdf->cell(30,5,utf8_decode("Dolor abdominal"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[59]),1,0,'c',0);
  $pdf->cell(40,5,utf8_decode("Sintomatología urinaria"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[60]),1,0,'c',0);
  $pdf->cell(30,5,utf8_decode("Ictericia"),1,0,'c',0);
  $pdf->cell(20,5,utf8_decode($dato[61]),1,1,'c',0);
  $pdf->Ln(10);
  $pdf->cell(50,4,utf8_decode("Firma y sello de Responsable"),0,0,'c',0);
  $pdf->cell(50,4,"______________________________________",0,1,'c',0);
  $pdf->cell(53,4," ",0,0,'c',0);
  $pdf->cell(52,4,utf8_decode($dato[62]),0,0,'c',0);
  $pdf->cell(53,4," ",0,1,'c',0);
/*-----------------------------------------------------------------------------160*/
  $pdf->SetFont('Arial','B',10);
  $pdf->cell(160,10,utf8_decode(""),0,1,'c',0);
  $pdf->cell(160,10,utf8_decode("ContraReferencia"),1,1,'c',0);
  $pdf->SetFont('Arial','',8);
  $pdf->cell(50,10,utf8_decode("Resumen de la devolucion"),1,0,'c',0);
  $pdf->cell(110,10,utf8_decode($dato[87]),1,1,'c',0);
  $pdf->cell(50,10,utf8_decode("Tratamiento Brindado"),1,0,'c',0);
  $pdf->cell(110,10,utf8_decode($dato[88]),1,1,'c',0);
  $pdf->cell(50,10,utf8_decode("Diagnostico"),1,0,'c',0);
  $pdf->cell(110,10,utf8_decode($dato[89]),1,1,'c',0);
  $pdf->cell(50,10,utf8_decode("Recomendaciones"),1,0,'c',0);
  $pdf->cell(110,10,utf8_decode($dato[90]),1,1,'c',0);
  $pdf->Ln(10);
  $pdf->cell(50,5,utf8_decode("Firma y sello de ContraReferencia"),0,0,'c',0);
  $pdf->cell(50,5,utf8_decode("________________________________________"),0,1,'c',0);

}
/*-----------------------------------------------------------------------------------------*/
}else {


}
$pdf->Output();
