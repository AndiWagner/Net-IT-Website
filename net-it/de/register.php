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
	<p><font color="#3660A8"><b>Mitglied werden</b></font></p>
<p>
<label for="firma">Firma:</label> 
<input id="firma" name="frimname">
</p><p>
<label for="anrede">Andrede:</label> 
<select name="Anrede">
<option value="Herr">Herr</option>
<option value="Frau">Frau</option>
</select>
</p><p>
<label for="name">Name*:</label> 
<input id="name" name="uname" required>
</p><p>
<label for="vorname">Vorname*:</label> 
<input id="vorname" name="vname" required>
</p><p>
<label for="anschrift">Anschrift*:</label> 
<input id="anschrift" name="aschrift" required>
</p><p>
<label for="postleitzahl">Postleitzahl:</label> 
<input id="postleitzahl" name="plz" required>
</p><p>
<label for="ort">Ort*:</label> 
<input id="ort" name="place" required>
</p><p>
<label for="land">Land*:</label> 
<input id="land" name="country" required>
</p><p>
<label for="support">Im Support seit:</label> 
<input id="support" name="supp">
</p><p>
<label for="email">E-Mail*:</label> 
<input id="email" name="mail" required>
</p>

<form href="mailto:andreas.wagner@cordaware.com">
	<button type="action">Antrag versenden</button>
</form>
<br><br>
<p><b>Die mit * markierten Felder müssen ausgefüllt werden.</b></p>

<p>Alternativ zu unserem Online Formular können Sie uns natürlich auch einen Mitgliedsantrag per Post schicken. Das Formular können Sie sich <a href="../resources/pdf/Mitgliedsantrag.pdf" target="_blank">hier</a> herunterladen.</p>

</div>
</div>
</div>
<?php
include('footer.php');
?>
	
</body>
</html>	