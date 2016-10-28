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
	<p><font color="#3660A8"><b>Kontakt</b></font></p>
<br>
	<p><b>Netzwerk</b></p>
	<p><b>für IT Service Management e.V.</b></p>
	<p><b>c/o Metro Group Information Technology</b></p>
<br>
	<p>Metro Strasse 12</p>
	<p>40235 Düsseldorf</p>
<br>
	<table>
	<tr>
		<td>Tel.:</td>
		<td>+49 (211) 969 2748</td>
	</tr>
	<tr>
		<td>Fax:</td>
		<td>+49 (211) 2721</td>
	</tr>
		<td>Home:</td>
		<td><a href="http://www.net-it.info/" target="_blank">www.net-it.info</a></td>
	</tr>
	</table>		
	<br>
	<br>	
<p>
<label for="nachnamek">Nachname:</label> 
<input id="nachnamek" name="nnamek" required>
</p><p>
<label for="vornamek">Vorname:</label> 
<input id="vornamek" name="vnamek" required>
</p><p>
<label for="streetk">Straße:</label> 
<input id="streetk" name="strk" required>
</p><p>
<label for="postlzk">PLZ:</label> 
<input id="postlzk" name="plzk" required>
</p><p>
<label for="placek">Ort:</label> 
<input id="placek" name="ortk" required>
</p><p>
<label for="countryk">Land:</label> 
<input id="countryk" name="landk" required>
</p><p>
<label for="emailk">E-Mail:</label> 
<input id="emailk" name="mailk" required>
</p><p>
<label for="contactk">Rückantwort:</label> 
<input id="contactk" name="conk" type="checkbox">
</p><p>
<label for="commentk">E-Mail:</label> 
<textarea id="commentk" name="text" cols="35" rows="5"></textarea>
</p>

<form action="">
	<button type="action">Formular abschicken</button>
</form>

</div>
</div>
</div>
<?php
include('footer.php');
?>
	
</body>
</html>	