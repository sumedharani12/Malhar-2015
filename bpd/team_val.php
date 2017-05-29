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
				$table = 'itl_reg';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
					//echo "<p>We got in the DB!!!</p>";
				}
				
				$teams = $_POST['no_'];
				$teams = mysql_real_escape_string($teams);

				$institution = $_POST['col'];
				$institution = mysql_real_escape_string($institution);

				$contact_person = $_POST['contact_person'];
				$contact_person = mysql_real_escape_string($contact_person);

				$phone = $_POST['phone'];
				$phone = mysql_real_escape_string($phone);

				$email = $_POST['email'];
				$email = mysql_real_escape_string($email);

				$t1name1 = $_POST['t1name1'];
				$t1name1 = mysql_real_escape_string($t1name1);

				$t1phone1 = $_POST['t1phone1'];
				$t1phone1 = mysql_real_escape_string($t1phone1);

				$t1name2 = $_POST['t1name2'];
				$t1name2 = mysql_real_escape_string($t1name2);

				$t1phone2 = $_POST['t1phone2'];
				$t1phone2 = mysql_real_escape_string($t1phone2);

				$accommodation1 = $_POST['accommodation1'];
				$accommodation1 = mysql_real_escape_string($accommodation1);


				$student1 = $_POST['student1'];
				$student1 = mysql_real_escape_string($student1);

				$t2name1 = $_POST['t2name1'];
				$t2name1 = mysql_real_escape_string($t2name1);

				$t2phone1 = $_POST['t2phone1'];
				$t2phone1 = mysql_real_escape_string($t2phone1);

				$t2name2 = $_POST['t2name2'];
				$t2name2 = mysql_real_escape_string($t2name2);

				$t2phone2 = $_POST['t2phone2'];
				$t2phone2 = mysql_real_escape_string($t2phone2);

				$accommodation2 = $_POST['accommodation2'];
				$accommodation2 = mysql_real_escape_string($accommodation2);


				$student2 = $_POST['student2'];
				$student2 = mysql_real_escape_string($student2);


				$t3name1 = $_POST['t3name1'];
				$t3name1 = mysql_real_escape_string($t3name1);

				$t3phone1 = $_POST['t3phone1'];
				$t3phone1 = mysql_real_escape_string($t3phone1);

				$t3name2 = $_POST['t3name2'];
				$t3name2 = mysql_real_escape_string($t3name2);

				$t3phone2 = $_POST['t3phone2'];
				$t3phone2 = mysql_real_escape_string($t3phone2);

				$accommodation3 = $_POST['accommodation3'];
				$accommodation3 = mysql_real_escape_string($accommodation3);


				$student3 = $_POST['student3'];
				$student3 = mysql_real_escape_string($student3);

				$adno = $_POST['adno'];
				$adno = mysql_real_escape_string($adno);

				$adj = $_POST['adj'];
				$adj = mysql_real_escape_string($adj);

				

				date_default_timezone_set("Asia/Calcutta");
				// echo date_default_timezone_get();
				
				
				$date = date("Y-m-d H:i:s");
				
echo "<p>We have received your application, we will get back to you. </p>";
echo '<p>Click <a href="index.php"> here </a> to go back to the main page </p>';


				

				$query1 = ("INSERT INTO `itl_reg`(`date`, `no_of_teams`, `institution`, `contact_person`, `phone`, `email`, `team1name1`, `team1no1`, `team1name2`, `team1no2`, `team1accomodation`, `student1`, `team2name1`, `team2no1`, `team2name2`, `team2no2`, `team2accomodation`, `student2`, `team3name1`, `team3no1`, `team3name2`, `team3no2`, `team3accomodation`, `student3`, `adno`, `adj`) VALUES ('$date','$teams', '$institution', '$contact_person', '$phone', '$email', '$t1name1', '$t1phone1', '$t1name2', '$t1phone2', '$accommodation1','$student1', '$t2name1', '$t2phone1', '$t2name2', '$t2phone2', '$accommodation2','$student2', '$t3name1', '$t3phone1', '$t3name2', '$t3phone2', '$accommodation3','$student3', '$adno', '$adj' )");
				
				if(mysql_query($query1, $connection)){
$to = "$email";
$subject = "Malhar 2015 - A Chronicle - The Malhar British Parliamentary Debate Registrations";
$txt = '
Hello,
This is to inform you that we have received your registration. Kindly check the facebook group for the allotments, which will be out in accordance with the timeline posted on the group.
';

$headers = "From: bpd@malharfest.org";

mail($to,$subject,$txt,$headers);

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
</html>
*/