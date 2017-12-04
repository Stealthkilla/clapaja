<?php
header('Content-Type: application/json; charset=utf8');
// Datenbank Variablen
$datenbank = 'educati3_citationdb';
require_once ('inc/db_inc.php');

// Datenbank-Abfrage Zitat abrufen
$conn = new mysqli($host, $user, $passwd, $datenbank);
$citationID = $_POST["id"];
$likeUpdate = "UPDATE citation
				SET like = like + 1
					WHERE ID = '$citationID'";
$abfrage = mysqli_query($conn, $likeUpdate);		

$likeAbfrage = "SELECT citation.ID, citation.quote, citation.like, citation.hit, author.aname, author.abirthdate FROM citation, author WHERE ID = '$citationID'";		
$abfrage = mysqli_query($conn, $likeAbfrage);		
// Verbindung trennen
mysqli_close ($conn);

?>
