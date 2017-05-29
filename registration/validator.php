<?
header("Location: shut.php");  /* <?php

$more_entropy=True;

$name = $_POST['name'];

$surname = $_POST['surname'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$college = $_POST['college'];

$gender = $_POST['gender'];

$epdays = $_POST['epdays'];

$uid = uniqid("",$more_entropy);





function check_email_address($email) {

	return filter_var($email, FILTER_VALIDATE_EMAIL);

}



function check_phone_number($phone) {

	return ctype_digit($phone);

}



function college_check($college) {

	if (!strlen($college) < 3) {

		return true;

	}

	else {return false;}

}





function check_names($name) {

	return ctype_alpha(str_replace(array(' ', "'", '-'), '', $name));

}



function check_gender($gender) {

	if ($gender == "Male" || $gender == "Female") {

		return true;

	} 

	else {return false;}

}



function check_days($days){

	if(ctype_digit($days)){

		if($days>1 && $days<5){

			return true;

		}

		else{

			return false;

		}

	}

	else{

		return false;

	}

}



function generate_activation_string($email){

	return sha1(mt_rand(10000,99999).time().$email);

}



$emailFormatFlag = check_email_address($email);

$phoneFlag = check_phone_number($phone);

$collegeFlag = college_check($college);

$nameFlag = check_names($name);

$snameFlag = check_names($surname);

$genderFlag = check_gender($gender);

$epdaysflag = check_days($epdays);



?>

<!DOCTYPE HTML>



<html>

	<head>

		<title>Malhar'15 - A Chronicle</title>

		<meta charset="utf-8" />

		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->

		<link rel="stylesheet" href="../css/main.css" />

		<link rel="stylesheet" href="../css/style.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->

		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->

		

		<!-- Scripts -->

			<script src="../js/jquery.min.js"></script>

			<script src="../js/jquery.dropotron.min.js"></script>

			<script src="../js/skel.min.js"></script>

			<script src="../js/init.js"></script>


			<link rel="stylesheet" href="../css/loadmain.css">
  <script src="../js/modernizr-2.6.2.min.js"></script>
  <script src="../js/main.js"></script>
<style>#home_icon{position:fixed;top:1vmin;left: 0;}#reg{z-index:1001;position:fixed;top:10%;right:0;border:2px dotted white;padding:1vmin;background-color:#666666;}
</style>
			

			<noscript><p>Please enable JavaScript in your browser for better use of the website.</p></noscript>

			</head>

	<body>
<div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

    </div>
    <div id="content">
	<a href="../index.php"><img src="../images/hicon.svg" height="130px";width="130px;" id="home_icon"></a></li>

						
		<article id="main">
			<section class="wrapper style2 container special-alt" id="scpanel">
							
									<header>
										<h2>Malhar Online Registrations</h2>
									</header>
<div class="row">
							<div class="12u">
   

		<?php

			if($emailFormatFlag && $phoneFlag && $genderFlag && $nameFlag && $snameFlag && $collegeFlag && $epdaysflag)

			{

				$host = "localhost";

				$user = "malharfe_admin";
				$pass = "malhar2015admin";

				$db = 'malharfe_15_epass';

				$table = 'epass';

				$connection = @mysqli_connect($host, $user, $pass, $db);

				if (!$connection) {

					die(mysqli_error());

				} else {

					//echo "<p>We got in the DB!!!</p>";

				}



				$genstring = generate_activation_string($email);

						$query1 = ("INSERT INTO $table 

						(`name`, `surname`, `email`, `number`, `college`, `gender`, `uuid`,`activation_string`, `epdays`)  

						VALUES 

						('$name', '$surname', '$email','$phone', '$college', '$gender', '$uid','$genstring', '$epdays')");

						$execute_query = mysqli_query($connection, $query1);

						$close_connection = mysqli_close($connection);

						echo '<h2>Your pass will be emailed to you shortly!</h2>';

						echo '<p>Please check your Junk/Spam folder if you do not see the mail in your inbox.</p><br>';
						echo '<p>Download the Malhar app <a href="../app" target="_blank">here</a>. </p>';

						include("sendmail.php");

					
				

				}

				else

			{

				$aw = 1;

				echo "<h2>Something went wrong. Please check your details.</h2>";

				if (!$emailFormatFlag)

				{

					echo "<p>The email address you entered is not valid</p>"; $aw=0;

				} 

				if(!$phoneFlag)

				{

					echo "<p>The phone number you entered is not valid. Please enter digits only.</p>"; $aw=0;

				}

				if(!$nameFlag or !$snameFlag)

				{

					echo "<p>Your name doesn't seem to consist of valid characters</p>"; $aw=0;

				}

				if(!$collegeFlag)

				{

					echo "<p>The college name you entered is not valid. Please write the full name of your college.</p>"; $aw=0;

				}

				if(!$genderFlag) 

				{

					echo "<p>You must select your gender.</p> "; $aw=0;

				}

				if(!$epdaysflag) 

				{

					echo "<p>Invalid day selection.</p> "; $aw=0;

				}

				else if($aw)

				{

					echo "<p>Something has gone terribly wrong.</p>";

				}

				else{

					die();

				}

			}		
		?>

</div></div>

								</section>
</article>

						
						
						

								<footer id="footer">										<ul>												<li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>						<li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>						<li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>						<li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>					</ul>				</footer>

		

		
</div>

</body>

</html>