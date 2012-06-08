<?php require("authenticate.php"); ?>

<h1>Change password</h1>

<p>Howdy, <strong><?php echo $_SESSION['username']; ?></strong>! Your password is currently <?php echo $_SESSION['password']; ?>. Type your new password below to change it.</p>

<form type="POST" action="writechangepw.php">
	<label>New Password:
		<input name="newpass" type="password" />
	</label>
	<input type="submit" value="Submit" />
</form>

