<?
header("Location: shut.php");  /*<!DOCTYPE HTML>



<html>

	<head>

		<title>Malhar'15 - A Chronicle</title>

		<meta charset="utf-8" />

		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->

    <script type="text/javascript">

		$(document).ready(function() {

		$('.validateIt').ketchup();

		});

		</script>

		<style type="text/css">

		.recaptchatable * {

        margin:0px;

        padding:0px;

        border:0px;

        font-family:helvetica,sans-serif;

        font-size:8pt;

        color:black;

        position:static;

        top:auto;

        left:auto;

        right:auto;

        bottom:auto;

}

.recaptchatable {

    width: 318px;

    background-color: #fff

}



.recaptchatable tr,

.recaptchatable td {

    padding: 0;

    margin: 0;

}



.recaptchatable input[type="text"] {

    padding: 2px;

    width: 130px;

    font-size: 12px;

    background-color: #fff;

}

		</style>
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
	<a href="../index.php"><img src="../images/hicon.svg" height="130px";width="130px;" id="home_icon"></a></li>

						
		<article id="main">
			<section class="wrapper style2 container special-alt" id="scpanel">
							
									<header>
										<h2>Malhar E-Pass Registrations</h2>
									</header>
<div class="row">
							<div class="12u">			

		<script type="text/javascript">

		 var RecaptchaOptions = {

		    theme : 'clean'

		 };

 </script>

     		<form method="post" action="validate.php" class="validateIt">

	 		<span>First Name</span><input required="required" size="20" maxlength="60" placeholder="First Name" type="text" name="name" data-validate="validate(required)"/><br>

			Last Name<input required="required" size="20" maxlength="60" placeholder="Last Name" type="text" name="surname" data-validate="validate(required)"/><br>

			Email Address<input required="required" size="30" maxlength="60" placeholder="Email Address" type="text" name="email" data-validate="validate(required, email)"/><br>

			Phone Number<input required="required" size="10" maxlength="20" placeholder="9876543210" type="text" name="phone" id="phone" data-validate="validate(required, number)"/><br>

			

			College Name<input required="required" size="30" maxlength="60" placeholder="St. Xavier's College" type="text" name="college" id="college" data-validate="validate(required)"/><br>

			Gender<input style="width:2em;" type="radio" name="gender" value="Female">Female<input style="width:2em;" type="radio" name="gender" value="Male">Male<input style="width:2em;" type="radio" name="gender" value="other">Other<br><br>

			Day Selection<br><select name="epdays">

					<option value="2">Day 2</option>

					<option value="3">Day 3</option>

					<option value="4" selected="selected">Both days(Day 2 &amp; Day3)</option>

				</select><br><br>



			<?php

		          require_once('recaptchalib.php');

		          $publickey = "6Le4vvYSAAAAADKonqD3xLl1zkbosQvZ8229dgU-";

		          echo recaptcha_get_html($publickey);

        		?><br>

    	<input type="submit" class="submit button special" value="Submit">

    	</form><br/>
    	<a href="http://www.heytaxi.in" target="_blank"><img src="heytaxireg.PNG" width="100%"></a>
    	
</div></div>

								</section>
</article>

						
						
						

								<footer id="footer">										<ul>												<li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>						<li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>						<li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>						<li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>					</ul>				</footer>

		

		
</div>

</body>

</html>*/?>