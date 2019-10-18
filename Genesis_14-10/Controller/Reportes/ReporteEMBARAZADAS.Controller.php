<?php
include("pdf/fpdf.php");
include("Model/class.Reportes.php");
class PDF extends FPDF
{
function Header()
{
  $this->Image('assets/img/mspas.png',10,8,25);
    $this->SetFont('Arial','B',15);
     $this->Cell(150);
    $this->Cell(120,10,'Listado Embarazadas',1,0,'C');
    $this->Ln(25);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,utf8_decode('Pagina '.$this->PageNo().'/{nb}'),0,0,'C');
}

}

$pdf = new PDF('L','mm','A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$n=1;
$pdf->cell(10,10,"#",1,0,'c',0);
$pdf->cell(90,10,"Nombre",1,0,'c',0);
$pdf->cell(40,10,"DPI",1,0,'c',0);
$pdf->cell(20,10,"Edad",1,0,'c',0);
$pdf->cell(90,10,"Nombre Esposo",1,0,'c',0);
$pdf->cell(25,10,"DPI",1,0,'c',0);
$pdf->cell(100,10,"Comunidad",1,1,'c',0);
foreach ( Lembarazadas() as $datos) {
$pdf->cell(10,10,$n,1,0,'c',0);
$pdf->cell(90,10,utf8_decode($datos[1]),1,0,'c',0);
$pdf->cell(40,10,utf8_decode($datos[2]),1,0,'c',0);
$pdf->cell(20,10,utf8_decode($datos[3]),1,0,'c',0);
$pdf->cell(90,10,utf8_decode($datos[6]),1,0,'c',0);
$pdf->cell(25,10,utf8_decode($datos[7]),1,0,'c',0);
$pdf->cell(100,10,utf8_decode($datos[13]),1,1,'c',0);
$n++;
}


$pdf->Output();
