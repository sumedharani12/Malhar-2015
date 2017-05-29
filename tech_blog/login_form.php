<?php
include('login.php');
 // Includes Login Script
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login Page</title>
		<meta charset="utf-8" />
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />

		<link rel="stylesheet" href="assets/css/responsiveslides.css">
		<link rel="stylesheet" href="assets/css/themes.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/init.js"></script>
			<script src="assets/js/responsiveslides.min.js"></script>
<script>
    
    $(function () {

		
     
      $("#slider1").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 800,
        maxwidth: 400,
		maxheight: 450,
		minwidth: 400,
		minheight: 450,
        namespace: "centered-btns"

      });
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 800,
        maxwidth: 400,
		maxheight: 450,
		minwidth: 400,
		minheight: 450,
        namespace: "centered-btns"
      });
    });
  </script>
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
						<div class="12u"><header>
							<h3>Login Form</h3></header>
						<div class="row">
							
						
						<div class="6u">
						<center>
								<div class="rslides_container">
								  <ul class="rslides" id="slider1">
								   <li><img src="images/1.png" alt="Creatives"></li>
								  <li><img src="images/2.png" alt="Hardware"></li>
								  <li><img src="images/3.png" alt="PnD"></li>
								  <li><img src="images/4.png" alt="Websites"></li>
								  </ul>
								  </div>
								  </center>
							
						</div>
						<div class="6u">
						
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
				</div></div>
</article>


							</div>
</div>

		<!-- Scripts -->
		

	</body>
</html>