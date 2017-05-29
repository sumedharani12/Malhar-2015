<?
header("Location: shut.php");  
/*<?php



session_start();

$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_colleges';
				$table = 'Social_Cause_reg';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
					//echo "<p>We got in the DB!!!</p>";
				}

				$coid = $_SESSION['coid'];
				$coid= mysql_real_escape_string($coid);

				$coname = $_SESSION['coname'];
				$coname= mysql_real_escape_string($coname);

				$email = $_POST['email'];
				$email = mysql_real_escape_string($email);

				$p1 = $_POST['p1'];
				$p1 = mysql_real_escape_string($p1);
				
				$p2 = $_POST['p2'];
				$p2 = mysql_real_escape_string($p2);

				
				$p3 = $_POST['p3'];
				$p3 = mysql_real_escape_string($p3);

				
				$p4 = $_POST['p4'];
				$p4 = mysql_real_escape_string($p4);

				$pref1 = $_POST['pref1'];
				
				$pref2 = $_POST['pref2'];

				
				$pref3 = $_POST['pref3'];

				
				$pref4 = $_POST['pref4'];


				
				$query1 = ("INSERT INTO `Social_Cause_reg`(`UID`, `Name`, `Email`, `P1`, `P2`, `P3`, `P4`, `Pref1`, `Pref2`, `Pref3`, `Pref4`) VALUES('$coid', '$coname', '$email','$p1', '$p2', '$p3','$p4', '$pref1', '$pref2', '$pref3', '$pref4')");
				
				if(mysql_query($query1, $connection)){
$to = "$email";
$subject = "Malhar 2015 - A chronicle - Social Cause registrations";
$txt = '
Hello
Thank you for registering for the Malhar Social Cause. The dates and deadlines for the Social Cause are as follows:
1) Dates for sending in models (Elims Round)- 10th-19th July 11:59 PM 
2) Malhar Social Cause (Final Round)- 5th August (Time will be specified after the Elims)

For more information and a sample format visit the Malhar Social Cause Page at http://www.malharfest.org/social';

$headers = "From: socialcause@malharfest.org";

mail($to,$subject,$txt,$headers);

header("Location: success.php");
exit();
				}
				else
				{
					header("Location: fail.php");
exit();
				}


?>

*/