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



	<a href="view.html"><img src="../../images/hicon.svg" height="130px";width="130px;" id="home_icon"></a></li>



						

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
				$table = 'itl_reg';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
				}
					
						$query = "select * from itl_reg ";
						$query_run = mysql_query($query);

						if ($query_run)
						{
							while($query_row = mysql_fetch_assoc($query_run))
							{
                            
				$no  = $query_row['srno'];
$date = $query_row['date'];
$no = $query_row['no_of_teams'];
$college = $query_row['institution'];
$name = $query_row['contact_person'];
$phone = $query_row['phone'];
$email = $query_row['email'];
$t1n1 = $query_row['team1name1'];
$t1p1 = $query_row['team1no1'];
$t1n2 = $query_row['team1name2'];
$t1p2 = $query_row['team1no2'];
$t1a1 = $query_row['team1accomodation'];
$t1s1 = $query_row['student1'];
$t2n1 = $query_row['team2name1'];
$t2p1 = $query_row['team2no1'];
$t2n2 = $query_row['team2name2'];
$t2p2 = $query_row['team2no2'];
$t2a1 = $query_row['team2accomodation'];
$t2s1 = $query_row['student2'];
$t3n1 = $query_row['team3name1'];
$t3p1 = $query_row['team3no1'];
$t3n2 = $query_row['team3name2'];
$t3p2 = $query_row['team3no2'];
$t3a1 = $query_row['team3accomodation'];
$t3s1 = $query_row['student3'];
$adno = $query_row['adno'];
$adj = $query_row['adj'];



                                
								echo "Team Registration:";
								echo "<br><strong>No.: </strong>" . $no . "<br>" ;
								echo "<strong>Date: </strong>" . $date . "<br><br>" ;
								echo "<strong>No. of teams: </strong>" . $no . "<br><br>" ;
								echo "<strong>College Name: </strong>" .$college . "<br><br>" ;
								echo"<strong>Contact Person</strong> <br/> ";
								echo "<strong>Name: </strong>" . $name . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $phone . "<br><br>" ;
								echo "<strong>Email: </strong>" .$email . "<br><br>" ;
								echo"<strong>Team 1</strong> <br/> ";
								echo"<strong>Participant 1 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $t1n1 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $t1p1 . "<br><br>" ;
								echo"<strong>Participant 2 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $t1n2 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $t1p2 . "<br><br>" ;
								echo "<strong>Accommodation Needed ?: </strong>".$t1a1  . "<br><br>";
								echo "<strong>Ungraduate Student ? : </strong>".$t1s1 . "<br><br>";
								echo"<strong>Team 2</strong> <br/> ";
								echo"<strong>Participant 1 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $t2n1 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $t2p1 . "<br><br>" ;
								echo"<strong>Participant 2 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $t2n2 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $t2p2 . "<br><br>" ;
								echo "<strong>Accommodation Needed ?: </strong>".$t2a1  . "<br><br>";
								echo "<strong>Ungraduate Student ? : </strong>".$t2s1 . "<br><br>";
								echo"<strong>Team 3</strong> <br/> ";
								echo"<strong>Participant 1 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $t3n1 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $t3p1 . "<br><br>" ;
								echo"<strong>Participant 2 </strong> <br/> ";
								echo "<strong>Name: </strong>" . $t3n2 . "<br><br>" ;
								echo "<strong>Phone No.: </strong>" . $t3p2 . "<br><br>" ;
								echo "<strong>Accommodation Needed ?: </strong>".$t3a1  . "<br><br>";
								echo "<strong>Ungraduate Student ? : </strong>".$t3s1 . "<br><br>";
								
								echo "<strong>Adjudicator No: </strong>" . $adno . "<br><br>" ;
								echo "<strong>Adjudicator Details: </strong>" . $adj . "<br><br>" ;
								
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