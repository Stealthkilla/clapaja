<?php
header('Content-Type: application/json; charset=utf8');
// Datenbank Variablen
$datenbank = 'citationdb';
require_once ('inc/dbconnect.php');

// Datenbank-Abfrage Zitat abrufen
$conn = new mysqli($host, $user, $passwd, $datenbank);
$abfrage = mysqli_query($conn, "SELECT username, password FROM user");
//$abfrage = mysqli_query($conn, "SELECT citation.ID, citation.quote, author.aname, author.abirthdate FROM citation, author WHERE citation.author_idauthor=author.idauthor ORDER BY RAND() LIMIT 1");
$zitat = mysqli_fetch_assoc($abfrage);

// Verbindung trennen
mysqli_close ($conn);


echo json_encode($zitat);

?>
