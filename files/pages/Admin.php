<?php
session_start();
//$final = true;
if($_SESSION['active'] == false || !$_SESSION['active']) {
$final = false;
include("../scripts/php/admin/login.php");
}else $final = true;
if($final == true) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Admin
		</title>
	</head>
	<body>
		Welcome to the admin page for Phrofolio.
		<br>
		there really isn't anything YET,
		<br>
		But I'm working on it so be patient damn it!

	</body>
</html>
<?php
}
session_write_close();
?>