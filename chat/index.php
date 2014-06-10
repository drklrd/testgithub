<?php

  session_start();
	if(!isset($_SESSION["chatter"])) {
		header("location:login.php");
		exit();
	}

   require ('include/core.inc.php') ;

?>
<!DOCTYPE html >
<html >
      <head>
       <title> Welcome to the Chat Room </title>
       <link type ="text/css" rel = "stylesheet" href="public/css/main.css" />
      </head>
<body>
<?php
  echo date("Y/m/d") ;
  echo " ";
  echo time ();
?>
<div id="inputer">
<div id="feedback" > Type your Name and Message below </div>
<form action="#" method="post" id="former">
      <lable> <font color = maroon >Logged in  as : <?php echo $_SESSION['chatter'];?> </font><input type="hidden" name="sender" id="sender" value = "<?php echo $_SESSION['chatter'];?>"/> </lable><br>
      <lable> Enter Message : <br> <textarea id="message" cols="40" rows="4"> </textarea></lable>  <br>

      <input type ="submit" name="send" value ="Send Message" id="send"/ >

</form>
</div>
<div id="messages" >
</div>

<script type="text/javascript" src="scripts/js/jquery-1.8.0.min.js"> </script>
<script type="text/javascript" src="scripts/js/auto_chat.js"> </script>
<script type="text/javascript" src="scripts/js/send.js"> </script>
</body>
</html>