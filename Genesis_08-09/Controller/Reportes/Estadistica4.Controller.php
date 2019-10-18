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
     $this->Cell(50);
    $this->Cell(120,10,'Historial Embarazo Actual',1,0,'C');
    $this->Ln(25);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','',5);
    $this->Cell(0,10,utf8_decode('Pagina '.$this->PageNo().'/{nb}'),0,0,'C');
}

}

$dato=contA1($_SESSION['Inicial'],$_SESSION['Final']);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->cell(150,10,utf8_decode("Datos de Embarazos"),0,1,'c',0);
$pdf->SetFont('Arial','',12);
$dato=EA1($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Diagnostico o sospecha de embarazo múltiple"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA2($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Menos de 20 años"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA3($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Más de 35 años"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA4($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Paciente Rh (-)"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA5($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Hemorragia vaginal sin importar cantidad"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA6($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("VIH positivo o sífilis positivo"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA7($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Presión arterial diastólica de 90 mm Hg o más durante el registro de datos"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA8($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Anemia clínica o de laboratorio"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA9($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Desnutrición u obesidad"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA10($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Dolor abdominal"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA11($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Sintomatología urinaria"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=EA12($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(150,10,utf8_decode("Ictericia"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$pdf->Output();
