<!DOCTYPE HTML>

<html>

  <head>

   <title>Malhar'15 - A Chronicle</title>

    <meta charset="utf-8" />

    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

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

    <style>

#home_icon{position:fixed;top:0%;}

h4{color:#FFCC00;}


 hr
    {
    border:1px dotted #aaa !important;
    }


a{color: #FFCC00;}

</style>

<link rel="stylesheet" href="../css/loadmain.css">

  <script src="../js/modernizr-2.6.2.min.js"></script>

  <script src="../js/main.js"></script>

    <noscript>

      <p>Please enable JavaScript in your browser for better use of the website.</p>

    </noscript>

  </head>

  <body>

  <div id="loader-wrapper">

      <div id="loader"></div>



      <div class="loader-section section-left"></div>

            <div class="loader-section section-right"></div>



    </div>

    <div id="content">

<div id="home_icon">   <a href="../index.php">

      <img src="../images/hicon.svg" height="130px;">

    </a>

	</div>

	







  <article id="main">

      <section class="wrapper style2 container special-alt" id="scpanel">

        <div class="row">

          <div class="12u">

          

            <h2>Results</h2>

          

          <br>


				<?php
				$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_results';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
				}
					
						$query = "SELECT * FROM `results` order by `Date` desc ";
						$query_run = mysql_query($query);

						if ($query_run)
						{
							while($query_row = mysql_fetch_assoc($query_run))
							{
                            
				
$event = $query_row['Event'];
$f = $query_row['First'];
$s = $query_row['Second'];
$t = $query_row['Third'];


                                
								echo "<h4>" . $event . "</h4><br>" ;
								echo "<strong>1<sup>st</sup> Place- </strong>" . $f . "<br><br>" ;
								echo "<strong>2<sup>nd</sup> Place- </strong>" . $s . "<br><br>" ;
								echo "<strong>3<sup>rd</sup> Place- </strong>" . $t . "<br><br>" ;
								
								echo "<hr>";
								}
								}

						else 
						{
							echo mysql_error();
						}

						mysql_close($connection)
					?>
         

			</div>

        </div>

      </section>

    </article>

    <footer id="footer">

      <ul>

        <li>

          <a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg">

            <span class="label">Facebook</span>

          </a>

        </li>

        <li>

          <a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play">

            <span class="label">Youtube</span>

          </a>

        </li>

        <li>

          <a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter">

            <span class="label">Twitter</span>

          </a>

        </li>

        <li>

          <a href="%20https://instagram.com/malharfest" class="icon circle fa-instagram">

            <span class="label">Twitter</span>

          </a>

        </li>

      </ul>

    </footer>

    </div>

  </body>

</html>
