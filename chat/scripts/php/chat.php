<?php
  require ('../../include/database/connect.db.php') ;
  require ('../../include/functions/chat.func.php') ;
  
  $messages=get_msg();
     foreach ($messages as $message) {
       echo $message['sender'].' Sent <br/ >';
       echo $message ['message'].' <br/><br/>';
     }



?>