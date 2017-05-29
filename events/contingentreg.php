<?
header("Location: shut.php");  
/*


<?php
session_start();

if($_SESSION['fromMain'] == "false"){
   //send them back
   header("Location: register.php");
}
else{
   //reset the variable
   $_SESSION['fromMain'] = "false";
}
?>
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




            <link rel="stylesheet" type="text/css" media="screen" href="../css/jquery.ketchup.css" />



    <script type="text/javascript" src="../js/jquery.ketchup.all.min.js"></script>



    <script type="text/javascript" src="../js/jquery.ketchup.validations.js"></script>



    <script type="text/javascript" src="../js/jquery.ketchup.helpers.js"></script>







            <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->







    <script type="text/javascript">



        $(document).ready(function() {



        $('.reg_validate').ketchup();

$('#thesp').change(function() {

        $('#thesplist').show();

    });





$('#leela').change(function() {

        $('#leelalist').show();

    });

$('#folka').change(function() {

        $('#folklist').show();

    });

$('#theatre').change(function() {

        $('#theatrelist').show();

    });

$('#swargatha').change(function() {

        $('#swargaathalist').show();

        $('#hindustani').show();

        $('#carnatic').show();

        $('#t4').show();

        

        

    });
$('#rctmo').change(function() {

        $('#t3').show();
    });

$('#hindustani').change(function() {

        $('#thumri').show();

        $('#natyasangeet').show();

    });

$('#carnatic').change(function() {

        $('#tillana').show();

        $('#javali').show();

        $('#padam').show();

    });
$('#deadlock').change(function() {

        $('#t1').show();
    });



$('#gaata').change(function() {

        $('#gaatalist').show();

    });

$('#hband').change(function() {

        $('#hbandlist').show();

    });

$('#primetime').change(function() {

        $('#pte').show();

        $('#pth').show();

    });

$('#sr').change(function() {

        $('#srm').show();

        $('#srh').show();

    });

$('#ldl').change(function() {

        $('#ldle').show();

        $('#ldlh').show();

        $('#t2').show();


    });

$('#musical').change(function() {

        $('#musicallist').show();

    });

$('#pk').change(function() {

        $('#t5').show();
    });

$('#contemporary').change(function() {

        $('#contemporarylist').show();

        $('#t6').show();
 

    });

$('#uv').change(function() {

        $('#uvlist').show();

    });

$('#dj').change(function() {

        $('#djlist').show();

    });

$('#duet').change(function() {

        $('#duetlist').show();

    });

$('#eband').change(function() {

        $('#bandevente').show();

    });

$('#capella').change(function() {

        $('#capellalist').show();

    });

$('#fusiondance').change(function() {

        $('#fusiondancelist').show();

    });

$('#streetplay').change(function() {

        $('#streetplaylist').show();

    });

});


        </script>



            <link rel="stylesheet" href="../css/loadmain.css">



  <script src="../js/modernizr-2.6.2.min.js"></script>



  <script src="../js/main.js"></script>

<style>#home_icon{position:fixed;top:1vmin;left: 0;}#reg{z-index:1001;position:fixed;top:10%;right:0;border:2px dotted white;padding:1vmin;background-color:#666666;}

ol,li{list-style-type: none;text-align: justify;}




#pte,#pth,#ldle,#ldlh,#thespionagelist,#leelalist,#theatrelist,#swargaathalist,#folklist,#gaatalist,#hbandlist,#srh,#srm,#musicallist,#contemporarylist,#uvlist,#djlist,#bandevente,#capellalist,#fusiondancelist,#streetplaylist,#duetlist,#hindustani,#carnatic,#tillana,#thumri,#natyasangeet,#padam,#javali,#t1,#t2,#t3,#t4,#t4,#t5,#t6{display:none;}


  

input:disabled{background-color: #40403C;}

table, td {

    border: 1px solid white;

    padding: 1%;

    text-align: center;

}



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



                                        <h2>Contingent registrations</h2>



                                    </header>



        <br>



        <div id="reg_form"> 

              <form method="post" action="continval.php" class="reg_validate" >



                   <br>

                   *Required Fields



                         <ol>



                       <li>



                            <fieldset>



                                <legend>*College ID:</legend>



                               <input   placeholder="A1b2c3" required="required" size="30" maxlength="60" type="text" name="colid" id="colid" disabled value="<?php echo $_SESSION['coid'];?>" />



                            </fieldset>



                        </li>



                            <li><br/>



                            <fieldset>



                                <legend>*College Name:</legend>



                                <input   placeholder="St.Xavier's College" required="required" size="30" maxlength="60" type="text" name="cname" id="cname" disabled value="<?php echo $_SESSION['coname'];?>" />



                            </fieldset>



                        </li>



                            <li><br/>



                            <fieldset>



                                <legend>*Contingent Leader:</legend>



                                Name 



                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="clname" id="clname"  />



                                Phone 



                                <input  required="required" placeholder="123456789" size="30" maxlength="60" type="text" name="clphone" id="clphone" data-validate="validate(number)" />



                                E-mail ID 



                                <input   placeholder="example@email.com" required="required" size="30" maxlength="60" type="text" name="clemail" id="clemail" data-validate="validate(email)" />





                            </fieldset>



                        </li>



                        <li><br/>



                            <fieldset>



                                <legend>*Assistant Contingent Leader:</legend>



                                 Name 



                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="aclname1" id="aclname1"  )/>



                                 Phone 



                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="aclphone1" id="aclphone1" data-validate="validate(number)" )/>



                                 E-mail ID 



                                <input   placeholder="example@email.com" required="required" size="30" maxlength="60" type="text" name="aclemail1" id="aclemail1" data-validate="validate(email)" />





                            </fieldset>



                        </li>



                        <li><br/>



                            <fieldset>



                                <legend>*Assistant Contingent Leader:</legend>



                                 Name 



                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="aclname2" id="aclname2"  )/>



                                 Phone



                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="aclphone2" id="aclphone2" data-validate="validate(number)" )/>



                                 E-mail ID 



                                <input   placeholder="example@email.com" required="required" size="30" maxlength="60" type="text" name="aclemail2" id="aclemail2" data-validate="validate(email)" />





                            </fieldset>



                        </li>



                         <li><br/>



                            <fieldset>



                                <legend>Assistant Contingent Leader:</legend>



                                 Name 



                                <input   placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="aclname3" id="aclname3"  )/>



                                 Phone 



                                <input  placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="aclphone3" id="aclphone3"  )/>



                                 E-mail ID 



                                <input   placeholder="example@email.com" size="30" maxlength="60" type="text" name="aclemail3" id="aclemail3" />





                            </fieldset>



                        </li><br/> 
<h4>Events</h4>



                        <h5>Please TICK (√) for YES and leave blank for No</h5>

<li><br/>



                            <fieldset>



                                <legend>Conclave:</legend>



                                <input type="checkbox" class="conevent" id="mrmsmalhar" name="MrandMsMalhar" value="Mr and Ms Malhar">Mr and Ms Malhar (Let the mind games begin) [Flagship]<br/>



                                <input type="checkbox" class="conevent" name="Deadlock" id="deadlock" value="Deadlock">Deadlock (Crisis Management Event) [T1]<br/>



                                <input type="checkbox" name="conevente" id="primetime" value="Prime Time">Prime Time (News Presenting Event)<br/>

                                <span id="pte">English<input type="radio" name="PrimeTime" class="conevent"  id="prte" value="Prime Time English"/></span>

                                <span id="pth">Hindi<input type="radio" name="PrimeTime" id="prth" class="conevent" value="Prime Time Hindi" /><br/></span>



                                <input type="checkbox" class="conevent"  name="Rescripted" id="rescripted" value="Rescripted">Rescripted (Revisiting History)<br/>



                                <input type="checkbox" class="conevent"  name="TheFourthWall" id="fourthwall" value="The Fourth Wall">The Fourth Wall (Philosophy Based Event)<br/>



                                <input type="checkbox" class="conevent"  name="TheMalharParliamentaryDebate" id="bpd" value="The Malhar Parliamentary Debate">The Malhar Parliamentary Debate (British Parliamentary Debate)<br/>



                                <input type="checkbox" class="conevent"  name="IntergalacticCourtOfJustice" id="intercoj" value="Intergalactic Court Of Justice">Intergalactic Court Of Justice (Courtroom Event)<br/>



                                 <span id="totalc"></span>

                            </fieldset>



                        </li>

                         <script type="text/javascript">

  var $conbs = $('input[class="conevent"]');

  

      function calcUsagecon() {

       var sumc = 0; 

    $conbs.each(function() {

        if (this.checked)

            sumc = parseInt(sumc) +1;

    });

    $("#totalc").text('Total '+ sumc+ ' out of 7');

}

$conbs.click(calcUsagecon);



</script>   

 <li><br/><br/>



                            <fieldset>



                                <legend>Entertainment, Theatricals and Contests:</legend>



                                <input type="checkbox" class="etcevent" id="minutetwi" name="MinuteToWingIt" value="Minute To Wing It">Minute To Wing It (Improvisational Comedy Event) [Flagship]<br/>



                                <input type="checkbox" name="etcevents" id="ldl" value="Lips Dont Lie">Lips Don’t Lie (Lip Sync Event) [T2]<br/>

                                <span id="ldle">English<input type="radio" name="LipsDontLie" class="etcevent" id="lidle" value="Lips Dont Lie English"/></span>

                                <span id="ldlh">Hindi<input type="radio" name="LipsDontLie" class="etcevent" id="lidlh" value="Lips Dont Lie Hindi" /><br/></span>



                                <input type="checkbox" class="etcevent" name="CookingMyth" id="cookimgm" value="Cooking Myth">Cooking Myth (Game Show Event)<br/>



                                <input type="checkbox" class="etcevent" name="Thespionage" id="thesp" value="Thespionage"/>Thespionage (Experimental Theatre Event)<br/>

                               

                                <div id="thesplist" style="display:none">



                                <div class="row">

                                <div class="9u">

                                <header>Please provide a dropbox link to your final script.</header>

                                <textarea rows="6" cols="100" name="thespionagescript">

                                </textarea>

                                </div></div>

                                <div class="row">

                                <div class="9u">

                                <header>Props List</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="thespionageprops">

                                </textarea>

                                </div></div>

                                <div class="row">

                                <div class="9u">

                                <header>Please put names and youtube links of any audio that will be required:</header>

                                <textarea rows="6" cols="100" name="thespionageaudio">

                                </textarea>

                                </div></div>

                                <br/>

                                </div>



                                <input type="checkbox" class="etcevent" id="fieldd" name="FieldDomination" value="Field Domination">Field Domination (Sporting Event)<br/>



                                <span id="totale"></span>

                            </fieldset>



                        </li>

<script type="text/javascript">

  var $etcbs = $('input[class="etcevent"]');

  

      function calcUsageetc() {

       var sume = 0; 

    $etcbs.each(function() {

        if (this.checked)

            sume = parseInt(sume) +1;

    });

    $("#totale").text('Total '+ sume+ ' out of 5');

}

$etcbs.click(calcUsageetc);

</script>  

                        <li><br/><br/>



                            <fieldset>



                                <legend>Fine Arts:</legend>



                                <input type="checkbox" class="faevent" name="LeelaSartoria" id="leela" value="Leela Sartoria">Leela Sartoria (Garment Design Event) [Flagship]<br/>

                                <div id="leelalist"><br/>

                                <div class="row">

                                <div class="9u">

                                <header>Please put names and youtube links of any audio(100 seconds) that will be required:</header>

                                <textarea rows="6" cols="90" name="leelasongs">

                                </textarea>

                                </div>

                                </div>

                                </div>



                                <input type="checkbox" class="faevent" name="RaceToMountOlympus" id="rctmo" value="Race To Mount Olympus">Race To Mount Olympus (Logo Creation and Art Material Auction) [T3]<br/>



                                <input type="checkbox" class="faevent" name="PandorasBox" id="pb" value="Pandoras Box">Pandora&apos;s Box (Mixed-Material Art Event)<br/>



                                <input type="checkbox" class="faevent" name="YankeeDoodle" id="yd" value="Yankee Doodle">Yankee Doodle (Doodle + Story Board Event)<br/>



                                <input type="checkbox" class="faevent" name="PhotoSynthesis" id="ps" value="Photo-Synthesis">Photo-Synthesis (Photography and Art Event)<br/>



                                <span id="totalf"></span>

                            </fieldset>



                        </li>

                        <script type="text/javascript">

  var $fabs = $('input[class="faevent"]');

  

      function calcUsagefa() {

       var sumf = 0; 

    $fabs.each(function() {

        if (this.checked)

            sumf = parseInt(sumf) +1;

    });

    $("#totalf").text('Total '+ sumf+ ' out of 5');

}

$fabs.click(calcUsagefa);

</script> 



                        <li><br/><br/>



                            <fieldset>



                                <legend>Indian Performing Arts:</legend>



                                <input type="checkbox" class="ipaevent" id="theatre" name="PuraaniKahaaniNayiZubaani" value="Puraani Kahaani, Nayi Zubaani">Puraani Kahaani, Nayi Zubaani (Hindi Theatre Event) [Flagship]<br/>

                                 <div id="theatrelist"><br/>



                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with your final script.</header>

                                <textarea rows="6" cols="100" name="theatrefinalscript" >
                                </textarea>

                                </div>

                                </div>



                                <div class="row">

                                <div class="6u">

                                <header>Props List(Elims)</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="theatrepropselims">

                                </textarea>

                                

                                </div>

                                <div class="6u">

                                <header>Props List(Finals)</header>

                               <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="theatrepropsfinals">

                                </textarea>

                                

                                </div>

                                </div>



                                <div class="row">

                                <div class="6u">

                                <header>Costume List(Elims)</header>

                                <h1>Please put the list of costumes required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="theatrecostumeselims">

                                </textarea>

                                

                                </div>

                                <div class="6u">

                                <header>Costume List(Finals)</header>

                                <h1>Please put the list of costumes required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="theatrecostumesfinals">

                                </textarea>

                                

                                </div>

                                </div>



                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a copy of your poem.</header>

                                <textarea rows="6" cols="100" name="theatrepoem" >
                                </textarea>

                                </div>

                                </div>

                                </div>







                                <input type="checkbox" name="ipaevents" id="swargatha" value="Swargaatha">Swargaatha (Classical Singing Event) [T4]<br/>

                                <span id="hindustani"><input type="radio" name="swargaathah" id="swargaathah" />Hindustani<br/>

                                    <span id="thumri">Thumri<input type="radio" class="ipaevent" name="Swargaatha" id="swargaathaht" value="Swargaatha Hindustani Thumri"/></span>

                                    <span id="natyasangeet">Natyasangeet<input type="radio" class="ipaevent" name="Swargaatha " id="swargaathah" value="Swargaatha Hindustani Natyasangeet"/></span>

                                </span>

                                <span id="carnatic"><br/><input type="radio" name="swargaathah" id="swargaathac" />Carnatic<br/>

                                    <span id="tillana">Tillana<input type="radio" class="ipaevent" name="Swargaatha" id="swargaathact" value="Swargaatha Carnatic Tillana"/></span>

                                    <span id="javali">Javali<input type="radio" class="ipaevent" name="Swargaatha" id="swargaathacj" value="Swargaatha Carnatic Javali"/></span>

                                    <span id="padam">Padam<input type="radio" class="ipaevent" name="Swargaatha" id="swargaathacp" value="Swargaatha Carnatic Padam"/></span>

                                </span>

                                <div id="swargaathalist"><br/><br/>

                                <div class="row">

                                <div class="9u">

                                <header>Instrument List:</header>

                                <h1>Please put in a list of instruments (along with the smallest details regarding instruments. eg. the little hammer used to tune tabla should also be mentioned):</h1>

                                <textarea rows="6" cols="100" id="classicalinstruments">

                                </textarea>

                                </div>

                                </div>

                                </div>



                                <input type="checkbox" class="ipaevent" name="FolkStroke" id="folka" value="Folk Stroke">Folk Stroke (Folk Dance Event)<br/>

                                <div id="folklist"><br/><br/>

                                <div class="row">

                                <div class="5u">

                                    <p>Name of the selected dance form</p>

                                    <input type="text" name="folkdanceform">

                                </div>

                                <div class="5u">

                                    <p>Name of the state or region the selected dance form belongs to</p>

                                    <input type="text" name="folkdanceregion">

                                </div>

                                </div>

                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of your chosen song and it&apos;s lyrics.</header>

                                <textarea rows="6" cols="100" name="folkdancesong" >
                                </textarea>

                                </div>

                                </div>



                                <div class="row">

                                <div class="6u">

                                <header>Props List(Elims)</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="folkdancepropselims">

                                </textarea>

                                

                                </div>

                                <div class="6u">

                                <header>Props List(Finals)</header>

                               <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="folkdancepropsfinals">

                                </textarea>

                                

                                </div>

                                </div>



                                <div class="row">

                                <div class="6u">

                                <header>Costume List(Elims)</header>

                                <h1>Please put the list of costumes required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="folkdancecostumeelims">

                                </textarea>

                                

                                </div>

                                <div class="6u">

                                <header>Costume List(Finals)</header>

                                <h1>Please put the list of costumes required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="folkdancecostumefinals">

                                </textarea>

                                

                                </div>

                                </div>





                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox linkk to a file with a brief synopsis of the chosen folk dance.</header>

                                <textarea rows="6" cols="100" name="folkdancesynopsis" accept=".txt,.doc,.docx">
                                </textarea>

                                </div>

                                </div>

                                </div>



                                <input type="checkbox" class="ipaevent" name="GaataRaheMeraDil" id="gaata" value="Gaata Rahe Mera Dil">Gaata Rahe Mera Dil (Solo Singing Event)<br/>

                                <div id="gaatalist"><br/>

                                <div class="row">

                                <div class="9u">

                                <header>Instrument List:</header>

                                <h1>Please put in a list of instruments (along with the smallest details regarding instruments. eg. the little hammer used to tune tabla should also be mentioned):</h1>

                                <textarea rows="6" cols="100" name="gaatainstruments">

                                </textarea>

                                </div>

                                </div>



                                 <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the lyrics of the chosen song.</header>

                                <textarea rows="6" cols="100" name="gaatasongs">
                                </textarea>

                                </div>

                                </div>

                                </div>



                                <input type="checkbox" class="ipaevent" name="ReadySteadyMedley" id="hband" value="Ready? Steady? Medley!">Ready? Steady? Medley! (Hindi Band Event)<br/>

                                <div id="hbandlist"><br/>

                                <div class="row">

                                <div class="9u">

                                <header>Instrument List:</header>

                                <h1>Please put in a list of instruments (along with the smallest details regarding instruments.):</h1>

                                <textarea rows="6" cols="100" name="hbandinstruments">

                                </textarea>

                                </div>

                                </div>



                                 <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the choice of songs along with their lyrics.</header>

                                <textarea rows="6" cols="100" name="hbandsongs">
                                </textarea>

                                </div>

                                </div>

                                 <div class="row">

                                <div class="9u">

                                <header>Please put in the name of the chosen song for the instrumental piece.</header>

                                <input type="text" name="hbandinstrumental" >

                                </div>

                                </div>

                                </div>



                                <span id="totali"></span>

                            </fieldset>



                        </li>

                        <script type="text/javascript">

  var $ipabs = $('input[class="ipaevent"]');

  

      function calcUsageipa() {

       var sumipa = 0; 

    $ipabs.each(function() {

        if (this.checked)

            sumipa = parseInt(sumipa) +1;

    });

    $("#totali").text('Total '+ sumipa+ ' out of 5');

}

$ipabs.click(calcUsageipa);

</script> 



                        <li><br/><br/>



                            <fieldset>



                                <legend>Literary Arts:</legend>



                                <input type="checkbox" class="laevent" name="BattleOfFact" id="bof" value="Battle Of Fact">Battle Of Fact (General Knowledge Quiz) [Flagship]<br/>



                                <input type="checkbox" class="laevent" name="PromptKing" id="pk" value="Prompt King">Prompt King (Extempore-On the Spot Speaking) [T5]<br/>



                                <input type="checkbox" class="laevent"  name="HitTheWriteNote" id="htwn" value="Hit The Write Note">Hit The Write Note (Creative Writing Event)<br/>



                                <input type="checkbox" class="laevent" name="WordMentality" id="wm" value="Word Mentality">Word Mentality (Word Games)<br/>



                                <input type="checkbox" class="laevent" id="sr" value="Shabda Rang">Shabda Rang (Hindi/Marathi Event)<br/>

                                <span id="srm">Marathi<input type="checkbox" name="ShabdaRang[]" id="shrm" value="Shabda Rang Marathi"/></span>

                                <span id="srh">Hindi<input type="checkbox" name="ShabdaRang[]" id="shrh" value="Shabda Rang Hindi" /><br/></span>



                                <input type="checkbox" class="laevent" id="sir" name="SpeakInterruptRepeat" value="Speak. Interrupt. Repeat">Speak. Interrupt. Repeat (Just-A-Minute)<br/>



                                <span id="totall"></span>

                            </fieldset>



                        </li>

                        <script type="text/javascript">

  var $labs = $('input[class="laevent"] ');

      function calcUsagela() {

       var sumla = 0; 

    $labs.each(function() {

        if (this.checked)

            sumla = parseInt(sumla) +1;

    });


    $("#totall").text('Total '+ sumla+ ' out of 6');

}

$labs.click(calcUsagela);

</script> 





                        <li><br/><br/>



                            <fieldset>



                                <legend>Workshops Inc:</legend>



                                <input type="checkbox" class="wincevent" name="TempestinaTeePot" id="tempest" value="Tempest in a Tee-Pot">Tempest in a Tee-Pot (T-Shirt Painting Workshop) [Flagship]<br/>



                                <span id="totalwc"></span>

                            </fieldset>



                        </li>

                        <script type="text/javascript">

  var $wincbs = $('input[class="wincevent"]');

  

      function calcUsagewinc() {

       var sumwinc = 0; 

    $wincbs.each(function() {

        if (this.checked)

            sumwinc = parseInt(sumwinc) +1;

    });

    $("#totalwc").text('Total '+ sumwinc+ ' out of 1');

}

$wincbs.click(calcUsagewinc);

</script> 



                        <li><br/><br/>



                            <fieldset>



                                <legend>World Performing Arts:</legend>



                                <input type="checkbox" class="wpaevent" id="musical" name="BroadwayBlockbuster" value="Broadway Blockbuster">Broadway Blockbuster (A Musical) [Flagship]<br/>

                                <div id="musicallist"><br/>

                                    <div class="row">

                                <div class="9u">

                                <header>Props List - chosen from the list provided <a href="http://malharfest.org/events/events.php" target="_blank">here</a></header>

                               <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="musicalprops">

                                </textarea>                                

                                </div>

                                </div>

                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen artists from the list provided <a href="http://malharfest.org/events/events.php" target="_blank">here</a>.</header>

                                <textarea rows="6" cols="100" name="musicalartists">
                                </textarea>

                                </div>

                                </div>

                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs.</header>

                                <textarea rows="6" cols="100" name="musicalsongs">
                                </textarea>

                                </div>

                                </div>

                                <div class="row">

                                <div class="9u">

                                <header>Logistical (tables/chairs) requirements</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity if necessary.):</h1>

                                <textarea rows="6" cols="100" name="musicallogs">

                                </textarea>

                                </div>

                                </div>

*(Every tiny item used, including things like hair pins/safety pins must be mentioned in the costume/ prop list)

                                <div class="row">

                                <div class="9u">

                                <header>Costume List</header>

                                <h1>Please put the list of costumes required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="musicalcostumes">

                                </textarea>

                                </div>

                                </div>

                                </div>



                                <input type="checkbox" class="wpaevent" id="contemporary" name="Retrograde" value="Retrograde">Retrograde (Contemporary Dance Event) [T6]<br/>

                                <div id="contemporarylist"><br/>

                                <div class="row">

                                    <div class="9u">

                                        <p>Personal/social conflict chosen:</p>

                                        <input type="text" name="contemporaryconflict">

                                    </div>

                                </div>

                                     <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs, artist name and their lyrics.</header>

                                <textarea rows="6" cols="100" name="contemporarysong">
                                </textarea>

                                </div>

                                </div>

                                    *(Every tiny item used, including things like hair pins/safety pins must be mentioned in the costume/ prop 



list)

                                <div class="row">

                                <div class="9u">

                                <header>Props List</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="contemporaryprops">

                                </textarea>

                                </div>

                                </div>



                                <div class="row">

                                <div class="9u">

                                <header>Costume List</header>

                                <h1>Please put the list of costumes required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="contemporarycostumes">

                                </textarea>

                                 </div>

                                </div>



                                </div>









                                <input type="checkbox" class="wpaevent" name="Illuminati" id="uv" value="Illuminati">Illuminati (UV Light Dance Event)<br/>

                                <div id="uvlist"><br/>

                                     <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs, artist name and their lyrics.</header>

                               <textarea rows="6" cols="100" name="uvsongs" >
                               </textarea>

                                </div>

                                </div>

                                    *(Every tiny item used, including things like hair pins/safety pins must be mentioned in the costume/ prop 



list)

                                <div class="row">

                                <div class="9u">

                                <header>Props List</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="uvprops">

                                </textarea>

                                </div>

                                </div>



                                <div class="row">

                                <div class="9u">

                                <header>Logistical (tables/chairs) requirements</header>

                                <h1>Please put the list of logisticals required along-with all pertaining details(dimensions, quantity if necessary.):</h1>

                                <textarea rows="6" cols="100" name="uvlogs">

                                </textarea>

                               </div>

                                </div>



                                <div class="row">

                                <div class="9u">

                                <header>Costume List</header>

                                <h1>Please put the list of costumes required along-with all pertaining details(dimensions, quantity and material if necessary.):</h1>

                                <textarea rows="6" cols="100" name="uvcostumes">

                                </textarea>

                               </div>

                                </div>

                                </div>



                                <input type="checkbox" class="wpaevent" name="AllAboutThatBass" id="dj" value="All About That Bass">All About That Bass (DJ Event)<br/>

                                <div id="djlist"><br/>

                                     <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs and their lyrics.</header>

                                <textarea rows="6" cols="100" name="djsongs" >
                                </textarea>

                                </div>

                                </div>

                                </div>



                                <input type="checkbox" class="wpaevent" name="UptempoFunk" id="duet" value="Uptempo Funk">Uptempo Funk (Duet Singing Event)<br/>

                                <div id="duetlist"><br/>

                                     <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs, artist name and their lyrics.</header>

                                <textarea rows="6" cols="100" name="duetsongs" >
</textarea>
                                </div>

                                </div>

                                <div class="row">

                                <div class="6u">

                                <header>Logistical (tables/chairs) requirements</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity if necessary.):</h1>

                                <textarea rows="6" cols="100" name="duetlogs">

                                </textarea>

                                

                                

                                </div>

                                </div>



                                 <div class="row">

                                <div class="9u">

                                <header>InstrumentList:</header>

                                <h1>Please put in a list of instruments (along with the smallest details regarding instruments.):</h1>

                                <textarea rows="6" cols="100" name="duetinstruments">

                                </textarea>

                                </div>

                                </div>



                                </div>



                                <input type="checkbox" class="wpaevent" id="eband" name="AmpedUp" value="Amped Up">Amped Up (Band event)<br/>

                                <div id="bandevente">

                                    <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs, artist name and their lyrics.</header>

                                <textarea rows="6" cols="100" name="ebandsongs">
                                </textarea>

                                </div>

                                </div>

                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the lyrics and title of original composition.</header>

                                <textarea rows="6" cols="100" name="ebandoriginal">
                                </textarea>

                                </div>

                                </div>

                                <div class="row">

                                <div class="6u">

                                <header>Logistical (microphones, drums, keyboard, tables and chairs) requirements</header>

                                <h1>Please put the list of props required along-with all pertaining details(dimensions, quantity if necessary.):</h1>

                                <textarea rows="6" cols="100" name="ebandlogs">

                                </textarea>

                                </div>

                                </div>



                                 <div class="row">

                                <div class="9u">

                                <header>Instrument List:</header>

                                <h1>Please put in a list of instruments including pickups (along with the smallest details regarding instruments.):</h1>

                                <textarea rows="6" cols="100" name="ebandinstruments">

                                </textarea>

                                </div>

                                </div>

                                </div>



                                <span id="totalw"></span>

                            </fieldset>



                        </li>

                        <script type="text/javascript">

  var $wpabs = $('input[class="wpaevent"]');

  

      function calcUsagewpa() {

       var sumwpa = 0; 

    $wpabs.each(function() {

        if (this.checked)

            sumwpa = parseInt(sumwpa) +1;

    });

    $("#totalw").text('Total '+ sumwpa+ ' out of 6');

}

$wpabs.click(calcUsagewpa);

</script> 



                        <li><br/><br/>



                            <fieldset>



                                <legend>Crossover Events:</legend>



                                <input type="checkbox" class="crossover" name="SomeStringsAttached" id="somestrings" value="Some Strings Attached">Some Strings Attached (Puppet Making)<br/>



                                <input type="checkbox" name="TheSoundOfSilence" class="crossover" id="soundsilence" value="The Sound Of Silence">The Sound Of Silence (Mime Performance)<br/>



                                <input type="checkbox" name="PitchPlease" class="crossover" id="capella" value="Pitch Please">Pitch Please (A Capella Singing Event)<br/>

                                <div id="capellalist"><br/>

                                 <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs, artist name and their lyrics for both rounds.</header>

                                <textarea rows="6" cols="100" name="capellasongs">
                                </textarea>

                                </div>

                                </div>

                                </div>



                                <input type="checkbox" name="OdissiOdyssey" class="crossover" id="fusiondance" value="Odissi Odyssey">Odissi Odyssey (Fusion Dance Event)<br/>

                                <div id="fusiondancelist"><br/>

                                    <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the selected dance forms (chosen from the list provided <a href="http://www.malharfest.org/events.php" target="_blank">here</a>).</header>

                                <textarea rows="6" cols="100" name="fusiondanceform">
</textarea>
                                </div>

                                </div>

                                <div class="row">

                                <div class="9u">

                                <header>Please put a dropbox link to a file with the name of the chosen songs and their lyrics.</header>

                                <textarea rows="6" cols="100" name="fusionsongs" >
                                </textarea>

                                </div>

                                </div>

                                <div class="row">

                                <div class="6u">

                                <header>Costumes list (which must include the number of hairpins, make-up, jewellery and any other equipment that participants will be carrying)</header>


                                <textarea rows="6" cols="100" name="fusioncostumes">

                                </textarea>

                                </div>

                                </div>



                                </div>



                                <input type="checkbox" name="CanvasCameo" class="crossover" id="filmmaking" value="Canvas Cameo">Canvas Cameo (Film Making and Poster Design)<br/>



                                <input type="checkbox" name="ItnaSannataKyunHaiBhai" class="crossover" id="streetplay" value="Itna Sannata Kyun Hai Bhai!?">Itna Sannata Kyun Hai Bhai!? (Street Play Event)<br/>

                                <div id="streetplaylist"><br/>

                                    <div class="9u">

                                <header>Please provide a dropbox link for the final script.</header>

                                <textarea rows="6" cols="100" name="streetscript">

                                </textarea>

                                </div>

                                

                                <div class="row">

                                <div class="6u">

                                <header>Costumes list</header>

                               <textarea rows="6" cols="100" name="streetcostumes">

                                </textarea>

                                </div>

                                </div>



                                 <div class="row">

                                <div class="9u">

                                <header>Instrument List:</header>

                                <h1>Please put in a list of instruments (along with the smallest details regarding instruments.):</h1>

                                <textarea rows="6" cols="100" name="streetinstruments">

                                </textarea>

                                </div>

                                </div>

                                </div>



                                <span id="totalcr"></span>

                            </fieldset>



                        </li>

                        <script type="text/javascript">

  var $crbs = $('input[class="crossover"]');

  

      function calcUsagecr() {

       var sumcr = 0; 

    $crbs.each(function() {

        if (this.checked)

            sumcr = parseInt(sumcr) +1;

    });

    $("#totalcr").text('Total '+ sumcr+ ' out of 6');

}

$crbs.click(calcUsagecr);

</script> 



                        <li><br/><br/>



                            <fieldset>



                                <legend>Trump Events:</legend><br/>

                                <ul>

                                <li>Every college may wager on the events that they think their contingent will win.</li>

                                <li>In case you trump on an event and you feature anywhere in the top 3 positions, you will be awarded an additional 5 points to the respective event score.</li>

                                <li>There will be no negative marking for choosing to trump and not placing.</li>

                                <li>You can indicate your Trump choices by checking the box to the corresponding to the Trump Event.</li>

                                </ul><br/>



                                <input type="checkbox" name="TrumpEvent1" id="t1" class="trumpevent" value="Trump Event 1">Trump Event 1 (Deadlock (Crisis Management Event))<br/>



                                <input type="checkbox" name="TrumpEvent2" id="t2" class="trumpevent" value="Trump Event 2">Trump Event 2 (Lips Don’t Lie (Lip Sync Event))<br/>



                                <input type="checkbox" name="TrumpEvent3" id="t3" class="trumpevent" value="Trump Event 3">Trump Event 3 (Race To Mount Olympus (Logo Creation and Art Material Auction))<br/>



                                <input type="checkbox" name="TrumpEvent4" id="t4" class="trumpevent" value="Trump Event 4">Trump Event 4 (Swargaatha (Classical Singing Event))<br/>



                                <input type="checkbox" name="TrumpEvent5" id="t5" class="trumpevent" value="Trump Event 5">Trump Event 5 (Prompt King (Extempore-On the Spot Speaking))<br/>



                                <input type="checkbox" name="TrumpEvent6" id="t6" class="trumevent" value="Trump Event 6">Trump Event 6 (Retrograde (Contemporary Dance Event))<br/>



                                <span id="totalt"></span>

                            </fieldset>



                        </li>

                        <script type="text/javascript">

  var $tbs = $('input[name="trumpevent"]');

  

      function calcUsaget() {

       var sumt = 0; 

    $tbs.each(function() {

        if (this.checked)

            sumt = parseInt(sumt) +1;

    });

    $("#totalt").text('Total '+ sumt+ ' out of 6');

}

$tbs.click(calcUsaget);

</script> 

                    </ol>
<br/><br/>
<h2>Note: Always submit full details everytime there are any changes made. The entries filled last before the last date will be considered final.</h2>
<input class="submit button special" type="submit" value="Submit" />

                    <br />

 </form>
 </div>
 </div>



       



    </div>



    



</div>



                                </section></article>



            <!-- Footer -->



                <footer id="footer">                                        <ul>                                                <li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>                        <li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>                        <li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>                     <li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>                    </ul>               </footer>







        </div>



        </body>



</html>*/