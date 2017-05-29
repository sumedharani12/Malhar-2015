<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
	if ($ingrediantTitle == "admin")
header("location: adminprofile.php");
else
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<br/>
New User? Register <a href="register.php">here</a>
<br/>
<span><b><?php echo $error; ?></b></span>
</form>
</div>
</div>
</body>
</html>