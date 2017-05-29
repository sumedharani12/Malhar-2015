<?php
ini_set('display_errors',1);

$more_entropy=True;


$name = $_POST['username'];

$content = $_POST['content'];

$pcurl = $_POST['pcurl'];

/*$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
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

						(`username`, `content`, `dttime`, `image_path`,`image`, `linkurl`)  

						VALUES 

						('$name', '$content', '$date1','$target_file','{$imgData}','$pcurl')");

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
