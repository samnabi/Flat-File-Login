<?php session_start(); ?>

<h1>Change password</h1>

<?php
	$file = file_get_contents("passwords.php");
	$file = str_replace("\"".$_SESSION['password']."\"","\"".$_GET['newpass']."\"",$file);
	file_put_contents("passwords.php", $file);
	session_destroy();
?>

<p>Your password has been changed from <?php echo $_SESSION['password']; ?> to <?php echo $_GET['newpass']; ?>. Please <a href="login.php">log in again</a> with your new password.</p>