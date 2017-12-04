<?php
	$verbindung = mysqli_connect ($host, $user, $passwd , $datenbank) or die ('Fehler mysqli_connect(): ' . mysqli_error($verbindung));
	mysqli_set_charset($verbindung, "utf8");
?>