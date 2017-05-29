<?php
ini_set('display_errors',1);

$more_entropy=True;

$name = $_POST['fname'];

$username = $_POST['username'];

$password = $_POST['password'];

$email = $_POST['email'];

function check_email_address($email) {

	return filter_var($email, FILTER_VALIDATE_EMAIL);

}

$emailFormatFlag = check_email_address($email);



			if($emailFormatFlag)

			{

				$host = "localhost";

				$user = "root";
				$pass = "";

				$db = 'tech_blog';

				$table = 'reg_users';

				$connection = @mysqli_connect($host, $user, $pass, $db);

				if (!$connection) {

					die(mysqli_error());

				} else {

					//echo "<p>We got in the DB!!!</p>";

				}


					$query1 = ("INSERT INTO $table 

						(`name`, `username`, `password`, `email`)  

						VALUES 

						('$name', '$username', '$password', '$email')");

						if(mysqli_query($connection, $query1))
						{
 echo "Congrats";
						}
						else
						{
die();
						}

						$close_connection = mysqli_close($connection);
}

				else

			{

				$aw = 1;

				echo "<h2>Something went wrong. Please check your details.</h2>";

				if (!$emailFormatFlag)

				{

					echo "<p>The email address you entered is not valid</p>"; $aw=0;

				} 
				else{

					die();

				}

			}		
		?>