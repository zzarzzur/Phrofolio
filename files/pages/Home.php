<?php
include("../scripts/php/database/main.php");
$ar = database_test("blogs", "", 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Home</title>
</head>
<body>
<?php
for($i=count($ar);$i>0;$i--) {
	echo "<div><h2>" . $ar[$i]["Title"] . "</h2>";
	echo "<div>" . $ar[$i]["Text"] . "</div>";
	echo "<p>Author:" . $ar[$i]["Author"] . "</p>";
	echo "</div><hr>";
	}
	?>
</body>
</html>
