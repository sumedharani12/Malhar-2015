<?php
ini_set('display_errors',1);

$more_entropy=True;


$name = $_POST['username'];

$content = $_POST['content'];
$content=nl2br($content);
$pcurl = $_POST['pcurl'];
$pcurl=preg_replace('/\s+/', '', $pcurl);


$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
				$host = "localhost";

				$user = "root";
				$pass = "";

				$db = 'tech_blog';

				$table = 'post_log';
				date_default_timezone_set("Asia/Kolkata");
				$date1 = date("Y-m-d H:i:s");

				$connection = @mysqli_connect($host, $user, $pass, $db);
 
				if (!$connection) {

					die(mysqli_error());

				} else {

					//echo "<p>We got in the DB!!!</p>";

				}
				if(!empty($target_file)){
$content=$content.'<br/> <img src="'.$target_file.'" height="30%" width="50%"><hr>';} 



					$query1 = ("INSERT INTO $table 

						(`username`, `content`, `dttime`, `image`, `linkurl`)  

						VALUES 

						('$name', '$content', '$date1','{$imgData}','$pcurl')");

						if(mysqli_query($connection, $query1))
						{
 echo "Congrats";
 $sql = "UPDATE `reg_users` SET `posts`=(`posts`+1) WHERE `username`='$name'";
mysqli_query($connection,$sql );
header("location: index.php");
						}
						else
						{
die();
						}

						$close_connection = mysqli_close($connection);


?>
