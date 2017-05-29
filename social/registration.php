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



			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->



			<script src="../js/main.js"></script>
			<script src="script.js"></script>

<style>#home_icon{position:fixed;top:1vmin;left: 0;}



	</style>

			
<link rel="stylesheet" href="../css/loadmain.css">
  <script src="../js/modernizr-2.6.2.min.js"></script>
  <script src="../js/main.js"></script>


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

										<h2>Register for Social Cause</h2>

									</header>

									<div id="sc-register">

                   <form class="default-sc" method="post" action="regval.php">

                       <span style="color:#FFCC00;">*Required Fields</span><br/>

                         <ol>

                         <li>

                            <fieldset>

                                <legend>*College ID:</legend>

                                <input   placeholder="A1b2c3" required="required" size="30" maxlength="60" type="text" name="colid" id="colid" disabled value="<?php echo $_SESSION['coid'];?>" />

                            </fieldset>

                        </li>

                         	<li>

                            <fieldset>

                                <legend>*College Name:</legend>

                                <input   placeholder="St.Xavier's College" required="required" size="30" maxlength="60" type="text" name="cname" id="cname" disabled value="<?php echo $_SESSION['coname'];?>" />

                            </fieldset>

                        </li>

                        <li>

                            <fieldset>

                                <legend>*Email Address:</legend>

                                <input   placeholder="example@email.com" required="required" size="30" maxlength="60" type="text" name="email" id="email" data-validate="validate(email)" />

                            </fieldset>

                        </li>

                         <li>

                            <fieldset>

                                <legend>Name of Participants:</legend><br/>

								*Participant 1:<input   placeholder="John Doe/Jane Doe" required="required" size="30" maxlength="60" type="text" name="p1" id="p1" />

								<br/>

								*Participant 2:<input   placeholder="John Doe/Jane Doe" required="required" size="30" maxlength="60" type="text" name="p2" id="p2"/>

								<br/>

								Participant 3:<input   placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="p3" id="p3"/>

								<br/>

								Participant 4:<input   placeholder="John Doe/Jane Doe" size="30" maxlength="60" type="text" name="p4" id="p4"/>

                            </fieldset>

                        </li>

						<li>

                            <fieldset>

                                <legend>Preferences for Social Cause:</legend><br/>

								*Preference 1:<br/>
								<div class="rating">
    <input type="radio" name="pref1" value="Food and Nutrition" required/>Food and Nutrition
    <input type="radio" name="pref1" value="Infrastructure" required/>Infrastructure
    <input type="radio" name="pref1" value="Adult Literacy" required/>Adult Literacy
    <input type="radio" name="pref1" value="Primary Education" required/>Primary Education
    <!-- more radio buttons -->
</div>

								<br/>

								*Preference 2:<br/>
								<div class="rating">
    <input type="radio" name="pref2" value="Food and Nutrition" required/>Food and Nutrition
    <input type="radio" name="pref2" value="Infrastructure" required/>Infrastructure
    <input type="radio" name="pref2" value="Adult Literacy" required />Adult Literacy
    <input type="radio" name="pref2" value="Primary Education" required />Primary Education
    <!-- more radio buttons -->
</div>

								<br/>

								*Preference 3:<br/>
								<div class="rating">
    <input type="radio" name="pref3" value="Food and Nutrition" required/>Food and Nutrition
    <input type="radio" name="pref3" value="Infrastructure" required/>Infrastructure
    <input type="radio" name="pref3" value="Adult Literacy" required/>Adult Literacy
    <input type="radio" name="pref3" value="Primary Education" required/>Primary Education
    <!-- more radio buttons -->
</div>
								<br/>

								*Preference 4:<br/>
								<div class="rating">
    <input type="radio" name="pref4" value="Food and Nutrition" required />Food and Nutrition
    <input type="radio" name="pref4" value="Infrastructure" required />Infrastructure
    <input type="radio" name="pref4" value="Adult Literacy" required />Adult Literacy
    <input type="radio" name="pref4" value="Primary Education" required />Primary Education
    <!-- more radio buttons -->

   
</div>

                            </fieldset>

                        </li>

                        

                    </ol>

                    <br />

                    <input class="submit button special" type="submit" value="Submit" id="regbtn" name="regbtn"/>

                    <hr/>

                        </form>







			</div>





</div>



								</section>

</article>

						

						

						



								<footer id="footer">										<ul>												<li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>						<li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>						<li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>						<li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>					</ul>				</footer>



		



		




</div>
</body>



</html>*/