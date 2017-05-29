<?
header("Location: shut.php");  
/*<!DOCTYPE HTML>







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


<script type="text/javascript">

    $(document).ready(function(){

            $('#ina').click(function(){

                $('#inde_adj').slideToggle('slow');

                $('#cr_tm').slideUp('slow');

                $('#tmr').slideUp('slow');          

            });

            $('#crt').click(function(){

                $('#inde_adj').slideUp('slow');

                $('#cr_tm').slideToggle('slow');

                $('#tmr').slideUp('slow');

            });

            $('#tm').click(function(){

                $('#inde_adj').slideUp('slow');

                $('#cr_tm').slideUp('slow');

                $('#tmr').slideToggle('slow');

            });



        });



    </script>
    <script type="text/javascript">

        $(document).ready(function() {

        $('.adj_validate').ketchup();

        $('.ct_validate').ketchup();

        $('.itl_validate').ketchup();

        });

        </script>

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

                            <div class="row">

                            <div class="12u">

                                    <header>

                                        <h2>The British Parliamentary Debate</h2>

                                    </header>

        <br>

            <div class="row">

        
                <a id="ina" href="#inde_adj" class="4u re" style="
  background:#33CCCC;">

Independent Adjudicator Registration

    </a>

        <a id="crt" href="#cr_tm" class="4u re" style="
  background:#9933FF;">

        Cross Team Registration

    </a>

        <a id="tm" href="#tmr" class="4u re" style="
  background:#FF3300;">

        Team Registration

   </a>

        

       </div>

       <br><br>



    <div class="10u" id="hidden-forms">

        <div id="inde_adj"> 
        <h3>Independent Adjudicator</h3> 
          <br/>

              <form method="post" action="adjudicator_val.php" class="adj_validate">

                   <br>

                         <ol>

                            <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="name" id="name"  )/>

                            </fieldset>

                        </li>

                         <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input required="required"  size="30" placeholder="9876543210" maxlength="10" type="text" name="phone" id="phone" data-validate="validate(number)" />

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Email Address:</legend>

                                <input  required="required" placeholder="example@email.com" size="30" maxlength="60" type="text" name="email" id="email" data-validate="validate(email)"/>

                            </fieldset>

                        </li>

                       

                        <li>

                            <fieldset>

                                <legend>Name of Instituition:</legend>

                                <input required="required" placeholder="St. Xavier's College " size="50" maxlength="300" type="text" name="institution" id="institution" />

                            </fieldset>

                        </li> 
                       <li>

                            <fieldset>

                                <legend>Are you enrolled as an undergraduate student in this institution for the year academic year 2015-16?:</legend>

                                Yes <input type="radio" name="student" id="student" value="Yes">&nbsp;No <input type="radio" name="student" id="student" value="No">

                            </fieldset>

                        </li>
                         <li>

                            <fieldset>

                                <legend>Accommodation required: </legend>

                                Yes <input type="radio" name="accommodation" id="accomodation" value="Yes">&nbsp;No <input type="radio" name="accommodation" id="accommodation" value="No">

                            </fieldset>

                        </li>

                    </ol>

                    <br />

                    <input class="submit button special" type="submit" value="Submit" />

                    <hr />

                </form></div>

        <div id="cr_tm">
          <h3> Cross Team Registration</h3> 
          <br/>

                   <form class="ct_validate" method="post" action="cross_team_val.php">

                   <br>      

                         <ol>

                        

<br>*Participant 1:<br/>

                            <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="name1" id="name1"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Email Address:</legend>

                                <input  required="required" placeholder="example@email.com" size="30" maxlength="60" type="text" name="email1" id="email1" data-validate="validate(email)"/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input required="required"  size="30" placeholder="9876543210" maxlength="10" type="text" name="phone1" id="phone1" data-validate="validate(number)" />

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Name of Instituition:</legend>

                                <input  required="required" placeholder="St. Xavier's College" type="text" maxlength="300" name="col1" id="col1"  >

                            </fieldset>

                        </li>

                        <br>*Participant 2:<br/>

                       <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="name2" id="name2"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Email Address:</legend>

                                <input  required="required" placeholder="example@email.com" size="30" maxlength="60" type="text" name="email2" id="email2" data-validate="validate(email)"/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input required="required"  size="30" placeholder="9876543210" maxlength="10" type="text" name="phone2" id="phone2" data-validate="validate(number)" />

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Name of Instituition:</legend>

                                <input  required="required" placeholder="St. Xavier's College" type="text" maxlength="300" name="col2" id="col2"  ></textarea>

                            </fieldset>

                        </li>

                          <li>

                            <fieldset>

                                <legend>Accommodation required: </legend>

                                Yes <input type="radio" name="accommodationc" id="accomodationc" value="Yes">&nbsp;No <input type="radio" name="accommodationc" id="accommodationc" value="No">

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Are both participants enrolled as an undergraduate student in this institution for the year academic year 2015-16?:</legend>

                                Yes <input type="radio" name="studentc" id="studentc" value="Yes">&nbsp;No <input type="radio" name="studentc" id="studentc" value="No">

                            </fieldset>

                        </li>

                    </ol>

                    <br />

                    <input class="submit button special" type="submit" value="Submit" />

                    <hr/>

                        </form>

                        </div>

        <div id="tmr">  
        <h3>Team Registration</h3> 

            <br>

             <form class="itl_validate" method="post" action="team_val.php">

                 

                    <ul> <li>



                            <fieldset>



                                <legend>Number of slots requested:</legend><br/>



                                

                         <div class="no">

    <input type="radio" name="no_" value="1" class="radioBtn" required/>1

    <input type="radio" name="no_" value="2" class="radioBtn" required/>2

    <input type="radio" name="no_" value="3" class="radioBtn" required/>3

</div>

</fieldset>

</li>

<li>

                            <fieldset>

                                <legend>Name of Instituition:</legend>

                                <input required="required" placeholder="St. Xavier's College" type="text" maxlength="300" name="col" id="col"  ></textarea>

                            </fieldset>

                        </li>



<br>Contact Person:<br/>

                            <li>

                            <fieldset>

                                <legend>*Name:</legend>

                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="contact_person" id="contact_person"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>*Email Address:</legend>

                                <input  required="required" placeholder="example@email.com" size="30" maxlength="60" type="text" name="email" id="email" data-validate="validate(email)"/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>*Phone Number:</legend>

                                <input required="required"  size="30" placeholder="9876543210" maxlength="10" type="text" name="phone" id="phone" data-validate="validate(number)" />

                            </fieldset>

                        </li>

                        <br>Team 1:<br/>

                        <br>Participant 1:<br/>

                       <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="t1name1" id="t1name1"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input required="required"  size="30" placeholder="9876543210" maxlength="10" type="text" name="t1phone1" id="t1phone1" data-validate="validate(number)" />

                            </fieldset>

                        </li>

                        <br>Participant 2:<br/>

                       <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  required="required" placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="t1name2" id="t1name2"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input required="required"  size="30" placeholder="9876543210" maxlength="10" type="text" name="t1phone2" id="t1phone2" data-validate="validate(number)" />

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Accommodation required: </legend>

                                Yes <input type="radio" name="accommodation1" id="accomodation1" value="Yes">&nbsp;No <input type="radio" name="accommodation1" id="accommodation1" value="No">

                            </fieldset>

                        </li>

                         <li>

                            <fieldset>

                                <legend>Are both participants enrolled as an undergraduate student in this institution for the year academic year 2015-16?:</legend>

                                Yes <input type="radio" name="student1" id="student1" value="Yes">&nbsp;No <input type="radio" name="student1" id="student1" value="No">

                            </fieldset>

                        </li>


                        <br>Team 2:<br/>

                        <br>Participant 1:<br/>

                       <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="t2name1" id="t2name1"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input size="30" placeholder="9876543210" maxlength="10" type="text" name="t2phone1" id="t2phone1" />

                            </fieldset>

                        </li>

                        <br>Participant 2:<br/>

                       <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="t2name2" id="t2name2"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input size="30" placeholder="9876543210" maxlength="10" type="text" name="t2phone2" id="t2phone2" />

                            </fieldset>

                        </li>

                         <li>

                            <fieldset>

                                <legend>Accommodation required: </legend>

                                Yes <input type="radio" name="accommodation2" id="accomodation21" value="Yes">&nbsp;No <input type="radio" name="accommodation2" id="accommodation22" value="No">

                            </fieldset>

                        </li>

                         <li>

                            <fieldset>

                                <legend>Are both participants enrolled as an undergraduate student in this institution for the year academic year 2015-16?:</legend>

                                Yes <input type="radio" name="student2" id="student21" value="Yes">&nbsp;No <input type="radio" name="student2" id="student22" value="No">

                            </fieldset>

                        </li>

                        <br>Team 3:<br/>

                        <br>Participant 1:<br/>

                       <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="t3name1" id="t3name1"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input size="30" placeholder="9876543210" maxlength="10" type="text" name="t3phone1" id="t3phone1" />

                            </fieldset>

                        </li>

                        <br>Participant 2:<br/>

                       <li>

                            <fieldset>

                                <legend>Name:</legend>

                                <input  placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="t3name2" id="t3name2"  )/>

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>Phone Number:</legend>

                                <input size="30" placeholder="9876543210" maxlength="10" type="text" name="t3phone2" id="t3phone2" />

                            </fieldset>

                        </li>
                         <li>

                            <fieldset data-type="horizontal">

                                <legend>Accommodation required: </legend>

                                Yes <input type="radio" name="accommodation3" id="accomodation31" value="Yes">&nbsp;No <input type="radio" name="accommodation3" id="accommodation32" value="No">

                            </fieldset>

                        </li>

                         <li>

                            <fieldset data-type="horizontal">

                                <legend>Are both participants enrolled as an undergraduate student in this institution for the year academic year 2015-16?:</legend>

                                Yes <input type="radio" name="student3" id="student31" value="Yes">&nbsp;No <input type="radio" name="student3" id="student32" value="No">

                            </fieldset>

                        </li>

                        <li>

<br/>
<br/>

                            <fieldset>



                                <legend>Number of adjudicators: (Based on the n-1 rule)</legend>
                                 <input required="required"  size="30" placeholder="n-1" maxlength="10" type="text" name="adno" id="adno" data-validate="validate(number)" />

                              </fieldset>

                         </li>

                        <li>



                            <fieldset>



                                <legend>Name and contact numbers of adjudicators: (Based on the n-1 rule)</legend>
                                 <textarea  required="required" placeholder="John/Jane Doe - 1234567890" rows="6" cols="60" maxlength="300" name="adj" id="adj"  ></textarea>

                              </fieldset>

                         </li>



                          </ul>

                    <br />

                    <input class="submit button special" type="submit" value="Submit" />

                    <hr />

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

</html>*/