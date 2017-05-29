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

                                        <a href="index.php"> <h2 title="Click here to go to the main page">Malhar Contingent Registrations</h2></a>

                                    </header>

<?php
session_start();


$host = "localhost";
				$user = "malharfe_admin";
				$pass = "malhar2015admin";
				$db = 'malharfe_15_colleges';

				$connection = @mysql_connect($host, $user, $pass);
				$selectdb = @mysql_select_db($db, $connection);
				if (!$connection || !$selectdb) {
					die($conn_error);
				} else {
					//echo "<p>We got in the DB!!!</p>";
				}



					$coid = $_SESSION['coid'];
					

				$coid= mysql_real_escape_string($coid);

				$coname = $_SESSION['coname'];
				$coname= mysql_real_escape_string($coname);

				$clname = $_POST["clname"];

				$clphone = $_POST["clphone"];



				$clemail = $_POST["clemail"];



				$aclname1 = $_POST["aclname1"];



				$aclphone1= $_POST["aclphone1"];



				$aclemail1 = $_POST["aclemail1"];



				$aclname2 = $_POST["aclname2"];



				$aclphone2 = $_POST["aclphone2"];



				$aclemail2 = $_POST["aclemail2"];



				$aclname3 = $_POST["aclname3"];



				$aclphone3 = $_POST["aclphone3"];



				$aclemail3 = $_POST["aclemail3"];
				date_default_timezone_set("Asia/Kolkata");
				$date1 = date("Y-m-d H:i:s");
if(isset($_POST['MrandMsMalhar'])){
	$con1="Yes";

}
if(isset($_POST['Deadlock'])){

	$con2="Yes";
}
$con3 = $_POST['PrimeTime'];
	

if(isset($_POST['Rescripted'])){

	$con4="Yes";
}

if(isset($_POST['TheFourthWall'])){

	$con5="Yes";
}

if(isset($_POST['TheMalharParliamentaryDebate'])){

	$con6="Yes";
}
if(isset($_POST['IntergalacticCourtOfJustice'])){

	$con7="Yes";

}
if(isset($_POST['MinuteToWingIt'])){

	$etc1="Yes";

}

	$etc2=$_POST['LipsDontLie'];


if(isset($_POST['CookingMyth'])){

	$etc3="Yes";

}

if(isset($_POST['Thespionage'])){

	$etc4="Yes";

}

if(isset($_POST['FieldDomination'])){

	$etc5="Yes";

}

if(isset($_POST['LeelaSartoria'])){

	$fa1="Yes";

}

if(isset($_POST['RaceToMountOlympus'])){

	$fa2="Yes";

}

if(isset($_POST['PandorasBox'])){

	$fa3="Yes";

}

if(isset($_POST['YankeeDoodle'])){

	$fa4="Yes";

}

if(isset($_POST['PhotoSynthesis']) ){

	$fa5="Yes";

}

if(isset($_POST['PuraaniKahaaniNayiZubaani'])){

	$ipa1="Yes";

}

	$ipa2=$_POST['Swargaatha'];


if(isset($_POST['FolkStroke'])){

	$ipa3="Yes";

}

if(isset($_POST['GaataRaheMeraDil'])){

	$ipa4="Yes";

}

if(isset($_POST['ReadySteadyMedley'])){

	$ipa5="Yes";

}

if(isset($_POST['BattleOfFact'])){

	$la1="Yes";

}

if(isset($_POST['PromptKing'])){

	$la2="Yes";

}

if(isset($_POST['HitTheWriteNote'])){

	$la3="Yes";

}

if(isset($_POST['WordMentality'])){

	$la4="Yes";

}
$la5=implode(',', $_POST['ShabdaRang']);


if(isset($_POST['SpeakInterruptRepeat'])){

	$la6="Yes";

}

if(isset($_POST['TempestinaTeePot'])){

	$winc="Yes";

}

if(isset($_POST['BroadwayBlockbuster']) ){

	$wpa1="Yes";

}

if(isset($_POST['Retrograde'])){

	$wpa2="Yes";

}

if(isset($_POST['Illuminati'])){

	$wpa3="Yes";

}

if(isset($_POST['AllAboutThatBass'])){

	$wpa4="Yes";

}

if(isset($_POST['UptempoFunk'])){

	$wpa5="Yes";

}

if(isset($_POST['AmpedUp'])){

	$wpa6="Yes";

}

if(isset($_POST['SomeStringsAttached'])){

	$cr1="Yes";

}

if(isset($_POST['TheSoundOfSilence'])){

	$cr2="Yes";

}

if(isset($_POST['PitchPlease'])){

	$cr3="Yes";

}

if(isset($_POST['OdissiOdyssey'])){

	$cr4="Yes";

}

if(isset($_POST['CanvasCameo'])){

	$cr5="Yes";

}

if(isset($_POST['ItnaSannataKyunHaiBhai'])){

	$cr6="Yes";

}
if(isset($_POST['TrumpEvent1'])){

	$t1="Yes";

}
if(isset($_POST['TrumpEvent2'])){

	$t2="Yes";

}

if(isset($_POST['TrumpEvent3'])){

	$t3="Yes";

}
if(isset($_POST['TrumpEvent4'])){

	$t4="Yes";

}
if(isset($_POST['TrumpEvent5'])){

	$t5="Yes";

}
if(isset($_POST['TrumpEvent6'])){

	$t6="Yes";

}


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











$query1 = ("INSERT INTO `Contingent_reg`(`date`,`UID`, `Name`, `Clname`, `Clphone`, `Clemail`, `Acl1name`, `Acl1phone`, `Acl1email`, `Acl2name`, `Acl2phone`, `Acl2email`, `Acl3name`, `Acl3phone`, `Acl3email`) VALUES('$date1','$coid', '$coname','$clname','$clphone','$clemail','$aclname1','$aclphone1','$aclemail1','$aclname2','$aclphone2','$aclemail2','$aclname3','$aclphone3','$aclemail3')");

