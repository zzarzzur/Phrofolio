<?php
function database_test($base, $guide, $lev) {
$data = explode(";", $guide);
if($base == "int") {
	$failedu = true;
	$failedp = true;
	$failedr = true;
	$username = array("Barney", "John");
	$password = array("troll", "Smith");
	$role = array("admin", "user");
	foreach($data as $dat) {
		$val = explode(":", $dat);
		if($val[0] == "username") {
			foreach($username as $user) {
				if($val[1] == $user)$failedu = false;
			}
			}
		if($val[0] == "password") {
			foreach($password as $user) {
				if($val[1] == $user)$failedp = false;
			}
			}
		if($val[0] == "role") {
			foreach($role as $user) {
				if($val[1] == $user)$failedr = false;
			}
			}
			}
			if($failedr == false && $failedu == false && $failedp == false) return true;
			else{
			if($lev == 0) return false;
			if($lev == 1){
				$er = "";
				if($failedr == true) $er.="roleerror;";
				if($failedu == true) $er.="usererror;";
				if($failedp == true) $er.="passerror;";
				}
				}
			}
			}