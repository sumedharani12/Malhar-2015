<?php

  include('php-barcode.php');
 
  $fontSize = 10; // GD1 in px ; GD2 in point
  $marge = 10; // between barcode and hri in pixel
  $x = 59;  // barcode center
  $y = 19;  // barcode center
  $height = 38;  // barcode height in 1D ; module size in 2D
  $width = 2;  // barcode height in 1D ; not use in 2D
  $angle = 0; // rotation in degrees 
  $code = 'Malhar'; // barcode, of course ;)
  $type = 'code93';
  
  // ————————————————– //
  // ALLOCATE GD RESSOURCE
  // ————————————————– //
  $im =     imagecreatetruecolor(118, 38);
  $black  = ImageColorAllocate($im,0x00,0x00,0x00);
  $white  = ImageColorAllocate($im,0xff,0xff,0xff);
  imagefilledrectangle($im, 0, 0, 300, 300, $white);
  
  // ————————————————– //
  // GENERATE
  // ————————————————– //
  $data = Barcode::gd($im, $black, $x, $y, $angle, $type, array('code'=>$code) , $width, $height);

?>