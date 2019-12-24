<?php
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=stockinventory','root','');
$date = date("d"+"/"+"m"+"/"+"y");
class myPDF extends FPDF{
	function header(){
		$this->Image('annauniversity.png',22,6,25,25);
		$this->Image('ceg1.png',242,6,25,25);
		$this->SetFont('Times','B',20);
		$this->Cell(276,10,'Department of Information Science and Technology',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',14);
		$this->Cell(276,10,'LIST OF ISSUED STOCKS',0,0,'C');
		$this->Ln(20);
	}
	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0, 10, "Page " . $this->PageNo() . "/{totalPages}(Date:".date("m/d/Y").")",0, 0, 'C');
		$this->SetFont('Arial','',12);
	}
	function headerTable(){
		$this->SetFont('Times','B',12);
		$this->Cell(20,10,'SLNO',1,0,'C');
		$this->Cell(40,10,'NAME',1,0,'C');
		$this->Cell(50,10,'NO_ITEMS_ISSUED',1,0,'C');
		$this->Cell(60,10,'ISSUED_FROM',1,0,'C');
		$this->Cell(60,10,'ISSUED_TO',1,0,'C');
		$this->Cell(50,10,'DATE_OF_ISSUE',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Times','',12);
		$stmt = $db->query('select * from issued');
		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
		$this->Cell(20,10,$data->SLNO,1,0,'C');
		$this->Cell(40,10,$data->NAME,1,0,'L');
		$this->Cell(50,10,$data->NO_ITEMS_ISSUED,1,0,'L');
		$this->Cell(60,10,$data->ISSUED_FROM,1,0,'L');
		$this->Cell(60,10,$data->ISSUED_TO,1,0,'L');
		$this->Cell(50,10,$data->DATE_OF_ISSUE,1,0,'L');		
		$this->Ln();
		}
	}
}
$pdf = new myPDF();
$pdf->AliasNbPages('{totalPages}');
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>