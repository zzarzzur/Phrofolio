<?php
include("../scripts/php/database/main.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
<?php
if($_POST['action'] == "Login!") {
	if($_POST['pass'] != "" && $_POST['user'] != "") {
		if($_POST['user'] == database_pull("users", "username")){ }
	}
}else{
?>
<form id="form" name="form" action="" method="POST">
<p>Username:</p><input type="text" name="user" id="user"><br>
<p>Password:</p><input type="password" name="pass" id="pass"><br>
<input type="submit" id="action" name="action" value="Login!"><br>
</form>
<?php
}
?>
</body>
</html>