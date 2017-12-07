<?php
session_start();
if (!isset($_SESSION['userid'])) {
	header('Location:http://localhost/LOGIN/login.php');
}
?>
<html>
<head></head>
<body>
	hello <?php echo $_SESSION['userid']; ?>
	<a href="logout.php">logout</a>
</body>
</html>