<?php
  require ('../../include/database/connect.db.php') ;
  require ('../../include/functions/chat.func.php') ;
  
  if (isset ($_GET['sender']) && !empty($_GET['sender'])) {
     $sender=$_GET['sender'];

     if (isset ($_GET['message']) && !empty ($_GET['message'])) {
       $message=$_GET['message'];
       if (send_msg($sender,$message)) {

            echo "The Message was sent!";


       } else {
         echo "The Message wasn't sent";
       }
     } else {
       echo "No Message Entered !";
     }


  } else {
    echo "No Name Entered !";

  }

  ?>