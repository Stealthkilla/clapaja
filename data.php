<?php
header('Content-Type: application/json; charset=utf8');
// Datenbank Variablen
$host = 'cust-mysql-123-20';
require_once ('../inc/db_inc.php');

// Datenbank-Abfrage Zitat abrufen
$conn = new mysqli($host, $user, $passwd, $datenbank);
$abfrage = mysqli_query($conn, "SELECT citation.ID, citation.quote, 
	citation.like, citation.hit, author.aname, author.abirthdate FROM citation, 
	author WHERE citation.author_idauthor=author.idauthor ORDER BY RAND() LIMIT 1");

$zitat = mysqli_fetch_assoc($abfrage);



<<<<<<< HEAD
$citationID = $zitat["citation.ID"];		
=======
$citationID = $zitat["citation.ID"];	
>>>>>>> 41d15117e1a400051e17545e46d1569aa054d3ee
$hitAbfrage = "UPDATE citation
				SET hit = hit + 1
					WHERE ID = '$citationID'";
$abfrage = mysqli_query($conn, $hitAbfrage);					
// Verbindung trennen
mysqli_close ($conn);


echo json_encode($zitat);

?>
