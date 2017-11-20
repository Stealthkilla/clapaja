<!DOCTYPE html>
<html lang ="de-CH">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A website who shows various zitate with author">
		<meta name="language" content="DE">
		<title>Zitate</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
 			<div class="jumbotron vertical-center">
    		<h1 id="quote"></h1>
			<p id="author"></p>
			<p id="date"></p>
  			</div>
  		</div>
  
	</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<script>
		$.getJSON( "data.php", function(json) {
  			console.log( "JSON Data: " + json );
  			$("#quote").text(json.quote);
  			$("#author").text(json.aname);
  			$("#date").text(json.abirthdate);
		 });
 	</script>
</html>
