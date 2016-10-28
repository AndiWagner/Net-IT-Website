<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../resources/css/main.css">
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300" /> 
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400" /> 
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700" />
</head>

<body>
<link rel="stylesheet" href="../resources/css/header.css">
<?php 
include('header.php');
?>

<?php 
if(isset($errorMessage)) {
	echo $errorMessage;
}
?>


<div class="content-wrap">
	<div class="content-div content-padding content-shadow-top">
	<div class="content-inner">
	<img src="../images/cartoon.png">
	<img src="../images/cartoon.png">
	<img src="../images/cartoon.png">
	<img src="../images/cartoon.png">
	<br>
	<p>Den  Post Report von der Service Desk World 2016 finden Sie im internen Bereich.</p>
	<br>
	<br>
	<p><font color="#3660A8"><b>Anmeldung</b></font></p>
	<p>Der Interne Bereich von net!IT ist nur für Mitglieder verfügbar.<br>
	<a href="register.php">Hier</a> können Sie Ihre Mitgliedschaft beantragen.<br>
	Sollten Sie Mitglied sein und noch nicht über eine Benutzerkennung verfügen, so wenden Sie sich bitte an den Administrator: <a href="mailto:admin@net-it.info">admin(at)net-it.info</a></p>
	<br>
	
	<form action="log-netit-intern.php" method="post">
	<p><label for="username">Benutzername: </label><input id="loginname" name="loginname" type="text"></p>
	<p><label for="password">Passwort: </label><input id="loginpassword" name="loginpassword" type="password"></p>
	<p><button name="login" value="Login" type="submit">Login</button></p>
	</form>
	
</div>
</div>
</div>

<?php
include('footer.php');
?>
	
</body>
</html>	