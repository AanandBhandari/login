<?php

?>
<html>
<head>
</head>
<body>
	<form action="validate.php" method="POST">
		userid:<br><input type="text" name="userid" placeholder="USERID" required><br>
		userpassword:<br><input type="text" name="password" placeholder="password " required><br>
		<input type="submit" value="LOGIN">
		<br><br><br><br>
	</form>
	<form action="register.php" method="POST">
		register now!<br>

		username:<br>
		<input type="text" name="firstname" placeholder="FIRSTNAME" required><br>
		userlastname:<br><input type="text" name="lastname" placeholder="LASTNAME" required><br>
		userid:<br><input type="text" name="userid" placeholder="USERID" required><br>
		userpassword:<br><input type="text" name="password" placeholder="password" required><br>
		<input type="submit" value="Create Account">
	</form>
</body>
</html>