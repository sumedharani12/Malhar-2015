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
    <a href="../index.php"><img src="../images/hicon.png" height="130px";width="130px;" id="home_icon"></a></li>
		 <article id="main">

            <section class="wrapper style2 container special-alt" id="scpanel">

			     <header>

                                        <a href="index.php"> <h2 title="Click here to go to the main page">Malhar PRNC Registrations</h2></a>

                                    </header>

<?php
$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_prnc_reg';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
					//echo "<p>We got in the DB!!!</p>";
				}


$event=$_POST['event'];
$category=$_POST['category'];
	
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
$p13=implode(',', $_POST['p13']);
$p14=implode(',', $_POST['p14']);
$p15=implode(',', $_POST['p15']);
$s1=implode(',', $_POST['s1']);
$s2=implode(',', $_POST['s2']);
$ca1=implode(',', $_POST['c1']);
$ca2=implode(',', $_POST['c2']);
$ca3=implode(',', $_POST['c3']);


				date_default_timezone_set("Asia/Kolkata");
				$date1 = date("Y-m-d H:i:s");

$thespionagescript=$_POST['thespionagescript'];
$thespionagescript = mysql_real_escape_string($thespionagescript);
$thespionageprops=$_POST['thespionageprops'];
$thespionageprops = mysql_real_escape_string($thespionageprops);
$thespionageaudio=$_POST['thespionageaudio'];
$thespionageaudio = mysql_real_escape_string($thespionageaudio);

$leelasongs=$_POST['leelasongs'];
$leelasongs = mysql_real_escape_string($leelasongs);

$theatrefinalscript=$_POST['theatrefinalscript'];
$theatrefinalscript = mysql_real_escape_string($theatrefinalscript);
$theatrepropselims=$_POST['theatrepropselims'];
$theatrepropselims = mysql_real_escape_string($theatrepropselims);
$theatrepropsfinals=$_POST['theatrepropsfinals'];
$theatrepropsfinals = mysql_real_escape_string($theatrepropsfinals);
$theatrecostumeselims=$_POST['theatrecostumeselims'];
$theatrecostumeselims = mysql_real_escape_string($theatrecostumeselims);
$theatrecostumesfinals=$_POST['theatrecostumesfinals'];
$theatrecostumesfinals = mysql_real_escape_string($theatrecostumesfinals);
$theatrepoem=$_POST['theatrepoem'];
$theatrepoem = mysql_real_escape_string($theatrepoem);
$classicalinstruments=$_POST['classicalinstruments'];
$classicalinstruments = mysql_real_escape_string($classicalinstruments);
$folkdanceform=$_POST['folkdanceform'];
$folkdanceform = mysql_real_escape_string($folkdanceform);
$folkdanceregion=$_POST['folkdanceregion'];
$folkdanceregion = mysql_real_escape_string($folkdanceregion);
$folkdancesong=$_POST['folkdancesong'];
$folkdancesong = mysql_real_escape_string($folkdancesong);
$folkdancepropselims=$_POST['folkdancepropselims'];
$folkdancepropselims = mysql_real_escape_string($folkdancepropselims);
$folkdancepropsfinals=$_POST['folkdancepropsfinals'];
$folkdancepropsfinals = mysql_real_escape_string($folkdancepropsfinals);
$folkdancecostumeelims=$_POST['folkdancecostumeelims'];
$folkdancecostumeelims = mysql_real_escape_string($folkdancecostumeelims);
$folkdancecostumefinals=$_POST['folkdancecostumefinals'];
$folkdancecostumefinals = mysql_real_escape_string($folkdancecostumefinals);
$folkdancesynopsis=$_POST['folkdancesynopsis'];
$folkdancesynopsis = mysql_real_escape_string($folkdancesynopsis);
$gaatainstruments=$_POST['gaatainstruments'];
$gaatainstruments = mysql_real_escape_string($gaatainstruments);
$gaatasongs=$_POST['gaatasongs'];
$gaatasongs = mysql_real_escape_string($gaatasongs);
$hbandinstruments=$_POST['hbandinstruments'];
$hbandinstruments = mysql_real_escape_string($hbandinstruments);
$hbandsongs=$_POST['hbandsongs'];
$hbandsongs = mysql_real_escape_string($hbandsongs);
$hbandinstrumental=$_POST['hbandinstrumental'];
$hbandinstrumental = mysql_real_escape_string($hbandinstrumental);

