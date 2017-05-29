<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

		 var RecaptchaOptions = {

		    theme : 'clean'

		 };

 </script>
</head>
<body>
<div id="main">
<div id="register">
<h2>Register Form</h2>
<form action="validator.php" method="post">
<label>Name :</label>
<input id="fname" name="fname" placeholder="Your Name" type="text"><br/>
<label>UserName :</label>
<input id="username" name="username" placeholder="username" type="text"><br/>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br/>
<label>Email:</label>
<input id="email" name="email" placeholder="abc@xyz.com" type="email"><br/>
<br/>
<br><input name="submit" type="submit" value=" Submit ">
<br/>
</form>
</div>
</div>
</body>
</html>
