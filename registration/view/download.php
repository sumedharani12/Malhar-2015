<?php

    include 'functions.php';

    verify();

    

	 //Connection to database

    mysql_connect("localhost","malharfe_admin","pwdbitch{}");

    mysql_select_db("malharfe_online__reg");



    $result = mysql_query("Select srno, name, surname, email, number, college, gender FROM epass");

    if (!$result) die('Couldn\'t fetch records');

    $num_fields = mysql_num_fields($result);



    $headers = array();



  // Creating headers for output files

    for ($i = 0; $i < $num_fields; $i++)

    {

        $headers[] = mysql_field_name($result , $i);

    }



    $fp = fopen('php://output', 'w');

    if ($fp && $result)

    {

    // name of file with date

        $filename = "malhar.csv";

         

            // Setting header types for csv file.

            header('Content-Type: text/csv');

            header('Content-Disposition: attachment; filename='.$filename);

            header('Pragma: no-cache');

            header('Expires: 0');

            fputcsv($fp, $headers);



            while ($row = mysql_fetch_row($result))

            {

                 fputcsv($fp, array_values($row));

            }

            die;

     }



	header('Location: lists.php')



?>