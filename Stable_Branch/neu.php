<!DOCTYPE html>
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		<title>Hinzufügen | Zitate</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
 			<div class="jumbotron vertical-center" id="messageBlock">
				<p><label>Zitat: <input type="text" id="zitat" name="zitat" class="zitat" autofocus></label></p>
		        <p><label>Autor: <input type="text" id="author" name="author" class="zitat"></label></p>
		        <p><label>Themengebiet: <input type="text" id="topic" name="topic" class="zitat"></label></p>
		        <p><label>Geburtsdatum: <input type="date" id="birthdate" name="birthdate" class="zitat"></label></p>
		        <p><label>Todesdatum: <input type="date" id="deathdate" name="deathdate" class="zitat"></label></p>
		        <p><label>Biography: <input type="text" id="bio" name="bio" class="zitat"></label></p>
			
			<p><input type="button" value="Hinzufügen"></p>
  			</div>
  		</div>
  
	</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<script>
		$.post( "php/neudata.php", { 
			zitat: $('#zitat').value,
			author: $('#author').value,
			topic: $('#topic').value,
			birthdate: $('#birthdate').value,
			deathdate: $('#deathdate').value,
			bio: $('#bio').value
		})
		.done(function( data ) {
			alert( "Data Loaded: " + data );
		});
 	</script>
</html>
