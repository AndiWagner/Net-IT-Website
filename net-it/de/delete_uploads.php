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
<?php
$uverz="../upload/dateien";

if($sent==1)
{
	$name=urlcode($name);
	$pfad=$uverz."/".$name;
	@unlink($pfad);
}
echo "<h2>Bisher hochgeladene Dateien</h2>";
$i=1;
$verzeichnis=opendir($uverz);
while ($file = readdir($verzeichnis))
{
	if (is_file($uverz."/".$file))
	{
		echo "<a href='$uverz/$file' target='_blank'>Datei $i</a> - - ";
		$file=urlcode($file);
		echo "<a href='$PHP_SELF?sent=1&name=$file'>Datei $i löschen</a><br>";
		$i++;
	}		
}	
closedir($verzeichnis);
?>

</body>
</html>