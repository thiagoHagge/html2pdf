<?php
include 'src/Cezpdf.php';
$text = $_POST['text'];
$pdf = new Cezpdf('a4','portrait','color',[255,255,255]);
// Set pdf Bleedbox
$pdf->ezSetMargins(20,20,20,20);
// Use one of the pdf core fonts
$mainFont = 'Times-Roman';
// Select the font
$pdf->selectFont($mainFont);
// Define the font size
$size=16;
// Modified to use the local file if it can
$pdf->openHere('Fit');

// Output some colored text by using text directives and justify it to the right of the document
$pdf->ezText($text, $size, ['justification'=>'left']);
// Output the pdf as stream, but uncompress
$pdf->ezStream(['compress'=>0]);