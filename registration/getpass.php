<?php



// This is the script that will accept the activation string and email through GET parameters. 

// Check if the user has already confirmed registration. If not, render the E-pass(PDF) and confirm reigstration in database.



require('fpdf.php');

require('makefont/makefont.php');







include ('barcode-gen.php');

$activation_string = $_GET['activation'];

$email = $_GET['email'];

$host = "localhost";

				$user = "malharfe_admin";
				$pass = "malhar2015admin";

				$db = 'malharfe_15_online_passes';

				$table = 'epass';

				$connection = @mysqli_connect($host, $user, $pass, $db);

				if (!$connection) {

					die(mysqli_error());

				} else {

					//echo "<p>We got in the DB!!!</p>";

				}

$uid = 'uuid';

$act = 'activated';

$epdays = 'epdays';

$query1 = ("SELECT $uid,$act,$epdays FROM $table WHERE activation_string = \"$activation_string\" AND email = \"$email\"");

$result = mysqli_query($connection, $query1);

$row = mysqli_fetch_assoc($result);

if($row){

	if($row[$act])

	{

		die('<h2>This link has expired. Please register again if you did not print or save your pass.</h2>');

	}

	else

	{

		$edays = $row[$epdays];

		$query_name = ("SELECT `name`,`surname` FROM $table WHERE activation_string = \"$activation_string\" AND email = \"$email\"");

		$name_result = mysqli_query($connection, $query_name);

		$name_arr = mysqli_fetch_assoc($name_result);

		$name = $name_arr['name'];

		$surname = $name_arr['surname'];

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



		$query2 = ("UPDATE `epass` SET `activated`=1 WHERE `uuid`='$id'");

		$result2 = mysqli_query($connection, $query2);

	}

	$result->free_result();

}

else

{

	die("<h2>Invalid activation Link</h2>");

}

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

$pdf->Output();

unlink($filename3);

unlink($filename2);

}

elseif($edays == 3)

{

$pdf = new FPDF();

$pdf->AddPage();

//$pdf->AddFont('Myriad','','fontmyriad.php');

//$pdf->SetFont('Myriad','',35);

$pdf->Image($filename3,10,10,190,277);

$pdf->Output();

unlink($filename2);

unlink($filename3);

}

elseif($edays == 4)

{

$pdf = new FPDF();

$pdf->AddPage();

//$pdf->AddFont('Myriad','','fontmyriad.php');

//$pdf->SetFont('Myriad','',35);

$pdf->Image($filename2,10,10,190,277);

$pdf->AddPage();

$pdf->Image($filename3,10,10,190,277);

$pdf->Output();

unlink($filename2);

unlink($filename3);

}

else

{

	echo 'Something isn\'t right here';

}

?>