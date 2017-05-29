<?php
    include 'functions.php';
 	sec_session_start();

		if(isset($_POST['email'], $_POST['p'])) { 
		$email = $_POST['email'];
		$password = $_POST['p'];
		if(login($email, $password) == true) 
		{
			header('Location: lists.php');
	    	}
		else
		{
			header('Location: main.php?up=fail');
		}
	}
?>
