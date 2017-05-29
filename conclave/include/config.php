<?php 
$host = "localhost";
        $user = "malharfe_admin";
        $pass = "malhar2015admin";
        $db = 'malharfe_15_conclave';
          $connection = @mysql_connect($host, $user, $pass);
        $selectdb = @mysql_select_db($db, $connection);
        if (!$connection || !$selectdb) {
          die($conn_error);
        } else {
          //echo "<p>We got in the DB!!!</p>";
        }
				?>