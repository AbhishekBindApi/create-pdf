<?php

require('fpdf/fpdf.php'); 
// New object created and constructor invoked 
$pdf = new FPDF(); 

// Add new pages. By default no pages available.
$pdf->AddPage(); 

// Reset font for the content
$pdf->SetFont('Arial', '', 20);
// Reset margins for the content
$pdf->SetMargins(25, 0, $right=null);

$pdf->Image('./img/logo.jpg', 20, 10, 35, 0); // Add the Image

// Reset font for the content
$pdf->SetFont('Arial', '', 12);

$pdf->SetMargins(20, 0, $right=null);

$pdf->Cell(0, 40, '', 0, 1,'');
$pdf->Cell(0, 2, 'Line 1', 0, 1,'');
$pdf->Cell(0, 4, 'Line 1', 0, 1,'C');
$pdf->Cell(0, 2, 'Line 2', 0, 1,'');
$pdf->Cell(0, 4, 'Line 2', 0, 1,'C');
$pdf->Cell(0, 2, 'Line 3', 0, 1,'');
$pdf->Cell(0, 4, 'Line 3', 0, 1,'C');
$pdf->Cell(0, 2, 'Line 4', 0, 1,'');
$pdf->Cell(0, 4, 'Line 4', 0, 1,'C');

$pdf->Cell(0, 20, 'Line 1', 0, 1,'C');

// Reset font for the content
$pdf->SetFont('Arial', 'B', 13);
$pdf->SetMargins(20, 0, $right=null);
$pdf->Cell(0, 4, 'This is heading', 0, 1,'');
// Reset font for the content
$pdf->SetFont('Arial', '', 13);
$pdf->SetMargins(20, 0, $right=null);
$pdf->Cell(0, 15, 'Multiple line text goes here. You can write as much text as you want.', 0, 1,'');

$pdf->Output();

?>
