<?php
include("pdf/fpdf.php");
include("Model/class.Reportes.php");
class PDF extends FPDF
{
function Header()
{
  $this->Image('assets/img/mspas.png',10,8,25);
    $this->SetFont('Arial','B',15);
     $this->Cell(45);
    $this->Cell(120,10,'Listado de Usuarios',1,0,'C');
    $this->Ln(25);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,utf8_decode('Pagina '.$this->PageNo().'/{nb}'),0,0,'C');
}

}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$n=1;
$pdf->cell(10,10,"ID",1,0,'c',0);
$pdf->cell(80,10,"Personal",1,0,'c',0);
$pdf->cell(25,10,"Usuario",1,0,'c',0);
$pdf->cell(25,10,"Password",1,0,'c',0);
$pdf->cell(30,10,"Rol",1,1,'c',0);
foreach ( Lusuarios() as $datos) {
$pdf->cell(10,10,$n,1,0,'c',0);
$pdf->cell(80,10,utf8_decode($datos[1]." ".$datos[2]),1,0,'c',0);
$pdf->cell(25,10,utf8_decode($datos[3]),1,0,'c',0);
$pdf->cell(25,10,utf8_decode($datos[4]),1,0,'c',0);
$pdf->cell(30,10,utf8_decode($datos[5]),1,1,'c',0);
$n++;
}


$pdf->Output();
