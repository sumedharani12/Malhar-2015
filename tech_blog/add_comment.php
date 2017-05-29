<?php

ini_set('display_errors',1);
include('login.php'); 
include('session.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
<title>Post your story</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
				<?php
						if(isset($_SESSION['login_user'])){
							include('inc/nav2.php');}

						else
							include('inc/nav1.php');

							?>


				</div>

			

			<!-- Main -->
				<div class="wrapper style2">

					<article id="main" class="container special">
						
						<header>
							<p>
<h2>Comments Page</h2>
<form action="comments_val.php" method="post">
<label>Post Comment </label>
<textarea id="content" name="content" placeholder="Content" ></textarea>
<input   type="text" name="username" id="username" hidden value="<?php echo $login_session; ?>" />
<input   type="text" name="postid" id="postid" value="<?php echo $_SESSION['post_id']; ?>" />

<br/>
<br><input name="submit" type="submit" value=" Submit ">
<br/>
</form>
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