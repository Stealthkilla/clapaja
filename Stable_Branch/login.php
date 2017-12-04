<!DOCTYPE html>
<html lang="de-CH">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
	content="A website who shows various zitate with author">
<meta name="language" content="DE">
<title>Login | Zitate</title>
<script src="js/jquery-3.2.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/layout.css" type="text/css" rel="stylesheet">
<script src="js/jquery_popup.js"></script>
</head>
<div id="mainform">

	<h2>jQuery Popup Form Example</h2>
	<!-- Required div starts here -->
	<div class="form" id="popup">
		<b>1.Onload Popup Login Form</b><br />
		<hr />
		<span>Wait for 3 second.Login Popup form Will appears.</span><br />
		<br />
		<br /> <b>2.Onclick Popup Contact Form</b>
		<hr />
		<p id="onclick">Popup</p>
		<br />
	</div>

	<!-- Right side div -->
	<div id="formget">
		<a href=https://www.formget.com/app><img src="images/formget.jpg"
			alt="Online Form Builder" /></a>
	</div>
</div>

<!--Contact Form -->
<div id="contactdiv">
	<form class="form" action="#" id="contact">
		<img src="images/button_cancel.png" class="img" id="cancel" />
		<h3>Contact Form</h3>
		<hr />
		<br /> <label>Name: <span>*</span></label> <br /> <input type="text"
			id="name" placeholder="Name" /><br /> <br /> <label>Email: <span>*</span></label>
		<br /> <input type="text" id="email" placeholder="Email" /><br /> <br />
		<label>Contact No: <span>*</span></label> <br /> <input type="text"
			id="contactno" placeholder="10 digit Mobile no." /><br /> <br /> <label>Message:</label>
		<br />
		<textarea id="message" placeholder="Message......."></textarea>
		<br /> <br /> <input type="button" id="send" value="Send" /> <input
			type="button" id="cancel" value="Cancel" /> <br />
	</form>
</div>

<!--Login Form -->
<div id="logindiv">
	<form class="form" action="#" id="login">
		<img src="images/button_cancel.png" class="img" id="cancel" />
		<h3>Login Form</h3>
		<hr />
		<br /> <label>Username : </label> <br /> <input type="text"
			id="username" placeholder="Ex -john123" /><br /> <br /> <label>password
			: </label> <br /> <input type="text" id="password"
			placeholder="************" /><br /> <br /> <input type="button"
			id="loginbtn" value="Login" /> <input type="button" id="cancel"
			value="Cancel" /> <br />

	</form>

</div>
</body>
</html>
