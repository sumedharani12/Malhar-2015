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
	<a href="../index.php"><img src="../images/hicon.png" height="130px";width="130px;" id="home_icon"></a></li>

						
		<article id="main">
			<section class="wrapper style2 container special-alt" id="scpanel">
							<div class="row">
							<div class="12u">
									<header>
  <h2>E-Pass Registrations</h2>
  </header>
				<?php
				error_reporting(E_ALL);
ini_set('display_errors', '1');
				$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_epass';
				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
				}

				$query = "SELECT SUM( t.num ) as so FROM (SELECT COUNT( * ) AS num
FROM malharfe_15_epass.epass where epdays=2 UNION ALL SELECT COUNT( * ) AS num FROM malharfe_15_online_passes.epass where epdays=2 )t";

$query2 = "SELECT SUM( q.num2 ) as so2 FROM (SELECT COUNT( * ) AS num2
FROM malharfe_15_epass.epass where epdays=3 UNION ALL SELECT COUNT( * ) AS num2 FROM malharfe_15_online_passes.epass where epdays=3 )q";

$query3 = "SELECT SUM( p.num3 ) as so3 FROM (SELECT COUNT( * ) AS num3
FROM malharfe_15_epass.epass where epdays=4 UNION ALL SELECT COUNT( * ) AS num3 FROM malharfe_15_online_passes.epass where epdays=4 )p";


						$query_run = mysql_query($query);
						if ($query_run)
						{
							while($query_row = mysql_fetch_assoc($query_run))
							{
                            
				$no  = $query_row['so'];
				echo "<br><strong> Only Day 2 No.: </strong>" . $no . "<br>" ;
			}
		}
				else 
						{
							echo mysql_error();
						}

						
						$query_run2 = mysql_query($query2);
						if ($query_run2)
						{
							while($query_row = mysql_fetch_assoc($query_run2))
							{
                            
				$no2  = $query_row['so2'];
				echo "<br><strong> Only Day 3 No.: </strong>" . $no2 . "<br>" ;
			}
		}
				else 
						{
							echo mysql_error();
						}

						
						$query_run3 = mysql_query($query3);
						if ($query_run3)
						{
							while($query_row = mysql_fetch_assoc($query_run3))
							{
                            
				$no3  = $query_row['so3'];
				echo "<br><strong> Both Days No.: </strong>" . $no3 . "<br>" ;
			}
		}
				else 
						{
							echo mysql_error();
						}

						mysql_close($connection);
					?>	</div></div>

								</section>
</article>

						
						
						

								<footer id="footer">										<ul>												<li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>						<li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>						<li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>						<li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>					</ul>				</footer>

		

		
</div>

</body>

</html>