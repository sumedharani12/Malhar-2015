<?php
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
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/jquery.ketchup.css" />
    <script type="text/javascript" src="assets/js/jquery.ketchup.all.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.ketchup.validations.js"></script>
    <script type="text/javascript" src="assets/js/jquery.ketchup.helpers.js"></script>
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
<h2>Post Page</h2>
<form action="post_val.php" method="post" enctype="multipart/form-data" name="postform" class="postform">
<label>Post Content </label>
<textarea id="content" name="content" placeholder="Your Content" ></textarea><br/>

<input   type="hidden" name="username" id="username" value="<?php echo $login_session; ?>" />
<label>Insert a link/url</label>
<input type="url" name="pcurl" id="pcurl" > 
<label>Upload a picture</label>
Select image to upload:
    <input type="file" name="userImage" id="userImage" accept="image/*">
<br/>
<br><input name="submit" type="submit" value=" Submit " >
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