<!DOCTYPE html>
<html lang="de-CH">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Words here">
<meta name="language" content="DE">
<title>Zitate</title>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico"
	rel="stylesheet">
<link href="css/layout.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="backgroundId">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Zitate by ClaPaJaMa</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="active"><a id="modal_trigger" href="#modal">Login</a></li>
			</ul>
		</div>
	</nav>
	<div id="modal" class="popupContainer" style="display: none;">
						<header class="popupHeader">
							<span class="header_title">Login</span> <span class="modal_close"><i
								class="fa fa-times"></i></span>
						</header>
						<section class="popupBody">
							<! -- Here Goes all the Login and signup Forms -->
							<div class="user_login">
								<form>
									<label>Email</label> <input type="text" id="usernamefield"> 
									<br>
									 <label>Password</label><input type="password" id="passwordfield"><br>
									<div class="action_btns">
										<div class="one_half">
											<a class="btn back_btn" href="#">Back</a>
										</div>
										<div class="one_half last">
											<a class="btn btn_red" href="#">Login</a>
										</div>
									</div>
								</form>
							</div>
						
						</section>
					</div>
	<!-- Beginn of Jumbotron -->
	<div class="container">
		<div class="jumbotron vertical-center" id="messageBlock">
			<h1 id="quote"></h1>
			<h3 id="author">></h3>
			<h3 id="date">></h3>
		</div>
	</div>
</body>

<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
	integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
	crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>
