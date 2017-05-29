<?php
include('login.php');
 // Includes Login Script
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">
<!-- Header -->
				<div id="header">


					<!-- Nav -->
							<?php
						if(isset($_SESSION['login_user'])){
							include('inc/nav2.php');
							header("location: index.php");
						}

						else
							include('inc/nav1.php');

							?>

				</div>

			

			<!-- Main -->
				<div class="wrapper style2">

					<article id="main" class="container special">
						
						<header>
							<h3>Login Form</h3>
							<p>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<br/>
<input name="submit" type="submit" value=" Login ">
<br/>
New User? Register <a href="register.php">here</a>
<br/>
<span><b><?php echo $error; ?></b></span>
</form></p>

				</div>



							</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>