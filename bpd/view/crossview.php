<!DOCTYPE html>
<html>
	<head>
		<title> BPD Registrations</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 	<link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
        <!-- Scripts -->
			<script src="../../js/init.js"></script>
			<style>
header > h2,h3{
text-align:center;
font-family:Bizon;}
html{ 
		background:black;
	}
	
    strong
    {
    color:#ffcc33;
    }<html>



	<head>



		<title>Malhar'15 - A Chronicle</title>



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
				$table = 'ct_reg';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
				}
					
						$query = "select * from ct_reg ";
						$query_run = mysql_query($query);

						if ($query_run)
						{
							while($query_row = mysql_fetch_assoc($query_run))
							{
                            
				$no  = $query_row['srno'];
$date = $query_row['date'];
$n1 = $query_row['name1'];
$p1 = $query_row['phone1'];
$e1 = $query_row['email1'];
$c1 = $query_row['institution1'];
$n2 = $query_row['name2'];
$p2 = $query_row['phone2'];
$e2 = $query_row['email2'];
$c2 = $query_row['institution2'];
$a = $query_row['accommodation'];
$s = $query_row['student'];


                                
								echo "Cross Team Registration:";
								echo "<br><strong>No.: </strong>" . $no . "<br>" ;
								echo "<strong>Date: </strong>" . $date . "<br><br>" ;
								echo"<strong>Participant 1 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $n1 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $p1 . "<br><br>" ;
								echo "<strong>Email.: </strong>" . $e1 . "<br><br>" ;
								echo "<strong>College Name: </strong>" . $c1 . "<br><br>" ;
								echo"<strong>Participant 2 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $n2 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $p2 . "<br><br>" ;
								echo "<strong>Email.: </strong>" . $e2 . "<br><br>" ;
								echo "<strong>College Name: </strong>" . $c2 . "<br><br>" ;
								echo "<strong>Accommodation Needed ?: </strong>".$a  . "<br><br>";
								echo "<strong>Ungraduate Student ? : </strong>".$s . "<br><br>";
								
								
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