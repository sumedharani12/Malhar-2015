<?php
include('session.php');// Includes Login Script
if ($log_role == "admin")
header("location: adminprofile.php");
else
header("location: profile.php");
?>
