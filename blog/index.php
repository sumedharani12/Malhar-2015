<?php
include('login.php'); // Includes Login Script

?><!DOCTYPE HTML>

<html>
	<head>
		<title>Tech Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->
	</head>
	<body class="right-sidebar">
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
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="9u 12u(mobile)" id="content">
								<article id="main">
					<header><center><h2>Tech Blog</h2></center></header>
					
						<?php


$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "tech_blog";

$db = mysqli_connect($mysql_hostname,$mysql_username, $mysql_password,$mysql_database)
or die("Something is broken");

$query = mysqli_query($db,"SELECT * FROM `post_log` where `approved`=1 order by `uid` desc ");


while($row = mysqli_fetch_assoc($query))
{
	 $art = $row['content'];
  $path=$row['linkurl'];

  echo ('<br/><div style= "border: 5px ridge black; padding:1vmax;">');
  echo ("<br>$art<br/>");
  if(!empty($row['linkurl'])){
  	echo('<a href="');echo $row['linkurl'];echo('">');echo $path; echo('</a>');}
  if(!empty($row['image']))
echo ('<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="50%" width="50%"/>');
$author = $row['username'];
$dt = $row['dttime'];

$date=date_create($dt);
 echo ("<br><small>Posted by</small><br><b>$author<b> <br>on ");echo date_format($date,"d/m/Y ");
$pid=$row['uid'];
 $query1 = mysqli_query($db,"SELECT * FROM `comments_log` where `post_id`='$pid' and `approved`='1' order by `dttime` desc ");
echo "<br/><u>Comments:</u><br/>";
while($row1 = mysqli_fetch_assoc($query1))
{
	 $con = $row1['content'];
  echo ('<br/><div style= "border: 2px dotted black; padding:2vmax;">');
  echo ("<br>$con");
$auth = $row1['username'];
$dtc=$row1['dttime'];
$date=date_create($dtc);
echo ("<br><small>Posted by</small><br><b>$auth<b> <br>on ");echo date_format($date,"d/m/Y ");
 echo ("</div>");
}
 echo ('<b>Post a comment</b> <br/><form action="com_val.php" method="post"><br><textarea id="comcontent" name="comcontent" ></textarea>');
 echo('<br/><input type="hidden" name="pid" value="');echo ($pid);echo('">');
 echo('<br/><input type="submit" value="Post a Comment" id="submit" ></form>');
 
echo ("</div><br/> ");
  }
?>
</article>
							</div>
							<div class="3u 12u(mobile)" id="sidebar">
	</div>


							</div>
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