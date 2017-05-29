<?php

// This is the script that will accept the activation string and email through GET parameters. 
// Check if the user has already confirmed registration. If not, render the E-pass(PDF) and confirm reigstration in database.

require('fpdf.php');
include ('barcode-gen.php');
$text = 'textlongtextverylong';
$font = 'font.ttf';
		$dest = imagecreatefromjpeg('pass.jpg');
		imagettftext($dest, 24, 0, 480, 421, $white, $font, $text);
		$src = $im;
		imagecopymerge($dest, $src, 21, 454, 0, 0, 192, 57,100);
		$filename ="\\" . sha1(uniqid())."_.png";
		imagepng($dest,$filename);
		imagedestroy($dest);
		imagedestroy($src);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image($filename,10,10,100,62.3);
$pdf->Output();
unlink($filename);
?>