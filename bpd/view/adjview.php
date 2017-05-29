<!DOCTYPE html>
<html>
	<head>
		<title> BPD Registrations</title>




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

<style>#home_icon{position:fixed;top:1vmin;left: :0;}{
		border:1px dotted #aaa !important;
		}</style>

			



			<noscript><p>Please enable JavaScript in your browser for better use of the website.</p></noscript>



			</head>
	



	<body>



	<a href="../view.html"><img src="../../images/hicon.svg" height="130px";width="130px;" id="home_icon"></a></li>



						

		<article id="main">

			<section class="wrapper style2 container special-alt" id="scpanel">

			<header>
		BPD Registrations
	</header>

				<?php
				$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_bpd';
				$table = 'adj_reg';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
				}
					
						$query = "select * from adj_reg ";
						$query_run = mysql_query($query);

						if ($query_run)
						{
							while($query_row = mysql_fetch_assoc($query_run))
							{
                            
				$no  = $query_row['srno'];
$date = $query_row['date'];
$name = $query_row['name'];
$phone = $query_row['phone'];
$email = $query_row['email'];
$college = $query_row['institution'];
$stud = $query_row['student'];
$accom = $query_row['accommodation'];


                                
								echo "Independent Adjudicator:";
								echo "<br><strong>No.: </strong>" . $no . "<br>" ;
								echo "<strong>Date: </strong>" . $date . "<br><br>" ;
								echo "<strong>Name: </strong>" . $name . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $phone . "<br><br>" ;
								echo "<strong>Email: </strong>" .$email . "<br><br>" ;
								echo "<strong>College Name: </strong>" .$college . "<br><br>" ;
								echo "<strong>Ungraduate Student ? : </strong>".$stud . "<br><br>";
								echo "<strong>Accommodation Needed ?: </strong>".$accom  . "<br><br>";
								
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