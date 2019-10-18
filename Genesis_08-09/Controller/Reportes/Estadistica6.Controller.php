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
    $this->Cell(120,10,'Antecedentes-Gineo-Obsetricos',1,0,'C');
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
$dato=AGOFUR($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(80,10,utf8_decode("FRU"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=AGOFPP($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(80,10,utf8_decode("FPP"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=AGO3($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['AGO3'] );
$pdf->cell(80,10,utf8_decode("No. de Embarazos"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=AGO4($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['AGO4'] );
$pdf->cell(80,10,utf8_decode("No. de Partos"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=AGO5($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['AGO5'] );
$pdf->cell(80,10,utf8_decode("No. de Cesareas"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=AGO6($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['AGO6'] );
$pdf->cell(80,10,utf8_decode("No. de Abortos"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=AGO7($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['AGO7'] );
$pdf->cell(80,10,utf8_decode("No. Hijos Vivos"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=AGO8($_SESSION['Inicial'],$_SESSION['Final'],$_SESSION['AGO8'] );
$pdf->cell(80,10,utf8_decode("No. Hijos Muertos"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);


$pdf->Output();