$query2 = ("INSERT INTO `Events`(`date`,`UID`, `Name`, `MrandMsMalhar`, `Deadlock`, `PrimeTime`, `Rescripted`, `TheFourthWall`, `TheMalharParliamentaryDebate`, `IntergalacticCourtOfJustice`, `MinuteToWingIt`, `LipsDontLie`, `CookingMyth`, `Thespionage`, `FieldDomination`, `LeelaSartoria`, `RaceToMountOlympus`, `PandorasBox`, `YankeeDoodle`, `PhotoSynthesis`, `PuraaniKahaaniNayiZubaani`, `Swargaatha`, `FolkStroke`, `GaataRaheMeraDil`, `ReadySteadyMedley`, `BattleOfFact`, `PromptKing`, `HitTheWriteNote`, `WordMentality`, `ShabdaRang`, `SpeakInterruptRepeat`, `TempestinaTeePot`, `BroadwayBlockbuster`, `Retrograde`, `Illuminati`, `AllAboutThatBass`, `UptempoFunk`, `AmpedUp`, `SomeStringsAttached`, `TheSoundOfSilence`, `PitchPlease`, `OdissiOdyssey`, `CanvasCameo`, `ItnaSannataKyunHaiBha`, `TrumpEvent1`, `TrumpEvent2`, `TrumpEvent3`, `TrumpEvent4`, `TrumpEvent5`, `TrumpEvent6`) VALUES ('$date1','$coid', '$coname','$con1','$con2','$con3','$con4','$con5','$con6','$con7','$etc1','$etc2','$etc3','$etc4','$etc5','$fa1','$fa2','$fa3','$fa4','$fa5','$ipa1','$ipa2','$ipa3','$ipa4','$ipa5','$la1','$la2','$la3','$la4','$la5','$la6','$winc','$wpa1','$wpa2','$wpa3','$wpa4','$wpa5','$wpa6','$cr1','$cr2','$cr3','$cr4','$cr5','$cr6','$t1','$t2','$t3','$t4','$t5','$t6')");


$query3 = ("INSERT INTO `WPAdetails`(`date`,`UID`, `Name`, `musicalprops`, `musicalartists`, `musicalsongs`, `musicallogs`, `musicalcostumes`, `contemporaryconflict`, `contemporarysong`, `contemporaryprops`, `contemporarycostumes`, `uvsongs`, `uvprops`, `uvlogs`, `uvcostumes`, `djsongs`, `duetsongs`, `duetlogs`, `duetinstruments`, `ebandsongs`, `ebandoriginal`, `ebandlogs`, `ebandinstruments`) VALUES ('$date1','$coid', '$coname','$musicalprops','$musicalartists','$musicalsongs','$musicallogs','$musicalcostumes','$contemporaryconflict','$contemporarysong','$contemporaryprops','$contemporarycostumes','$uvsongs','$uvprops','$uvlogs','$uvcostumes','$djsongs','$duetsongs','$duetlogs','$duetinstruments','$ebandsongs','$ebandoriginal','$ebandlogs','$ebandinstruments')");

$query4 = ("INSERT INTO `ETCdetails`(`date`,`UID`, `Name`, `thespionagescript`, `thespionageprops`, `thespionageaudio`) VALUES ('$date1','$coid', '$coname','$thespionagescript','$thespionageprops','$thespionageaudio')");

$query5 = ("INSERT INTO `IPAdetails`(`date`,`UID`, `Name`, `theatrefinalscript`, `theatrepropselims`, `theatrepropsfinals`, `theatrecostumeselims`, `theatrecostumesfinals`, `theatrepoem`, `classicalinstruments`, `folkdanceform`, `folkdanceregion`, `folkdancesong`, `folkdancepropselims`, `folkdancepropsfinals`, `folkdancecostumeelims`, `folkdancecostumefinals`, `folkdancesynopsis`, `gaatainstruments`, `gaatasongs`, `hbandinstruments`, `hbandsongs`, `hbandinstrumental`) VALUES ('$date1','$coid', '$coname','$theatrefinalscript','$theatrepropselims','$theatrepropsfinals','$theatrecostumeselims','$theatrecostumesfinals','$theatrepoem','$classicalinstruments','$folkdanceform','$folkdanceregion','$folkdancesong','$folkdancepropselims','$folkdancepropsfinals','$folkdancecostumeelims','$folkdancecostumefinals','$folkdancesynopsis','$gaatainstruments','$gaatasongs','$hbandinstruments','$hbandsongs','$hbandinstrumental')");

$query6 = ("INSERT INTO `FAdetails`(`date`,`UID`, `Name`, `leelasongs`) VALUES ('$date1','$coid', '$coname','$leelasongs')");

$query7 = ("INSERT INTO `Crossoverdetails`(`date`, `UID`, `Name`, `capellasongs`, `fusiondanceform`, `fusionsongs`, `fusioncostumes`, `streetscript`, `streetinstruments`, `streetcostumes`) VALUES ('$date1','$coid', '$coname','$capellasongs','$fusiondanceform','$fusionsongs','$fusioncostumes','$streetscript','$streetinstruments','$streetcostumes')");



if((mysql_query($query1, $connection))&&(mysql_query($query2, $connection))&&(mysql_query($query3, $connection))&&(mysql_query($query4, $connection))&&(mysql_query($query5, $connection))&&(mysql_query($query6, $connection))&&(mysql_query($query7, $connection))){

echo "<p>We have received your application, we will get back to you. </p>";

				}
				else
				{
					echo("Something went wrong. Please try again.1");

				}



?>*/