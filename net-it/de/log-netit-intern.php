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
	
	<script type="text/javascript" src="storage.js"></script>
	<script type="text/javascript">
	var liste = storage.getAll();
	</script>
</head>

<body>

<link rel="stylesheet" href="../resources/css/header.css">
<?php 
include('header.php');
?>

<div class="content-wrap">
	<div class="content-div content-padding content-shadow-top">
	<div class="content-inner">
	<img src="../images/cartoon.png">
	<img src="../images/cartoon.png">
	<img src="../images/cartoon.png">
	<img src="../images/cartoon.png">
	<br>
	<p>Den Post Report von der Service Desk World 2016 finden Sie im internen Bereich.</p>
	<br>
	<br>
	<p><a href="protocol.php">Protokolle</a> | <a href="downloads_carryforwards.php">Downloads/Vortäge</a> | <a href="log-pictures.php">Bilder</a> | <a href="log-member.php">Mitglieder</a></p>
	<br>
	<p>Benutzername: <?php
		echo $_POST['loginname']
		?> </p>
			
		<p><a href="upload.php">Uploads</a></p>	
			
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