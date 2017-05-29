<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
date_default_timezone_set("Asia/Kolkata");
				$date1 = date("Y-m-d H:i:s");
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","tech_blog");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from reg_users where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
$rowIcon = mysqli_fetch_assoc($query);
$ingrediantTitle=$rowIcon['role'];
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
$sql = "UPDATE `reg_users` SET `last_login`='$date1' WHERE `username`='$username'";
mysqli_query($connection,$sql );

header("location: blog.php"); // Redirecting To Other Page
}
 else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>