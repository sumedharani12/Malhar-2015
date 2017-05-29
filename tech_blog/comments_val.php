<?php
ini_set('display_errors',1);

$more_entropy=True;


$name = $_POST['username'];

$content = $_POST['content'];

$pid = $_POST['postid'];


				$host = "localhost";

				$user = "root";
				$pass = "";

				$db = 'tech_blog';

				$table = 'comments_log';
				date_default_timezone_set("Asia/Kolkata");
				$date1 = date("Y-m-d H:i:s");

				$connection = @mysqli_connect($host, $user, $pass, $db);

				if (!$connection) {

					die(mysqli_error());

				} else {

					//echo "<p>We got in the DB!!!</p>";

				}


					$query1 = ("INSERT INTO `comments_log`(`post_id`, `content`, `username`, `dttime`) VALUES ('$pid', '$content',$name', '$date1')");

						if(mysqli_query($connection, $query1))
						{
 echo "Congrats";
						}
						else
						{
die();
						}

						$close_connection = mysqli_close($connection);

		?>