<?
header("Location: shut.php");  
/*
<!DOCTYPE html>
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
            <script src="script.js"></script>



            <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->




            <link rel="stylesheet" href="../css/loadmain.css">

  <script src="../js/modernizr-2.6.2.min.js"></script>

  <script src="../js/main.js"></script>

<style>#home_icon{position:fixed;top:1vmin;left: 0;}#reg{z-index:1001;position:fixed;top:10%;right:0;border:2px dotted white;padding:1vmin;background-color:#666666;}

#inde_adj, #cr_tm, #tmr{

		display: none;

	}

    #hidden-forms

    {

        margin: 0 auto;

        text-align: justify !important;

    }
    .re{
    	border: 2px dotted #fff;
  padding: 25px;
  width: 31% !important;
  margin: 10.5px;
  min-height: 150px;
  color: #fff !important;
text-align: center;
    }

input:disabled{background-color: #40403C;}
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
    <a href="../index.html"><img src="../images/hicon.png" height="130px";width="130px;" id="home_icon"></a></li>
		 <article id="main">

            <section class="wrapper style2 container special-alt" id="scpanel">

			     <header>

                                        <a href="index.php"> <h2 title="Click here to go to the main page">Malhar Parliamentary Debate Registration</h2></a>

                                    </header>


				<?php
				$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_bpd';
				$table = 'ct_reg';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
					//echo "<p>We got in the DB!!!</p>";
				}
			

				$name1 = $_POST['name1'];
				$name1 = mysql_real_escape_string($name1);

				$phone1 = $_POST['phone1'];
				$phone1 = mysql_real_escape_string($phone1);

				$email1 = $_POST['email1'];
				$email1 = mysql_real_escape_string($email1);


				$institution1 = $_POST['col1'];
				$institution1 = mysql_real_escape_string($institution1);

				$name2 = $_POST['name2'];
				$name2 = mysql_real_escape_string($name2);

				$phone2 = $_POST['phone2'];
				$phone2 = mysql_real_escape_string($phone2);

				$email2 = $_POST['email2'];
				$email2 = mysql_real_escape_string($email2);


				$institution2 = $_POST['col2'];
				$institution2 = mysql_real_escape_string($institution2);

				$accommodation = $_POST['accommodationc'];
				$accommodation= mysql_real_escape_string($accommodation);

				$student = $_POST['studentc'];
				$student = mysql_real_escape_string($student);

				

				date_default_timezone_set("Asia/Calcutta");
				// echo date_default_timezone_get();

				$date = date("Y-m-d H:i:s");
							
echo "<p>We have received your application, we will get back to you. </p>";
echo '<p>Click <a href="index.php"> here </a> to go back to the main page </p>';



				$query1 = ("INSERT INTO `ct_reg`( `date`, `name1`, `phone1`, `email1`, `institution1`, `name2`, `phone2`, `email2`, `institution2`, `accommodation`, `student`)  
								 VALUES ('$date', '$name1', '$phone1', '$email1',  '$institution1', '$name2', '$phone2', '$email2',  '$institution2','$accommodation','$student')");
				
				if(mysql_query($query1, $connection)){
$to = "$email1";
$to1= "$email2";
$subject = "Malhar 2015 - A Chronicle - The Malhar British Parliamentary Debate Registrations";
$txt = '
Hello,
This is to inform you that we have received your registration. Kindly check the facebook group for the allotments, which will be out in accordance with the timeline posted on the group.
';

$headers = "From: bpd@malharfest.org";

mail($to,$subject,$txt,$headers);
mail($to1,$subject,$txt,$headers);

header("Location: success.php");
exit();
				}
				else
				{
					header("Location: fail.php");
exit();
				}

				mysql_close($connection);

				?>
		</section>
			</article>

	</body>
</html>*/
