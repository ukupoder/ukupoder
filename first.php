<?php

/*
var_dump($_GET);
echo "<br>";
var_dump($_POST);
*/

$signupEmailError = "";

if (isset($_POST["signupEmail"]))
{
	if (empty($_POST["signupEmail"]))
	{
		$signupEmailError= "Väli on kohustuslik";
		
	}
	
}

$signupPasswordError = "";

if (isset($_POST["signupPassword"]))
{
	if (empty($_POST["signupPassword"]))
	{
		$signupPasswordError= "Väli on kohustuslik";
		
	}
	
}


?>


<!DOCTYPE html>


<html>
	<head>
		<title>Sisselogiming</title>
	</head>
	<body>
	<h1> sign in </h1>
		<form method="POST">
			<input name="loginEmail" placeholder="näide@näide.ee" type="email"><br>
			<input name="loginPassword" placeholder="parool" type="password"><br>
			
			<input type="submit" value="Submit">
		</form>
		
		<h1> sign up </h1>
		<form method="POST">
			<input name="signupEmail" placeholder="näide@näide.ee" type="email"><?php echo $signupEmailError; ?><br>
			<input name="signupPassword" placeholder="parool" type="password"><?php echo $signupPasswordError; ?><br>
			
			<input type="submit" value="Create">
		</form>
		
	</body>

</html>