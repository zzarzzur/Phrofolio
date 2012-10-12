<?php
include("../../scripts/php/database/main.php");
$databases = glob("*/");
foreach($databases as $base) {
	if(is_dir($base)) {
	echo substr($base, 0, -1);
	echo "<table border='1'>";
	$tables = glob($base . "*");
	foreach($tables as $table) {
		echo "<tr>";
		$dat = explode("\n", file_get_contents($table));
		foreach($dat as $club) {
			echo "<td>";
			echo $club;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
}
$ar = database_test("users", "Username:Barney;password:troll;role:admin;", 0);
print_r($ar);
foreach($ar as $col=>$data){
	echo $col . "<br>";
}
database_add("access", time() . "!~!local");
	
