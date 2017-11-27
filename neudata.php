<?php
header('Content-Type: application/json; charset=utf8');
// Datenbank Variablen
$datenbank = 'educati3_citationdb';
require_once ('inc/db_inc.php');

$zitat = $_POST["zitat"];
$author = $_POST["author"];
$topic = $_POST["topic"];
$birthdate = $_POST["birthdate"];
$deathdate = $_POST["deathdate"];
$bio = $_POST["bio"];

function addAutor($conn, $author, $birthdate, $deathdate, $bio) {
//$abfrage = mysqli_query($conn, "SELECT citation.ID, citation.quote, author.aname, author.abirthdate FROM citation, author WHERE citation.author_idauthor=author.idauthor");
  $abfrage = mysqli_query($conn, "INSERT INTO author (aname,abirthdate,deathdate,biography)
	  							  VALUES ('".$author."',
									    '".$birthdate."',
									    '".$deathdate."',
									    '".$bio."')"
						);
  return mysql_inserted_id();
}

function addQuote($conn, $zitat, $authorId, $topic) {
$abfrage = mysqli_query($conn, "INSERT INTO citation (quote, topic, author_idauthor)
									VALUES ('".$zitat."',
										'".$topic."',
										'".$topic."')"
						);
}

// Datenbank-Abfrage Zitat abrufen
$conn = new mysqli($host, $user, $passwd, $datenbank);
//$abfrage = mysqli_query($conn, "SELECT citation.ID, citation.quote, author.aname, author.abirthdate FROM citation, author WHERE citation.author_idauthor=author.idauthor");

$authorId = addAutor($conn, $author, $birthdate, $deathdate, $bio);
addQuote($conn, $zitat, $authorId, $topic);
									
// Verbindung trennen
mysqli_close ($conn);

echo json_encode($zitat);

?>
