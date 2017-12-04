<?php
header('Content-Type: application/json; charset=utf8');
// Datenbank Variablen
$datenbank = 'educati3_citationdb';
require_once ('inc/db_inc.php');

// Datenbank-Abfrage Zitat abrufen
$conn = new mysqli($host, $user, $passwd, $datenbank);
$abfrage = mysqli_query($conn, "SELECT citation.ID, citation.quote, author.aname, author.abirthdate FROM citation, author WHERE citation.author_idauthor=author.idauthor ORDER BY RAND() LIMIT 1");

$zitat = mysqli_fetch_assoc($abfrage);



$hitCounter = $zitat[citation.ID]		
$hitAbfrage = "UPDATE citation
				SET hit = hit + 1
					WHERE ID = '$hitCounter'";
$abfrage = mysqli_query($conn, $hitAbfrage);					
// Verbindung trennen
mysqli_close ($conn);


echo json_encode($zitat);

?>
