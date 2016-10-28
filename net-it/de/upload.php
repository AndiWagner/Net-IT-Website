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
	
<?php
	$db_host = "localhost";
	$db_datenbank = "net!it";
	$db_username = "cordaware";
	$db_password = "cwnetit2016";
	
	SESSION_START();
	
	$link = mysql_connect("localhost","cordaware","cwnetit2016");
	
	if(!$link)
	{
		die("Keine Datenbankverbinung möglich: " . mysql_error());
	}	

	$datenbank = mysql_select_db($db_datenbank, $link);
	
	if(!$datenbank)
	{
		echo "Kann die Datenbank nicht benutzen: " - mysql_error();
		mysql_close($link);
		exit;
	}
	
if($sent)
{
	echo "Pfad zur temporären Datei: $neuedatei";
	echo "<br>Größe: $neudatei_size";
	echo "<br>Originalname: $neuedatei_name";
	echo "<br>Typ: $neuedatei_type";
	if(!file_exists($uverz)){mkdir($uverz,0755);}
	if($neuedatei_size>100000)
	{$fehler="<br>Die Datei ist zu groß";}
	if($neuedatei_type == "image/jpg" OR $neuedatei_type == "image/gif" OR $neuedatei_type == "image/png")
	{$fehler.="<br>Der Dateityp ist nicht zulässig";}
	if(!$fehler)
	{
		$name=uniqid("");
		switch($neuedatei_type)
		{
			case "image/jpeg":
			$name.=".jpg";
			break;
			case "image/gif";
			$name.=".gif";
			break;
			case "image/png";
			$name.=".png";
			break;
		}	
		$name=$uverz."/".$name;
		copy($neuedatei, $name);
	}
	else
	{echo "<h2><font color=red> $fehler </font></h2>";} }
	echo "<h2>Bisher hochgeladene Dateien</h2>";
	$i=1;
	$verzeichnis=opendir($uverz);
	while ($file = readdir($verzeichnis))
	{
		if(is_file($uverz."/".$file))
		{
			echo "<a href='$uverz/$file' target='_blank'>Datei $i</a><br>"; $i++;
		}	
	}	
	closedir($verzeichnis);
?>	
	
	<p><font color="#3660A8"><b>Datei hochladen</b></font></p>
	<form action='<?php echo $PHP_SELF; ?>' method="post" enctype="multipart/form-data">
	<input type="hidden" name="sent" value="1">
	<p>Datei auswählen</p>
	<input type="text" type="file" name="neuedatei">
	<input type="file" name="neuedatei">
	<br>
	<br>
	<input type="submit">
	<input type="reset" value="Zurücksetzen">
	</form>

</div>
</div>
</div>
<?php
include('footer.php');
?>
	
</body>
</html>	