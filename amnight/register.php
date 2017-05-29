<?
header("Location: shut.php");  
/*
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

            <script src="script.js"></script>



            <link rel="stylesheet" type="text/css" media="screen" href="../css/jquery.ketchup.css" />



    <script type="text/javascript" src="../js/jquery.ketchup.all.min.js"></script>



    <script type="text/javascript" src="../js/jquery.ketchup.validations.js"></script>



    <script type="text/javascript" src="../js/jquery.ketchup.helpers.js"></script>







            <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->



<script src="script.js"></script>

<script type="text/javascript">



    $(document).ready(function(){



            $('#solo').click(function(){




    $('#solo-form').show();

        $('#duet-form').hide();

        $('#capella-form').hide();

        $('#beatboxing-form').hide();

        $('#band-form').hide();          



            });



            $('#band').click(function(){

$('#solo-form').hide();

        $('#duet-form').hide();

        $('#capella-form').hide();

        $('#beatboxing-form').hide();

        $('#band-form').show();

            });



            $('#duet').click(function(){



    $('#solo-form').hide();

        $('#duet-form').show();

        $('#capella-form').hide();

        $('#beatboxing-form').hide();

        $('#band-form').hide();

        ;



            });



            $('#acapella').click(function(){



                $('#solo-form').hide();

        $('#duet-form').hide();

        $('#capella-form').show();

        $('#beatboxing-form').hide();

        $('#band-form').hide();



            });



            $('#beatboxing').click(function(){



                $('#solo-form').hide();

        $('#duet-form').hide();

        $('#capella-form').hide();

        $('#beatboxing-form').show();

        $('#band-form').hide();



            });











        });







    </script>

    <script type="text/javascript">



        $(document).ready(function() {



        $('.forval').ketchup();


        });



        </script>



            <link rel="stylesheet" href="../css/loadmain.css">



  <script src="../js/modernizr-2.6.2.min.js"></script>



  <script src="../js/main.js"></script>



<style>#home_icon{position:fixed;top:1vmin;left: 0;}#reg{z-index:1001;position:fixed;top:10%;right:0;border:2px dotted white;padding:1vmin;background-color:#666666;}



#inde_adj, #cr_tm, #tmr{



        display: none;



    }
#solo-form,#capella-form,#beatboxing-form,#band-form,#duet-form{display: none;}


    #hidden-forms



    {



        margin: 0 auto;



        text-align: justify !important;



    }

    .re{

        border: 2px dotted #fff;

  padding: 25px;

  width:31% !important;

  margin: 5.5px;

  min-height: 100px;

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



    <a href="../index.php"><img src="../images/hicon.svg" height="130px";width="130px;" id="home_icon"></a></li>







                        



        <article id="main">



            <section class="wrapper style2 container special-alt" id="scpanel">



                            <div class="row">



                            <div class="12u">



                                    <header>



                                        <h2>Amnight Registrations</h2>



                                    </header>



        <br>



            <div class="row">



        <a id="acapella" href="#acapella-form" class="4u re" style="

  background:#6B4724;">



        A Capella



   </a>

                <a id="band" href="#band-form" class="4u re" style="

  background:#6B4724;">



Band



    </a>



        <a id="beatboxing" href="#beatboxing-form" class="4u re" style="

  background:#6B4724;">



       Beat-Boxing



    </a>



    <a id="duet" href="#duet-form" class="5u re" style="

  background:#6B4724;">



        Duet Singing/Instrumental



   </a>



        <a id="solo" href="#solo-form" class="5u re" style="

  background:#6B4724;">



        Solo Singing/Instrumental



   </a>



        



       </div>



       <br><br>







    <div class="10u" id="hidden-forms">



        <div id="solo-form">

        <form method = "post" action = "amnightval.php" id="soloform" class="forval">

        <h3>Solo Singing/Instrumental Registration</h3>
<fieldset>
  No. of Partcipants: <input id="nos" required="required"  placeholder="1" type="number" name="no" max="1" min="1">
  <br/><input type="hidden" name="event" value="Solo">
</fieldset>
          <fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p1[]" id="p1"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p1[]" id="p1"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p1[]" id="p1">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p1[]" id="p1" /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p1[]" id="p1"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p1[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p1[]" placeholder="Jai Hind College"/><br>

        </fieldset>



          



        <input type="submit" value="Submit" class="submit button special" />

          

      </form>

      </div>

      <div id="duet-form">

      <form method = "post" action = "amnightval.php" id="duetform" class="forval"  >
<h3>Duet Singing/Instrumental Registration</h3>
 <fieldset>
 No. of Partcipants: <input id="nod" required="required" value="2" placeholder="1" type="number" name="no" max="2" min="2"><br/>
  <br/><input type="hidden" name="event" value="Duet">
</fieldset>
          Participant 1<br/>

          <fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p1[]" id="p1"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p1[]" id="p1"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p1[]" id="p1">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p1[]" id="p1" /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p1[]" id="p1"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p1[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p1[]" placeholder="Jai Hind College"/><br>

        </fieldset>

Participant 2<br/>

<fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p2[]" id="p2"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p2[]" id="p2"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p2[]" id="p2">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p2[]" id="p2" /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p2[]" id="p2"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p2[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p2[]" placeholder="Jai Hind College"/><br>

        </fieldset>

          



        <input type="submit" value="Submit" class="submit button special" />

          

      </form>

        

      </div>

      <div id="beatboxing-form">



        <form method = "post" action = "amnightval.php" id="beatboxingform" class="forval">
<h3>Beat-Boxing Registration</h3>
        <fieldset>
  No. of Partcipants: <input id="nob" required="required"  placeholder="1" type="number" name="no" max="2" min="1">
  <br/><input type="hidden" name="event" value="Beat-Boxing">
</fieldset>

          Participant 1<br/>

          <fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p1[]" id="p1"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p1[]" id="p1"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p1[]" id="p1">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p1[]" id="p1"  /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p1[]" id="p1"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p1[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p1[]" placeholder="Jai Hind College"/><br>

        </fieldset>

Participant 2<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p2[]" id="pbb21"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p2[]" id="pbb22"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p2[]" id="pbb23">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p2[]" id="pbb24"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p2[]" id="pbb25"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p2[]" placeholder="eg: TYBA" id="pbb26"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p2[]" placeholder="Jai Hind College" id="pbb27"/><br>

        </fieldset>

          



        <input type="submit" value="Submit" class="submit button special" />
        </form>

      </div>

      <div id="band-form">

        <form method = "post" action = "amnightval.php" name="bandform" id="bandform" class="forval">
        <h3>Band Registration</h3>
        <fieldset>
  No. of Partcipants: <input id="noba" required="required"  placeholder="3" type="number" name="no" max="6" min="3">
  <br/><input type="hidden" name="event" value="Band">
</fieldset>

          Participant 1<br/>

          <fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p1[]" id="p1"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p1[]" id="p1"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p1[]" id="p1">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p1[]" id="p1" /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p1[]" id="p1"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p1[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p1[]" placeholder="Jai Hind College"/><br>

        </fieldset>

Participant 2<br/>

<fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p2[]" id="p2"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p2[]" id="p2"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p2[]" id="p2">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p2[]" id="p2" /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p2[]" id="p2"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p2[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p2[]" placeholder="Jai Hind College"/><br>

        </fieldset>

          Participant 3<br/>

<fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p3[]" id="p3"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p3[]" id="p3"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p3[]" id="p3">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p3[]" id="p3" /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p3[]" id="p3"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p3[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p3[]" placeholder="Jai Hind College"/><br>

        </fieldset>

        Participant 4<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p4[]" id="pb41"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p4[]" id="pb42"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p4[]" id="pb43">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p4[]" id="pb44"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p4[]" id="pb45"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p4[]" placeholder="eg: TYBA" id="pb46"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p4[]" placeholder="Jai Hind College" id="pb47"/><br>

        </fieldset>

        Participant 5<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p5[]" id="pb51"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p5[]" id="pb52"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p5[]" id="pb53">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p5[]" id="pb54"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p5[]" id="pb55"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p5[]" placeholder="eg: TYBA" id="pb56"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p5[]" placeholder="Jai Hind College" id="pb57"/><br>

        </fieldset>

        Participant 6<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p6[]" id="pb61"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p6[]" id="pb62"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p6[]"  id="pb63">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p6[]"  id="pb64"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p6[]" id="pb65"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p6[]" placeholder="eg: TYBA" id="pb66"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p6[]" placeholder="Jai Hind College" id="pb67"/><br>

        </fieldset>



        <input type="submit" value="Submit" class="submit button special" />
        </form>


      </div>

      <div id="capella-form">

       <form method = "post" action = "amnightval.php" id="acapellaform" class="forval">
<h3>A Capella Registration</h3>
        <fieldset>
  No. of Partcipants: <input id="noc" required="required"  placeholder="2" type="number" name="no" max="12" min="2">
  <br/><input type="hidden" name="event" value="ACapella">
</fieldset>
          Participant 1<br/>

          <fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p1[]" id="p1"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p1[]" id="p1"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p1[]" id="p1">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p1[]" id="p1"  /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p1[]" id="p1"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p1[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p1[]" placeholder="Jai Hind College"/><br>

        </fieldset>

Participant 2<br/>

<fieldset>

     Full Name: 

        <input required = "required" data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p2[]" id="p2"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input required = "required" data-validate-words = "2" type = "number" name = "p2[]" id="p2"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p2[]" id="p2">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input required = "required" placeholder = "email@example.com" type = "email" name = "p2[]" id="p2"  /><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input required = "required" placeholder = "9123456789" type = "text" name = "p2[]" id="p2"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input required="required" data-validate-words="2" type="text" name="p2[]" placeholder="eg: TYBA"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input required="required" type="text" name="p2[]" placeholder="Jai Hind College"/><br>

        </fieldset>

          Participant 3<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p3[]" id="pc31"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p3[]"  id="pc32"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p3[]"  id="pc33">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p3[]"  id="pc34"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p3[]"  id="pc35"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p3[]" placeholder="eg: TYBA"  id="pc36"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p3[]" placeholder="Jai Hind College"  id="pc37"/><br>

        </fieldset>

        Participant 4<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p4[]"  id="pc41"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p4[]" id="pc42"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p4[]" id="pc43">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p4[]" id="pc44"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p4[]" id="pc45"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p4[]" placeholder="eg: TYBA" id="pc46"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p4[]" placeholder="Jai Hind College" id="pc47"/><br>

        </fieldset>

        Participant 5<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p5[]"  id="pc51"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p5[]" id="pc52"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p5[]" id="pc53">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p5[]" id="pc54"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p5[]" id="pc55"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p5[]" placeholder="eg: TYBA"  id="pc56"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p5[]" placeholder="Jai Hind College" id="pc57"/><br>

        </fieldset>

        Participant 6<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p6[]"  id="pc61"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p6[]" id="pc62"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p6[]" id="pc63">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p6[]" id="pc64"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p6[]" id="pc65"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p6[]" placeholder="eg: TYBA" id="pc66"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p6[]" placeholder="Jai Hind College" id="pc67"/><br>

        </fieldset>

        Participant 7<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p7[]" id="pc71"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p7[]" id="pc72"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p7[]" id="pc73">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p7[]" id="pc74"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p7[]" id="pc75"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p7[]" placeholder="eg: TYBA" id="pc76"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p7[]" placeholder="Jai Hind College" id="pc77"/><br>

        </fieldset>

        Participant 8<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p8[]" id="pc81"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p8[]" id="pc82"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p8[]" id="pc83">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p8[]" id="pc84"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p8[]" id="pc85"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p8[]" placeholder="eg: TYBA" id="pc86"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p8[]" placeholder="Jai Hind College" id="pc87"/><br>

        </fieldset>

        Participant 9<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p9[]" id="pc91"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p9[]" id="pc92"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p9[]" id="pc93">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p9[]" id="pc94"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p9[]" id="pc95"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p9[]" placeholder="eg: TYBA" id="pc96"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p9[]" placeholder="Jai Hind College" id="pc97"/><br>

        </fieldset>

        Participant 10<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p10[]" id="pc101"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p10[]" id="pc102"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p10[]" id="pc103">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p10[]" id="pc104"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p10[]" id="pc105"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p10[]" placeholder="eg: TYBA" id="pc106"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p10[]" placeholder="Jai Hind College" id="pc107"/><br>

        </fieldset>

        Participant 11<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p11[]" id="pc111"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p11[]" id="pc112"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p11[]" id="pc113">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p11[]" id="pc114"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p11[]" id="pc115"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p11[]" placeholder="eg: TYBA" id="pc116"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p11[]" placeholder="Jai Hind College" id="pc117"/><br>

        </fieldset>

        Participant 12<br/>

<fieldset>

     Full Name: 

        <input data-validate-words = "2" placeholder = "FirstName LastName" type = "text" name = "p12[]" id="pc121"/><br>

        </fieldset>



          <fieldset>

        Age: 

        <input data-validate-words = "2" type = "number" name = "p12[]" id="pc122"/><br>

</fieldset>

<br>

          <fieldset>

      Sex: 

        <select name = "p12[]" id="pc123">

            <option value = "M">Male</option>

            <option value = "F">Female</option>

        </select><br><br>

</fieldset>



          <fieldset>

         Email: 

        <input placeholder = "email@example.com" type = "email" name = "p12[]" id="pc124"/><br>

         </fieldset>



          <fieldset>

         Phone: 

        <input placeholder = "9123456789" type = "text" name = "p12[]" id="pc125"/><br>

         </fieldset>





          <fieldset>

     Course: 

        <input data-validate-words="2" type="text" name="p12[]" placeholder="eg: TYBA" id="pc126"/><br>

         </fieldset>





          <fieldset>

     College Name:

        <input type="text" name="p12[]" placeholder="Jai Hind College" id="pc127"/><br>

        </fieldset>



        <input type="submit" value="Submit" class="submit button special" />
        </form>

      </div>

        



    </div>



    



</div>



                                </div>



                                </section>



            <!-- Footer -->



                <footer id="footer">                                        <ul>                                                <li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>                        <li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>                        <li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>                     <li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>                    </ul>               </footer>







        </div>



        </body>



</html>
*/?>