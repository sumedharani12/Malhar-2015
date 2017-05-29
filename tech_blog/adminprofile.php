<?php
include('session.php');
?>

<html>
	<head>
		<title>My profile</title>
		<meta charset="utf-8" />
		
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
					<h3>
<center><a href="add_post.php" class="button">Post an article</a></center><br/><br/></h3>
						<div class="row 200%">
							<div class="7u 12u(mobile)" id="content">
								<article id="main">
						<header ><h3  >Approve posts</h3></header>
<p><?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "tech_blog";

$db = mysqli_connect($mysql_hostname,$mysql_username, $mysql_password,$mysql_database)
or die("Something is broken");

$query1 = mysqli_query($db,"SELECT * FROM `post_log` where `approved`=0 order by `dttime` desc");

echo ('<br/><div style= "border: 5px ridge black; padding:3vmax; background:#fff; color:#000">');
while($row1 = mysqli_fetch_assoc($query1))
{
	 $art = $row1['content'];
	   $art = $row1['content'];
	   $path=$row1['linkurl'];
  echo ("<br>$art<hr>");
  echo($art);echo('</textarea>');
if(!empty($row1['linkurl'])){
  	echo('<a href="');echo $row1['linkurl'];echo('">');echo $path; echo('</a>');}
  if(!empty($row['image']))
  echo ('<img src="data:image/jpeg;base64,'.base64_encode( $row1['image'] ).'" height="50%" width="50%"/>');

$auth1 = $row1['username'];
$poid=$row1['uid'];
$dt1 = $row1['dttime'];

echo ("<br><small>Posted by</small><br><b>$auth1<b> <br><small>on $dt1</small> ");
echo ('<form action="ajax.php" method="post">');
echo('<br/><input type="hidden" name="poid" id="poid" value="');echo ($poid); echo('">');
 echo('<br/><input type="submit" value="Approve post" id="yes" name="yes">');
 echo('<input type="submit" value="Disapprove post" id="no" name="no"></form><br/>');
  }
  echo "No more posts to approve.";
   echo "</div><br/>";
?>
<hr>
</p>
</article>
							</div>
							<div class="5u 12u(mobile)" id="sidebar">
							
							<header><h3 >Approve comments</h3></header>
<p><?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "tech_blog";

$db = mysqli_connect($mysql_hostname,$mysql_username, $mysql_password,$mysql_database)
or die("Something is broken");

$query2 = mysqli_query($db,"SELECT * FROM `comments_log` where `approved`=0 order by `dttime` desc");

echo ('<br/><div style= "border: 5px ridge black; padding:3vmax; background:#fff; color:#000">');
while($row2 = mysqli_fetch_assoc($query2))
{
	 $art = $row2['content'];
  echo ("<br>$art<hr>");

$auth = $row2['username'];

$dt = $row2['dttime'];

$cid=$row2['comment_id'];

echo ("<br><small>Posted by</small><br><b>$auth<b> <br><small>on $dt</small> ");
 echo ('<form action="comajax.php" method="post">');
 echo('<br/><input type="hidden" name="cid" id="cid" value="');echo ($cid); echo('">');
echo('<br/><input type="submit" value="Approve comment" id="yes" name="yes">');
 echo('<input type="submit" value="Disapprove comment" id="no" name="no"></form><br/>');
  }
  echo "No more comments to approve.";
   echo "</div><br/>";
?>
<hr>
</p>					</div>
						</div>
							<div class="row">
							<article class="12u 12u(mobile) special">
<header>	<h3 >My posts</h3></header>
<p>	
							<?php


$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "tech_blog";

$db = mysqli_connect($mysql_hostname,$mysql_username, $mysql_password,$mysql_database)
or die("Something is broken.");
$us=$_SESSION['login_user'];
$query = mysqli_query($db,"SELECT * FROM `post_log` where `username`='$us' order by `uid` desc");


while($row = mysqli_fetch_assoc($query))
{
	 $art = $row['content'];
	  $path=$row['linkurl'];
echo ('<br/><div style= "border: 5px ridge black; padding:3vmax; background:#fff; color:#000">');
  echo ("<br>$art<hr>");
  if(!empty($row['linkurl'])){
  	echo('<a href="');echo $row['linkurl'];echo('">');echo $path; echo('</a>');}
  if(!empty($row['image']))
  echo ('<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="60%" width="50%"/>');

$dt = $row['dttime'];
$stat = $row['approved'];
 if($stat==1)
 	echo ("<br>Status: Approved");
 else if($stat==0)
 	echo ("<br>Status: In consideration");
 else
 	echo ("<br>Status: Not Approved");
 echo "</div><br/>";
  }

?>
<br/>
</p></article>
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