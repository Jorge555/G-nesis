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
    $this->Cell(120,10,'Otros Reportes',1,0,'C');
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

/* Referidos y Prioridades*/
$pdf->SetFont('Arial','B',12);
$pdf->cell(100,10,"Otros Datos",0,1,'c',0);
$pdf->SetFont('Arial','',12);
$dato=EVISTAS($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(100,10,"Embarazadas Vistas",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=REFERIDO($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(100,10,"No. Referencias",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=PRIORIDAD($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(100,10,"No. Embarazadas Con alta Prioridad",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$pdf->Output();
