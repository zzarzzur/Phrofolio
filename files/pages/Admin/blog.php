<?php
if($_POST["up"] == "Post!") {
include("../scripts/php/database/main.php");
database_add("blogs", rand(0,1000) . "!~!" . $_POST["title"] . "!~!admin!~!" . $_POST["text"]);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Admin
		</title>
	</head>
	<body>
<form action="" method="POST">
Add a new post<br>
<p>Title:<input type="text" name="title" id="title"></p><br>
<p>Text:<textarea rows="25" cols="75" name="text" id="text"></textarea></p>
<input type="submit" name="up" id="up" value="Post!">
</form>
	</body>
</html>
