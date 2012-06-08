<?php session_start(); ?>

<h1>Change password</h1>

<?php
	if($_GET['newpass']=$_SESSION['password']){
		$file = file_get_contents("passwords.php");
		$file = str_replace("\"".$_SESSION['password']."\"","\"".$_GET['newpass']."\"",$file);
		file_put_contents("passwords.php", $file);
		session_destroy();
		header('Location: login.php');
	}
	else {
		echo '<p>The current password you provided is incorrect. Your password has not been changed.</p>';
	}
?>