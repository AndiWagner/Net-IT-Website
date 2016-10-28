<?php
	$db_host = "localhost";
	$db_datenbank = "net!it";
	$db_username = "cordaware";
	$db_password = "cwnetit2016";
	
	
	//Datenbankverbinung herstellen
	$link = mysql_connect($db_host,$db_username,$db_password);
	
	//Hat die Verbindung geklappt?
	if(!$link)
	{
		die("Keine Datenbankverbinung möglich: " . mysql_error());
	}	

	//Verbindung zur richtigen Datenbank herstellen
	$datenbank = mysql_select_db($db_datenbank, $link);
	
	if(!$datenbank)
	{
		echo "Kann die Datenbank nicht benutzen: " . mysql_error();
		mysql_close($link);  //Datenbank schließen
		exit;				 //Programm beenden
	}
	
	//Ist die $_POST Variable submit nicht leer?
	//dann wurden Logindaten eingegeben, die müssen wir überprüfen!
	if(!empty($_POST["submit"]))
	{	
		//Die Werte die im Loginformular eingegeben wurden "escapen",
		//damit keine Hackangriffe über den Login erfolgen können.
		$_username = mysql_real_escape_string($_POST["loginname"]);
		$_password = md5(mysql_real_escape_string($_POST["loginpassword"]));
		//Befehl für die MySQL Datenbank
		$_sql = "SELECT * FROM net!it.user WHERE 
				Benutzername='$_username' AND 
				Passwort='$_password' AND
				user_geloescht=0
			LIMIT 1";
	
	//Verbindung der beiden Tabellen der Datenbank
	$pdo = new PDO('mysql:localhost;dbname=net!it', 'cordaware', 'cwnetit2016');
	
	$statement = $pdo->prepare("SELECT login.*, login.Benutzername, login.Passwort
	FROM login LEFT JOIN user ON login.Benutzername = login.Benutzername WHERE user.Benutzername = user.Benutzername");
	$statement->execute(array('user.Benutzername = user.Benutzername'));
	
	//Prüfen, ob der User in der Datenbank existiert
	$_res = mysql_query($_sql, $link);
	$_anzahl = @mysql_num_rows($_res);
	
	//Die Anzahl der gefundenen Einträge prüfen
	if($_anzahl > 0)
	{
		echo "Der Login war erfolgreich.<br>";
		//In der Session merken, dass der User eingeloggt ist
		$_SESSION["loginname"] = 1;
		//Den Eintrag vom User in der Session speichern
		$_SESSION["user"] = mysql_fetch_array($_res, MYSQL_ASSOC);
		//Das Einlogdatum in der Tabelle setzen !
		$_sql = "UPDATE login_usernamen SET letzter_login=NOW()
				WHERE id=".$_SESSION["user"]["id"]; 
		mysql_query($_sql);	
	}
	else
		{
		echo "Die Logindaten sind nicht korrekt.<br>";
		}
	}
	mysql_close($link);
?>