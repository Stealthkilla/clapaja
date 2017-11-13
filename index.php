<?php 
header("Content-Type: text/html; charset=utf-8");

// Datenbank Variablen
$datenbank = 'citationdb';
$abfrage = 'SELECT * FROM citation';

require_once ('inc/db_inc.php');

// Zur Datenbank verbinden
$verbindung = mysqli_connect ($host, $user, $passwd , $datenbank) or die ('Fehler mysqli_connect(): ' . mysqli_error($verbindung));
mysqli_set_charset($verbindung, "utf8");

// Datenbank-Abfrage
$res = mysqli_query ($verbindung, $abfrage);

// Verbindung trennen
mysqli_close ($verbindung);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		
		<title>Zitate</title>
		
		<link href="css/layout.css" type="text/css" rel="Stylesheet" />
	</head>
	<body>

	</body>
</html>
