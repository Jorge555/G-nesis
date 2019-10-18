<?php
session_start();
include("pdf/fpdf.php");
include("Model/class.Reportes.php");
class PDF extends FPDF
{
function Header()
{
  $this->Image('assets/img/mspas.png',10,8,25);
    $this->SetFont('Arial','B',15);
     $this->Cell(75);
    $this->Cell(120,10,'Antecedentes Obsetricos',1,0,'C');
    $this->Ln(25);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','',5);
    $this->Cell(0,10,utf8_decode('Pagina '.$this->PageNo().'/{nb}'),0,0,'C');
}

}




/*Antecedentes Obsetricos   -7*/
$dato=contA1($_SESSION['Inicial'],$_SESSION['Final']);
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->cell(200,10,utf8_decode("Muerte fetal o muerte neonatal previas"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=contA2($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(200,10,utf8_decode("Antecedentes de 3 o más abortos espontáneos"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=contA3($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(200,10,utf8_decode("Antecedentes de 3 o más gestas"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=contA4($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(200,10,utf8_decode("Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.)"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=contA5($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(200,10,utf8_decode("Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.)"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=contA6($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(200,10,utf8_decode("Antecedentes de hipertensión o preclampsia/eclampsia	"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=contA7($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(200,10,utf8_decode("Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical)"),1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$pdf->Output();
