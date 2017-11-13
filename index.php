<?php 
header("Content-Type: text/html; charset=utf-8; refresh:5; url=index.php");


// Datenbank Variablen
$datenbank = 'educati3_citationdb';

require_once ('inc/db_inc.php');

// Zur Datenbank verbinden
$verbindung = mysqli_connect ($host, $user, $passwd , $datenbank) or die ('Fehler mysqli_connect(): ' . mysqli_error($verbindung));
mysqli_set_charset($verbindung, "utf8");

//	Datanbank abfrage Anzahl Zitate
//$abfrage = "Count(ID), quote FROM citation AS 'number' ";
//$res = mysqli_query ($verbindung, $abfrage);
//$number = mysqli_fetch_assoc($res);

//$Id = rand(1,$number[number]);


// Datenbank-Abfrage Zitat abrufen
$abfrage = "SELECT * FROM citation WHERE ID = 1 ";
$res = mysqli_query ($verbindung, $abfrage);
$zitat = mysqli_fetch_assoc($res);

// Verbindung trennen
mysqli_close ($verbindung);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		<meta http-equiv="refresh" content="5;url=index.php">
		
		<title>Zitate</title>
		
		<link href="css/layout.css" type="text/css" rel="Stylesheet" />
	</head>
	<body>
		<div id="zitatbox">
			<h1><?php echo $zitat[quote] ?></h1>
			<h3><?php echo $zitat[author] ?></h3>
		</div>
	</body>
</html>
