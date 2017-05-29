<!DOCTYPE html>
<html>
	<head>
		<title> Social Cause Registrations</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
        <!-- Scripts -->
			<script src="../js/init.js"></script>
<script src="../js/scinc.js"></script>
			<style>
header > h2,h3{
text-align:center;
font-family:Bizon;}
html{ 
		background:black;
	}
	#websites-form, #creatives-form, #pnd-form, #hardware-form
	{
		display: none;
	}
    #hidden-forms
    {
        margin: 0 auto;
        text-align: justify !important;
    }
    strong
    {
    color:#ffcc33;
    }<html>



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



			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->



			<script src="../js/main.js"></script>

<style>#home_icon{position:fixed;top:1vmin;left: :0;}{
		border:1px dotted #aaa !important;
		}</style>

			



			<noscript><p>Please enable JavaScript in your browser for better use of the website.</p></noscript>



			</head>



	<body>



	<a href="../index.php"><img src="../images/hicon.png" height="130px";width="130px;" id="home_icon"></a></li>



						

		<article id="main">

			<section class="wrapper style2 container special-alt" id="scpanel">

			<header>
		Social Cause Registrations
	</header>

				<?php
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
				}
					
						$query = "select * from Social_Cause_reg ";
						$query_run = mysql_query($query);

						if ($query_run)
						{
							while($query_row = mysql_fetch_assoc($query_run))
							{
                            
$id  = $query_row['UID'];
$name = $query_row['Name'];
$email = $query_row['Email'];
$p1 = $query_row['P1'];
$p2 = $query_row['P2'];
$p3 = $query_row['P3'];
$p4 = $query_row['P4'];
$pref1 = $query_row['Pref1'];
$pref2 = $query_row['Pref2'];
$pref3 = $query_row['Pref3'];
$pref4 = $query_row['Pref4'];


                                
								
								echo "<br><strong>College ID: </strong>" . $id . "<br>" ;
echo "<strong>College Name: </strong>" . $name . "<br><br>" ;
								echo "<strong>Email: </strong>" .$email . "<br><br>" ;
								echo "<strong>Participant 1: </strong>" .$p1 . "<br><br>" ;
								echo "<strong>Participant 2: </strong>".$p2 . "<br><br>";
								echo "<strong>Participant 3: </strong>".$p3  . "<br><br>";
								echo "<strong>Participant 4:</strong>".$p4 . "<br><br>";
								echo "<strong>Preference 1: </strong>".$pref1  . "<br><br>";
								echo "<strong>Preference 2: </strong>".$pref2  . "<br><br>";
								echo "<strong>Preference 3: </strong>".$pref3  . "<br><br>";
								echo "<strong>Preference 4: </strong>".$pref4  . "<br><br>";
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