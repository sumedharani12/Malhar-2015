<?php

$content=$_POST['content'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","tech_blog");
if ($_POST['yes'])
   {$sql = "UPDATE `post_log` SET `approved`=1 WHERE `content`='$content'";
if (mysqli_query($connection,$sql ))
header("location: adminprofile.php");
    exit;}
  else if ($_POST['no'])
   {$sql = "UPDATE `post_log` SET `approved`='-1' WHERE `content`='$content'";
if (mysqli_query($connection,$sql ))
header("location: adminprofile.php");
    exit;}

?>