
<?php

require('fpdf.php');



session_start();
$category=$_POST['Radio'];
$result = $_SESSION['sessionVar'];
session_destroy();

class PDF extends FPDF
{

var $y0;

function Header()
{
global $title;

$this->SetFont('Arial','B',15);
$w=$this->GetStringWidth($title)+6;
$this->SetX((210-$w)/2);
$this->SetTextColor(0,0,0);
$this->SetFillColor(255,255,255);
$this->SetLineWidth(1);
$this->Cell($w,9,$title,1,1,'C',true);
$this->Ln(10);
$this->y0=$this->GetY();
}

function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->SetTextColor(0,0,0);
$this->SetFillColor(255,255,255);
$this->Cell(0,10,'Sayfa '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($label)
{
$this->SetFont('Arial','',12);
$this->SetTextColor(0,0,0);
$this->SetFillColor(255,255,255);
$this->Cell(0,6,"$label",0,1,'L',true);
$this->Ln(4);
$this->y0=$this->GetY();
}

function ChapterBody($txt)
{
$this->SetFont('Arial','',12);
$this->SetTextColor(0,0,0);
$this->SetFillColor(255,255,255);
$this->MultiCell(180,5,$txt);
$this->Ln();
}

function PrintChapter($title,$txt)
{
//Add chapter
$this->AddPage();
$this->ChapterTitle($title);
$this->ChapterBody($txt);
}

}

if($category == 'Pdf'){
$pdf=new PDF();
$title='Kullanici Raporlama';
$pdf->SetTitle($title);
$pdf->SetAuthor('The Movie Database');
$pdf->PrintChapter('Report',$result);
$pdf->Output();
}

?>

