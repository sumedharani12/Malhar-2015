<?php 
	include 'functions.php';
	verify();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Malhar Registrations</title>
	<script src="../../js/jquery.min.js"></script>
	 	<script src="../../js/skel.min.js"></script><!--SkelJS Framework-->
        <script src="init.js"></script><!--Calling all plugins using SkelJS framework-->
        <script type="text/javascript">
        $(window).load(function() { 
            $("#loader").fadeOut("slow"); 
        });
        </script>
        <!--Preloader-->
            <link rel="icon" type="image/ico" href="../../images/favicon.ico">
        
        <noscript>

            <link rel="stylesheet" href="../../css/skel.css" />
            <link rel="stylesheet" href="../../css/style.css" />

        </noscript>
        
        <style type="text/css">
        .container
        {
        	width: 100% !important;
			text-align:left !important;
			white-space:pre-wrap !important;
        }
        body
        {
        	background-color: rgba(0,0,0,0.721);
        }
        table, td, th, tr
        {
        	border: 1px dotted #aaa;
        	font-size: 0.9em;
        }
		hr
		{
		border:1px dotted #aaa !important;
		}
		a 
		{
			border-bottom: none !important;
		}
        </style>
	</head>

	<body class="loading">
		<div id="loader"></div>
		<article id="comps_application">
			<section class="wrapper container special">
			<header class="major">
		<a href="../index.php"> <h2 title="Click here to go to the main page">Malhar Registrations</h2> </a>
	</header>
	<div class="row">
		<br>
		<a href="logout.php" style="border-bottom:none !important;"><div class="button special">Logout</div></a><br>
		<a href="download.php" style="border-bottom:none !important;"><div class="button special">Download CSV</div></a>
					<?php
						                     
                             
				$host = "localhost";
				$user = "malharfe_admin";
				$pass = "pwdbitch{}";
				$db = 'malharfe_online__reg';
				$conn_error = '<br>Something isn\'t right here!';
				
				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
				}

							
							//select prnc_p.srno, prnc.ID, prnc.number, prnc.event, prnc_p.nprnce, prnc_p.age, prnc_p.sex, prnc_p.email, prnc_p.phone, prnc_p.course, prnc_p.college, prnc_i.image from prnc_p, prnc, prnc_i where prnc.ID = prnc_p.GroupID and prnc_p.GroupID = prnc_i.GID 
						$query = "Select count(email) as total from ep";
						$query_run = mysql_query($query);
						if ($query_run)
						{
							echo "<table>";
							echo "<tr>";
							echo "<th>No. of registrations</th>";
							echo "</tr>";

							while($query_row = mysql_fetch_assoc($query_run))
							{
                   
$total = $query_row['total'];

					
                                
								echo "<tr>";
								echo "<td>" . $total . "</td>" ;
								echo "</tr>";
								

								}
								echo "</table>";
						}

						else 
						{
							echo mysql_error();
						}

						mysql_close($connection)
					?>
				</div>
			</section>
			</article>


	</body>
</html>
