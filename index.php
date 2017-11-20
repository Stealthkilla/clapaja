<<<<<<< HEAD
=======
<?php

header("Content-Type: text/html; charset=utf-8; refresh:5; url=index.php");


// Datenbank Variablen
$datenbank = 'educati3_citationdb';

require_once ('inc/db_inc.php');

// Zur Datenbank verbinden
//$verbindung = mysqli_connect ($host, $user, $passwd , $datenbank) or die ('Fehler mysqli_connect(): ' . mysqli_error($verbindung));
//mysqli_set_charset($verbindung, "utf8");
require_once ('inc/connect.php');

//	Datanbank abfrage Anzahl Zitate
//$abfrage = "Count(ID), quote FROM citation AS 'number' ";
//$res = mysqli_query ($verbindung, $abfrage);
//$number = mysqli_fetch_assoc($res);

//$Id = rand(1,$number[number]);


// Datenbank-Abfrage Zitat abrufen
$abfrage = mysqli_query($verbindung, "SELECT ID, quote, author, birthdate FROM citation ORDER BY RAND() LIMIT 1" );
$zitat = mysqli_fetch_assoc($abfrage);

// Verbindung trennen
mysqli_close ($verbindung);

?>

>>>>>>> 33a54e95f7c815440be76fcb061fc82ad7adb9ab
<!DOCTYPE html>
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		<title>Zitate</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
 			<div class="jumbotron vertical-center">
    		<h1 id="quote"></h1>
			<p id="author"></p>
			<p id="date"></p>
  			</div>
  		</div>
  
	</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<script>
		$.getJSON( "data.php", function(json) {
  			console.log( "JSON Data: " + json );
  			$("#quote").text(json.quote);
  			$("#author").text(json.aname);
  			$("#date").text(json.abirthdate);
		 });
 	</script>
</html>
