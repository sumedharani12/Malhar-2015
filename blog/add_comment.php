<?php

include('login.php'); 
include('session.php');
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
	<a href="../index.php"><img src="../images/hicon.png" height="130px";width="130px;" id="home_icon"></a></li>

						
		<article id="main">
			<section class="wrapper style2 container special-alt" id="scpanel">
							<div class="row">
							<div class="12u">
<h2>Comments Page</h2>
<form action="comments_val.php" method="post">
<label>Post Comment </label>
<textarea id="content" name="content" placeholder="Content" >
	
</textarea>
<input   type="text" name="username" id="username" hidden value="<?php echo $login_session; ?>" />
<input   type="text" name="postid" id="postid" value="<?php echo $_SESSION['post_id']; ?>" />

<br/>
<br><input name="submit" type="submit" value=" Submit ">
<br/>
</form>
</div></div>

								</section>
</article>

						
						
						

								<footer id="footer">										<ul>												<li><a href="https://www.facebook.com/Malharfest" class="icon circle fa-facebook fa-lg"><span class="label">Facebook</span></a></li>						<li><a href="https://www.youtube.com/user/Malharchannel" class="icon circle fa-youtube-play"><span class="label">Youtube</span></a></li>						<li><a href="https://twitter.com/Malhar2015" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>						<li><a href=" https://instagram.com/malharfest" class="icon circle fa-instagram"><span class="label">Twitter</span></a></li>					</ul>				</footer>

		

		
</div>

</body>

</html>