<?php
	header("Content-Type: text/html; charset=utf-8");

	// Session starten
	session_start();
	$meldung = '';
	
	// Funktionen zur Verhinderung von XSS und SQL-Injection
	require_once ('inc/clean_input.php');
	
?>

<!DOCTYPE html>
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		
		<title>Zitate | Login</title>
		
		<link href="css/layout.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div id="zitatbox">
			<h1>Zitate | Login</h1>
			
			<?php
				if($meldung != '') {
					print("<p>$meldung</p>");
				}
			?>
			
			<form name="login">
				<form method="post" action=<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="utf-8">
				<p><label>Name: <input type="text" name="user" class="login" autofocus></label></p>
		        <p><label>Passwort: <input type="password" name="password" class="login"></label></p>
		        
		        <p><input type="submit" name="login" value="Einloggen" class="login"></p>
			</form>
		</div>
	</body>
</html>
