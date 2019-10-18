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
    $this->Cell(120,10,'Examen Fisico',1,0,'C');
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
$pdf->SetFont('Arial','',12);
$pdf->cell(80,10,utf8_decode("Referencias Vistas"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=REVISTAS($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(80,10,utf8_decode("Peso mayor igual"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=PESOREF($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['Peso']);
$pdf->cell(80,10,utf8_decode("Pulso mayor igual"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=PULSO($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['Pulso'] );
$pdf->cell(80,10,utf8_decode("Peso mayor igual"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=PA($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['PAEX'] );
$pdf->cell(80,10,utf8_decode("PA mayor igual"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=FR($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['FREX'] );
$pdf->cell(80,10,utf8_decode("FR mayor igual"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=T($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['TEX'] );
$pdf->cell(80,10,utf8_decode("T mayor igual"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=FCF($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['FCFEX'] );
$pdf->cell(80,10,utf8_decode("FCF mayor igual"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);



$pdf->Output();
