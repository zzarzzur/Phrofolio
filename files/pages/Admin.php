<?php
session_start();
if($_SESSION['active'] == false || !$_SESSION['active']) {
include("../scripts/php/admin/login.php");
}
session_write_close();
?>