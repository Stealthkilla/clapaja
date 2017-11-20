
<!DOCTYPE html>
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		
		<title>Zitate | Hinzufügen</title>
		
		<link href="css/layout.css" type="text/css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div id="zitatbox">
			<h1>Zitate | Hinzufügen</h1>
			
			<form name="zitat">
				<form method="post" action=<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="utf-8">
				<p><label>Zitat: <input type="text" name="zitat" class="zitat" autofocus></label></p>
		        <p><label>Autor: <input type="text" name="author" class="zitat"></label></p>
		        <p><label>Geburtsdatum: <input type="date" name="birthdate" class="zitat"></label></p>
		        <p><label>Todesdatum: <input type="date" name="deathdate" class="zitat"></label></p>
		        
		        <p><input type="submit" name="senden" value="Hinzufügen" class="zitat"></p>
			</form>
		</div>
	</body>
</html>
