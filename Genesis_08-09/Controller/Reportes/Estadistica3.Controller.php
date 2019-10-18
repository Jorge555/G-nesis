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
    $this->Cell(120,10,'Historial Clinica',1,0,'C');
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
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$dato=HCG1($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(130,10,"Diabetes",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=HCG2($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(130,10,"Enfermedad Renal",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=HCG3($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(130,10,"Enfermedad del corazón",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=HCG4($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(130,10,"Hipertensión arterial",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=HCG5($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(130,10,"Consumo de drogas incluido alcohol y tabaco	",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$dato=HCG6($_SESSION['Inicial'],$_SESSION['Final']);
$pdf->cell(130,10,"Cualquier otra enfermedad o afección médica severo",1,0,'c',0);
$pdf->cell(20,10,$dato[0],1,1,'c',0);
$pdf->Output();
