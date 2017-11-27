<!DOCTYPE html>
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		<title>Login | Zitate</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
 			<div class="jumbotron vertical-center" id="messageBlock">
    		<p><label>Benutzername: <input type="text" id="username"></label></p>
			<p><label>Passwort: <input type="password" id="password"></label></p>
			
			<p><input type="button" value="Login"></p>
  			</div>
  		</div>
  
	</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<script>
		$.getJSON( "php/logindata.php", function(json) {
  			console.log( "JSON Data: " + json );
  			$("#username").text(json.username);
  			$("#password").password(json.password);
		 });
		setInterval(function(){
			   $('#messageBlock').load(json);
			}, 1000)
 	</script>
</html>
