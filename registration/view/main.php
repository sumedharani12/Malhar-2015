<?php

	include 'functions.php';

	sec_session_start();

	if(login_check() == true)

		header('Location: lists.php');

?>

<!DOCTYPE HTML>



<html>



	<head>



		<title>Malhar 2014 - A Renaissance</title>

		<script src="../../js/jquery.min.js"></script><!--JQUERY LIBRARY-->

    	<script src="../../js/jquery.dropotron.min.js"></script><!--Navigation Plugin-->

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



	<script type="text/javascript" src="../../js/sha512.js"></script>

	<script type="text/javascript" src="../../js/forms.js"></script>

</head>

<body class="loading">



    

	<div id="loader"></div>

	<!-- Header -->



		<a id="home"></a>



			<header id="header" class="alt">



				<h1><a href="http://malharfest.org"><img src="../../images/nav-logo.png"></a></h1>



				<?php include('../../inc/nav3.php'); ?>


			</header>

				<!-- Main -->

					<article id="comps_application">



					<!-- Conclave -->



					<section class="wrapper container special">



					



						<header class="major">



							<h2>Malhar Registrations</h2>



						</header>

    <div class="row 4u" style="margin: 0 auto;">

	        <h1>Login to see registrations</h1>

			<?php

			if(isset($_GET['error'])) { 

			   echo '<div class="message">Please log in.</div><br /></p>';

			}

			if(isset($_GET['up'])) { 

			   echo '<div class="message">Invalid username or password.</div><br /></p>';

			}

			?>

			<form method="post" action="login.php" name="login_form">

				<label>Username: </label>

				<input type="text" name="email" />

				<br />

				<label>Password : </label>

				<input type="password" name="password" id="password" />

				<br />

				<br />

				<input type="button" value="Login" class="submit button special" onclick="formhash(this.form, document.getElementById('password'));" />

			</form>

		</div>

    </section>

</article>

</body>

</html>