$musicalprops=$_POST['musicalprops'];
$musicalprops = mysql_real_escape_string($musicalprops);
$musicalartists=$_POST['musicalartists'];
$musicalartists = mysql_real_escape_string($musicalartists);
$musicalsongs=$_POST['musicalsongs'];
$musicalsongs = mysql_real_escape_string($musicalsongs);
$musicallogs=$_POST['musicallogs'];
$musicallogs = mysql_real_escape_string($musicallogs);
$musicalcostumes=$_POST['musicalcostumes'];
$musicalcostumes = mysql_real_escape_string($musicalcostumes);
$contemporaryconflict=$_POST['contemporaryconflict'];
$contemporaryconflict = mysql_real_escape_string($contemporaryconflict);
$contemporarysong=$_POST['contemporarysong'];
$contemporarysong = mysql_real_escape_string($contemporarysong);
$contemporaryprops=$_POST['contemporaryprops'];
$contemporaryprops = mysql_real_escape_string($contemporaryprops);
$contemporarycostumes=$_POST['contemporarycostumes'];
$contemporarycostumes = mysql_real_escape_string($contemporarycostumes);
$uvsongs=$_POST['uvsongs'];
$uvsongs = mysql_real_escape_string($uvsongs);
$uvprops=$_POST['uvprops'];
$uvprops = mysql_real_escape_string($uvprops);
$uvlogs=$_POST['uvlogs'];
$uvlogs = mysql_real_escape_string($uvlogs);
$uvcostumes=$_POST['uvcostumes'];
$uvcostumes = mysql_real_escape_string($uvcostumes);
$djsongs=$_POST['djsongs'];
$djsongs = mysql_real_escape_string($djsongs);
$duetsongs=$_POST['duetsongs'];
$duetsongs = mysql_real_escape_string($duetsongs);
$duetlogs=$_POST['duetlogs'];
$duetlogs = mysql_real_escape_string($duetlogs);
$duetinstruments=$_POST['duetinstruments'];
$duetinstruments = mysql_real_escape_string($duetinstruments);
$ebandsongs=$_POST['ebandsongs'];
$ebandsongs = mysql_real_escape_string($ebandsongs);
$ebandoriginal=$_POST['ebandoriginal'];
$ebandoriginal = mysql_real_escape_string($ebandoriginal);
$ebandlogs=$_POST['ebandlogs'];
$ebandlogs = mysql_real_escape_string($ebandlogs);
$ebandinstruments=$_POST['ebandinstruments'];
$ebandinstruments = mysql_real_escape_string($ebandinstruments);

$capellasongs=$_POST['capellasongs'];
$capellasongs = mysql_real_escape_string($capellasongs);
$fusiondanceform=$_POST['fusiondanceform'];
$fusiondanceform = mysql_real_escape_string($fusiondanceform);
$fusionsongs=$_POST['fusionsongs'];
$fusionsongs = mysql_real_escape_string($fusionsongs);
$fusioncostumes=$_POST['fusioncostumes'];
$fusioncostumes = mysql_real_escape_string($fusioncostumes);
$streetscript=$_POST['streetscript'];
$streetscript = mysql_real_escape_string($streetscript);
$streetinstruments=$_POST['streetinstruments'];
$streetinstruments = mysql_real_escape_string($streetinstruments);
$streetcostumes=$_POST['streetcostumes'];
$streetcostumes = mysql_real_escape_string($streetcostumes);









$query1 = ("INSERT INTO `prnc`(`date`, `events`, `category`, `participant1`, `participant2`, `participant3`, `participant4`, `participant5`, `participant6`, `participant7`, `participant8`, `participant9`, `participant10`, `participant11`, `participant12`, `participant13`, `participant14`, `participant15`,`Subtitute1orModel1orArtist1`, `Subtitute2orModel2orArtist2`, `ca1`, `ca2`, `ca3`, `thespionagescript`, `thespionageprops`, `thespionageaudio`, `acapellasongs`, `fusiondanceform`, `fusionsongs`, `fusioncostumes`, `streetscript`, `streetinstruments`, `streetcostumes`, `leelasongs`, `theatrefinalscript`, `theatrepropselims`, `theatrepropsfinals`, `theatrecostumeselims`, `theatrecostumesfinals`, `theatrepoem`, `classicalinstruments`, `folkdanceform`, `folkdanceregion`, `folkdancesong`, `folkdancepropselims`, `folkdancepropsfinals`, `folkdancecostumeelims`, `folkdancecostumefinals`, `folkdancesynopsis`, `gaatainstruments`, `gaatasongs`, `hbandinstruments`, `hbandsongs`, `hbandinstrumental`, `musicalprops`, `musicalartists`, `musicalsongs`, `musicallogs`, `musicalcostumes`, `contemporaryconflict`, `conteporarysong`, `contemporaryprops`, `contemporarycostumes`, `uvsongs`, `uvprops`, `uvlogs`, `uvcostumes`, `djsongs`, `duetsongs`, `duetlogs`, `duetinstruments`, `ebandsongs`, `ebandoriginal`, `ebandlogs`, `ebandinstruments`) VALUES ('$date1','$event','$category','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13','$p14','$p15','$s1','$s2','$ca1','$ca2','$ca3','$thespionagescript','$thespionageprops','$thespionageaudio','$capellasongs','$fusiondanceform','$fusionsongs','$fusioncostumes','$streetscript','$streetinstruments','$streetcostumes','$leelasongs','$theatrefinalscript','$theatrepropselims','$theatrepropsfinals','$theatrecostumeselims','$theatrecostumesfinals','$theatrepoem','$classicalinstruments','$folkdanceform','$folkdanceregion','$folkdancesong','$folkdancepropselims','$folkdancepropsfinals','$folkdancecostumeelims','$folkdancecostumefinals','$folkdancesynopsis','$gaatainstruments','$gaatasongs','$hbandinstruments','$hbandsongs','$hbandinstrumental','$musicalprops','$musicalartists','$musicalsongs','$musicallogs','$musicalcostumes','$contemporaryconflict','$contemporarysong','$contemporaryprops','$contemporarycostumes','$uvsongs','$uvprops','$uvlogs','$uvcostumes','$djsongs','$duetsongs','$duetlogs','$duetinstruments','$ebandsongs','$ebandoriginal','$ebandlogs','$ebandinstruments')");




if(mysql_query($query1, $connection)){

echo "<p>We have received your application, we will get back to you. </p><br/> Register for another event <a href='index.php'>here</a>.";

				}
				else
				{
					echo("Something went wrong. Please try again.1");

				}



?>
</div>



                                </div>



                                </section>
                                </article>



            <!-- Footer -->



                <footer id="footer">                                        <ul>                                                <li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>                        <li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>                        <li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>                     <li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>                    </ul>               </footer>







        </div>



        </body>



</html>*/