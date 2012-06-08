<?php require("authenticate.php"); ?>

<h1>Change password</h1>

<p>Howdy, <strong><?php echo $_SESSION['username']; ?></strong>! Type your new password below to change it.</p>

<form type="POST" action="writechangepw.php">
	<label>Current Password:
		<input name="oldpass" type="password" value="<?php echo $_SESSION['password']; ?>" />
	</label>
	<label>New Password:
		<input name="newpass" type="password" />
	</label>
	<input type="submit" value="Submit" />
</form>

