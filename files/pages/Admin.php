<?php
session_start();
//$final = true;
if($_SESSION['active'] == false || !$_SESSION['active']) {
$final = false;
include("../scripts/php/admin/login.php");
}else $final = true;
if($final == true) {
include("Admin/blog.php");
}
session_write_close();
?>
