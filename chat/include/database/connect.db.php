<?php
     $db_host='localhost';
     $db_user ='root';
     $db_pass= '';
     $db_name='chat';
     if ($connection=mysql_connect($db_host,$db_user,$db_pass)) {
      $a[]= 'Connected to Database server....';


     if (     $database=mysql_select_db($db_name,$connection) ) {
        $a[]= 'Database has been selected';
     } else {
       $a[]= 'Database NOT FOUND';
     }

     } else {
       $a[]= 'ERROR ! Could not connect to database!';
     }


?>