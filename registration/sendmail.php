<?php
	
require('fpdf.php');

require('makefont/makefont.php');







include ('barcode-gen.php');

		$edays = $epdays;

		
		$text = $name . ' ' . $surname;

		$font = 'CaviarDreams.ttf';

		//Pass for Day 2

		$dest_day_2 = imagecreatefrompng('day2.png');

		imagettftext($dest_day_2, 16, 0, 60, 82, $black, $font, $text);

		$filename2 =sha1(uniqid())."d2.png";

		imagepng($dest_day_2,$filename2);

		imagedestroy($dest_day_2);

		//Pass for Day 3

		$dest_day_3 = imagecreatefrompng('day3.png');

		imagettftext($dest_day_3, 16, 0, 60, 83, $black, $font, $text);


		$filename3 =sha1(uniqid())."d3.png";

		imagepng($dest_day_3,$filename3);

		imagedestroy($dest_day_3);


	
/*

$rules = "PLEASE NOTE" . '<br>' . "



Passes are NOT FOR SALE." . '<br>' ."

Entry on first come first serve basis." . '<br>' . " 

Entry only on producing an authentic College ID Card along with pass." .'<br>' . "

Rights of admission reserved. " . '<br>' . "

Potentially dangerous items will be confiscated." . '<br>' . "

We are responsible for confiscated items till 6:00 PM only. " . '<br>' ."

No cigarettes, alcohol, food items, cameras etc. allowed. Avoid carrying any other valuables into the college premises; we are not responsible for them.". '<br>'. '<br>'."

For updates & more information visit" . '<br>' . '<a href=\'malharfest.org\'>' . "

malharfest.org" . '</a>';*/

//MakeFont('fontmyriad.ttf','cp1252');

$connection->close();

if($edays == 2)

{

$pdf = new FPDF();

$pdf->AddPage();

//$pdf->AddFont('Myriad','','fontmyriad.php');

//$pdf->SetFont('Myriad','',35);

$pdf->Image($filename2,10,10,190,277);


$to = "$email"; 
$from = "epass@malharfest.org"; 
$subject = "Malhar 2015 - A Chronicle"; 
$message = "<p>Please find the pass attached.</p>";

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "doc.pdf";

// encode data (puts attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));

// main header
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

// no more headers after this, we start the body! //

$body = "--".$separator.$eol;
$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$body .= "Thank you for registering for Malhar 2015.".$eol;

// message
$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol;

// attachment
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

// send message
mail($to, $subject, $body, $headers);


unlink($filename3);

unlink($filename2);


}

elseif($edays == 3)

{

$pdf = new FPDF('P', 'pt', array(500,233));



$pdf->AddPage();

$pdf->Image($filename3,10,10,190,277);


$to = "$email"; 
$from = "epass@malharfest.org"; 
$subject = "Malhar 2015 - A Chronicle"; 
$message = "<p>Please find the pass attached.</p>";

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "doc.pdf";

// encode data (puts attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));

// main header
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

// no more headers after this, we start the body! //

$body = "--".$separator.$eol;
$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$body .= "Thank you for registering for Malhar 2015.".$eol;

// message
$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol;

// attachment
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

// send message
mail($to, $subject, $body, $headers);


unlink($filename3);

unlink($filename2);

}

elseif($edays == 4)

{

$pdf = new FPDF('P', 'pt', array(500,233));

$pdf->AddPage();

//$pdf->AddFont('Myriad','','fontmyriad.php');

//$pdf->SetFont('Myriad','',35);

$pdf->Image($filename2,10,10,190,277);

$pdf->AddPage();

$pdf->Image($filename3,10,10,190,277);


$to = "$email"; 
$from = "epass@malharfest.org"; 
$subject = "Malhar 2015 - A Chronicle"; 
$message = "<p>Please find the pass attached.</p>";

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "doc.pdf";

// encode data (puts attachment in proper format)
$pdfdoc = $pdf->Output("", "S");
$attachment = chunk_split(base64_encode($pdfdoc));

// main header
$headers  = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol; 
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

// no more headers after this, we start the body! //

$body = "--".$separator.$eol;
$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
$body .= "Thank you for registering for Malhar 2015.".$eol;

// message
$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol;

// attachment
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

// send message
mail($to, $subject, $body, $headers);


unlink($filename3);

unlink($filename2);

}

else

{

	echo 'Something isn\'t right here';

}

// email stuff (change data below)


?>

