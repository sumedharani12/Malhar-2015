<?php
include('login.php');
include('session.php');

$content=$_POST['comcontent'];
$pid=$_POST['pid'];
  $user=$_SESSION['login_user'];
  

date_default_timezone_set("Asia/Kolkata");
				$date1 = date("Y-m-d H:i:s");
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","tech_blog");

   $sql = "INSERT INTO `comments_log`(`post_id`, `content`, `username`, `dttime`) VALUES ('$pid','$content','$user','$date1')";
 if (!empty($user)){
 if(!empty($content)){
if (mysqli_query($connection,$sql ))
echo("Congrats");
}
else
	echo "Empty content. Try posting again <a href='index.php'>here.</a>";
 }
 else 
 	header('Location: login_form.php');
?>