<?php
	session_start();
	if(isset($_SESSION["chatter"])) {
		header("location:index.php");
		exit();
	}


?>
<?php
	 if (isset($_POST["username"])) {
	$username=preg_replace('#[^A-Za-z0-9]#i','',$_POST["username"]);


	$_SESSION["chatter"]=$username;

	header("location:index.php");
	exit();
} else 
?>

<head>
<title>LOGIN to Chat room</title>
</head>

<body>

<form id="loginform" name="loginform" method="post" action="login.php">
Username : <input name="username" type="text" id="username" />
<input type="submit" name="submit" id="submit" value="submit" />

</form>
</body>

