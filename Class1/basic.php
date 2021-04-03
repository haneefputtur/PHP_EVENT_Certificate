<?php
require('../fpdf/fpdf.php');

//$name = text to be added, $x= x cordinate, $y = y coordinate, $a = alignment , $f= Font Name, $t = Bold / Italic, $s = Font Size, $r = Red, $g = Green Font color, $b = Blue Font Color
function AddText($pdf, $text, $x, $y, $a, $f, $t, $s, $r, $g, $b) {
$pdf->SetFont($f,$t,$s);	
$pdf->SetXY($x,$y);
$pdf->SetTextColor($r,$g,$b);
$pdf->Cell(0,10,$text,0,0,$a);	
}

//Create A 4 Landscape page
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetCreator('Haneef Puttur');
// Add background image for PDF
$pdf->Image('../template.jpg',0,0,0);	

//Add a Name to the certificate

AddText($pdf,ucwords('Mahammad Haneef'), 0,80, 'C', 'Helvetica','B',30,3,84,156);

$pdf->Output();
?>