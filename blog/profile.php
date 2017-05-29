<?php
include('session.php');
?>

<html>
	<head>
		<title>My profile</title>
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
<h3>
<a href="add_post.php"><button>Post an article</button></a><br/><br/></h3>
	</h3>						<h3>My posts</h3>

							<?php


$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "tech_blog";

$db = mysqli_connect($mysql_hostname,$mysql_username, $mysql_password,$mysql_database)
or die("Something is broken");
$us=$_SESSION['login_user'];
$query = mysqli_query($db,"SELECT * FROM `post_log` where `username`='$us' order by `uid` desc");


while($row = mysqli_fetch_assoc($query))
{
	 $art = $row['content'];
	  $path=$row['linkurl'];
  echo ('<br/><div style= "border: 5px ridge black; padding:3vmax;">');
  echo ("<br>$art<hr>");
  if(!empty($row['linkurl'])){
  	echo('<a href="');echo $row['linkurl'];echo('">');echo $path; echo('</a>');}
  if(!empty($row['image']))
  echo ('<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="50%" width="50%"/>');

$dt = $row['dttime'];
$stat = $row['approved'];
 if($stat==1)
 	echo ("<br>Status: Approved");
 else
 	echo ("<br>Status: Not Approved");
 echo "</div><br/>";
  }

?>
<br/>
</p>

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