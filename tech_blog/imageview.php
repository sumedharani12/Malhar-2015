<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("tech_blog") or die(mysql_error());
if(isset($_GET['uid'])) {
$sql = "SELECT image FROM post_log WHERE uid=" . $_GET['uid'];
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row3 = mysql_fetch_array($result);
header("Content-type:image/jpg " );
echo $row3["image"];
}
mysql_close($conn);
?>

<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("tech_blog") or die(mysql_error());
if(isset($_GET['uid'])) {
$sql = "SELECT image FROM post_log WHERE uid=" . $_GET['uid'];
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysql_fetch_array($result);
header("Content-type:image/jpg " );
echo $row["image"];
}
mysql_close($conn);
?>