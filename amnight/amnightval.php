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
    <a href="../index.html"><img src="../images/hicon.svg" height="130px";width="130px;" id="home_icon"></a></li>
		 <article id="main">

            <section class="wrapper style2 container special-alt" id="scpanel">

			     <header>

                                        <a href="index.php"> <h2 title="Click here to go to the main page">Malhar Contingent Registrations</h2></a>

                                    </header>

<?php



session_start();
$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_amnight';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
					//echo "<p>We got in the DB!!!</p>";
				}
$event=$_POST['event'];
$no=$_POST['no'];
$p1=implode(',', $_POST['p1']);
$p2=implode(',', $_POST['p2']);
$p3=implode(',', $_POST['p3']);
$p4=implode(',', $_POST['p4']);
$p5=implode(',', $_POST['p5']);
$p6=implode(',', $_POST['p6']);
$p7=implode(',', $_POST['p7']);
$p8=implode(',', $_POST['p8']);
$p9=implode(',', $_POST['p9']);
$p10=implode(',', $_POST['p10']);
$p11=implode(',', $_POST['p11']);
$p12=implode(',', $_POST['p12']);


 $date1 = date("Y-m-d H:i:s");
              


        $query1 = ("INSERT INTO `amnightreg`(`Date`, `Event`, `No`, `Participant1`, `Participant2`, `Participant3`, `Participant4`, `Participant5`, `Participant6`, `Participant7`, `Participant8`, `Participant9`, `Participant10`, `Participant11`, `Participant12`) VALUES ('$date1','$event','$no','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12')");
        if(mysql_query($query1, $connection)){   

echo "Congratulations. You have registered successfully.<br>

                Cheers.";

        }
        else
        {
         echo 'There was some error. <a href="register.php">Try Again</a>';
        }



        mysql_close($connection);


        ?>
    </section>
      </article>
</div>
  </body>
</html>*/?>