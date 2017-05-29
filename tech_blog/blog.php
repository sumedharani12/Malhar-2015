<?php
include('login.php'); // Includes Login Script

?><!DOCTYPE HTML>

<html>
	<head>
		<title>Tech Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
					<center>
<span class="log">Tech Blog</span>
					</center>


				</div>

			

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="9u 12u(mobile)" id="content">
								<article id="main">
					
						<?php


$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "tech_blog";

$db = mysqli_connect($mysql_hostname,$mysql_username, $mysql_password,$mysql_database)
or die("Something is broken");

$query = mysqli_query($db,"SELECT * FROM `post_log` where `approved`=1 order by `uid` desc ");

 echo ('<div class="outer">');
while($row = mysqli_fetch_assoc($query))
{
	 $art = $row['content'];
  $path=$row['linkurl'];
  
  echo ('<br/><div id="apost" class="10u">');
 
  echo ('<div id="artpost">');
  echo("$art<br/>");
  if(!empty($row['linkurl'])){
  	echo('<a href="');echo $row['linkurl'];echo('" target="_blank">');echo $path; echo('</a>');}
  if(!empty($row['image']))
	echo ('<center><img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="50%" width="50%" /></center>');

$author = $row['username'];
$dt = $row['dttime'];

$date=date_create($dt);
 echo ("<br>--&nbsp;<b>$author<b><br/>");echo date_format($date,"d/m/Y ");
echo "</div><br/>";
$pid=$row['uid'];
 $query1 = mysqli_query($db,"SELECT * FROM `comments_log` where `post_id`='$pid' and `approved`='1' order by `dttime` desc ");
echo('<div id="com"');
echo "<br/><u>Comments:</u>";
while($row1 = mysqli_fetch_assoc($query1))
{
 
	$auth = $row1['username'];
$dtc=$row1['dttime'];$date=date_create($dtc);
	 $con = $row1['content'];
  echo ('<div id="cpost">');
  echo ("<b>$auth <b>says &#40;<span id='pt' >");echo date_format($date,"d/m/Y ");
  echo ("</span>&#41;<br>$con");echo ("</div><br/>");

}
echo ("</div>");
 echo ('<div id="foot">Post a comment<form action="com_val.php" method="post"><br><textarea rows="1" id="comcontent" name="comcontent" cols="30" placeholder="Your Comment" style="width:auto;display:inline;"></textarea>');
 echo('<input type="hidden" name="pid" value="');echo ($pid);echo('">');
 echo('&nbsp;&nbsp;<input type="submit" value="Post a Comment" id="submit"  style="width:auto;display:inline;"></form></div>'); 
echo ("</div> ");

  }echo ("</div><br/> ");
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