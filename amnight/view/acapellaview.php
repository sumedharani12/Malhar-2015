<!DOCTYPE html>
<html>
	<head>
		<title> AMNIGHT Registrations</title>




		<meta charset="utf-8" />



		<link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">



		<meta name="viewport" content="width=device-width, initial-scale=1" />



		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->



		<link rel="stylesheet" href="../../css/main.css" />



		<link rel="stylesheet" href="../../css/style.css" />



		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->



		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->



		



		<!-- Scripts -->



			<script src="../../js/jquery.min.js"></script>



			<script src="../../js/jquery.dropotron.min.js"></script>



			<script src="../../js/skel.min.js"></script>



			<script src="../../js/init.js"></script>



			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->



			<script src="../../js/main.js"></script>

<style>#home_icon{position:fixed;top:1vmin;left: :0;}
		hr
		{
		border:1px dotted #aaa !important;
		}</style>

			



			<noscript><p>Please enable JavaScript in your browser for better use of the website.</p></noscript>



			</head>
	



	<body>



	<a href="../view.html"><img src="../../images/hicon.svg" height="130px";width="130px;" id="home_icon"></a></li>



						

		<article id="main">

			<section class="wrapper style2 container special-alt" id="scpanel">

			<header>
		AMNIGHT Registrations
	</header>

				<?php
				$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_amnight';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
				}
					
						$query = "SELECT * FROM `amnightreg` WHERE `Event`='ACapella' ";
						$query_run = mysql_query($query);

						if ($query_run)
						{
							while($query_row = mysql_fetch_assoc($query_run))
							{
                            
				
$date = $query_row['Date'];
$no = $query_row['No'];
$p1 = $query_row['Participant1'];
$p2 = $query_row['Participant2'];
$p3 = $query_row['Participant3'];
$p4 = $query_row['Participant4'];
$p5 = $query_row['Participant5'];
$p6 = $query_row['Participant6'];
$p7 = $query_row['Participant7'];
$p8 = $query_row['Participant8'];
$p9 = $query_row['Participant9'];
$p10 = $query_row['Participant10'];
$p11 = $query_row['Participant11'];
$p12 = $query_row['Participant12'];


                                
								echo "A Capella:<br><br>";
								echo "<strong>Date: </strong>" . $date . "<br><br>" ;
								echo "<strong>No: </strong>" . $no . "<br><br>" ;
								echo "<strong>Participant 1 Details: </strong>" . $p1 . "<br><br>" ;
								echo "<strong>Participant 2 Details: </strong>" . $p2 . "<br><br>" ;
								echo "<strong>Participant 3 Details: </strong>" . $p3 . "<br><br>" ;
								echo "<strong>Participant 4 Details: </strong>" . $p4 . "<br><br>" ;
								echo "<strong>Participant 5 Details: </strong>" . $p5 . "<br><br>" ;
								echo "<strong>Participant 6 Details: </strong>" . $p6 . "<br><br>" ;
								echo "<strong>Participant 7 Details: </strong>" . $p7 . "<br><br>" ;
								echo "<strong>Participant 8 Details: </strong>" . $p8 . "<br><br>" ;
								echo "<strong>Participant 9 Details: </strong>" . $p9 . "<br><br>" ;
								echo "<strong>Participant 10 Details: </strong>" . $p10 . "<br><br>" ;
								echo "<strong>Participant 11 Details: </strong>" . $p11 . "<br><br>" ;
								echo "<strong>Participant 12 Details: </strong>" . $p12 . "<br><br>" ;
								echo "<hr>";
								}
								}

						else 
						{
							echo mysql_error();
						}

						mysql_close($connection)
					?>
			</section>
			</article>
	</body>
</html>