<?php
header('Content-Type: application/json; charset=utf8');
// Datenbank Variablen
$host = 'cust-mysql-123-20';
require_once ('../inc/db_inc.php');

$zitat = $_POST["zitat"];
$author = $_POST["author"];
$topic = $_POST["topic"];
$birthdate = $_POST["birthdate"];
$deathdate = $_POST["deathdate"];
$bio = $_POST["bio"];

// Datenbank-Abfrage Zitat abrufen
$conn = new mysqli($host, $user, $passwd, $datenbank);
//$abfrage = mysqli_query($conn, "SELECT citation.ID, citation.quote, author.aname, author.abirthdate FROM citation, author WHERE citation.author_idauthor=author.idauthor");
$abfrage = mysqli_query($conn, "INSERT INTO citation, author
									VALUE citation.quote = '".$zitat."',
										author.aname = '".$author."',
										citation.topic = '".$topic."',
										author.abirthdate = '".$birthdate."',
										author.deathdate = '".$deathdate."',
										author.biography = '".$bio."'
									WHERE citation.author_idauthor=author.idauthor");
// Verbindung trennen
mysqli_close ($conn);

echo json_encode($zitat);

?>
