<?php

$content=$_POST['content'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","tech_blog");

   $sql = "UPDATE `comments_log` SET `approved`=1 WHERE `content`='$content'";
if (mysqli_query($connection,$sql ))
header("location: adminprofile.php");
    exit;

?>