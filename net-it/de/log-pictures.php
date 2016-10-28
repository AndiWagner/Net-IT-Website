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

<div class="content-wrap">
	<div class="content-div content-padding content-shadow-top">
	<div class="content-inner">
	<p><font color="#3660A8"><b>Downloads/Vorträge</b></font></p>
	<br>
	<p><a href="protocol.php">Protokolle</a> | <a href="downloads_carryforwards.php">Downloads/Vortäge</a> | <a href="log-pictures.php">Bilder</a> | <a href="log-member.php">Mitglieder</a></p>
	<br>
	<p>Bilder vom Net!-IT Event 2015</p>
	<p>Bilder vom Kletterpark beim Jahrestreffen 2014 auf Schloss Langenburg</p>
	<p>Bilder von der Mitgliederversammlung 2006</p>
	<p>Bilder vom Service Management Wochenende 2005</p>

	<p>Benutzername: <?php
		$_POST['benutzername']
		?> </p>
		
	<form action="net-it_intern.php">
	<p><button type="action">Logout</button></p>
	</form>	
		
</div>
</div>
</div>
<?php
include('footer.php');
?>
	
</body>
</html>	