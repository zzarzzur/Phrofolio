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
			}else {
$dbtype = "local";
if($dbtype == "local") {
        $failedu = true;
        $failedp = true;
        $failedr = true;
if(is_dir("../../../databases"))$fbase = "../../../databases";
if(is_dir("../databases"))$fbase = "../databases";
if(is_dir("../local"))$fbase = "..";
//echo "FBASE:" . $fbase . "<br>";
        $values = explode("\n", file_get_contents($fbase . "/local/" . $base . "/0"));
//print_r($values);
	$dird = array();
	$i=0;
	$datag = glob($fbase . "/local/" . $base . "/*");
	foreach($datag as $glo) {
		if(substr($glo, -2) != "/0") {
		$dird[$i] = array();
		$file = explode("\n", file_get_contents($glo));
		$j=0;
		foreach($file as $tex) {
				$dird[$i][$values[$j]] = $tex;
				$j++;
				
			}
		}
		$i++;
	}
	return $dird;
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
			}
function database_add($base, $values){
if(is_dir("../../../databases"))$fbase = "../../../databases";
if(is_dir("../databases"))$fbase = "../databases";
if(is_dir("../local"))$fbase = "..";
$tables = glob($fbase . "/local/" . $base . "/*");
//echo "<br>" . $tables . "<br>";
$name = explode("/", $tables[count($tables)-1]);
//echo "<br>" . $name . "<br>";
$name = $name[count($name)-1];
//echo "<br>" . $name . "<br>";
$value = explode("!~!", $values);
//echo "<br>" . $value . "<br>";
$value = implode("\n", $value);
//echo "<br>" . $value . "<br>";
file_put_contents($fbase . "/local/" . $base . "/" . (count($tables)), $value);
//Eecho "<br>" . $fbase . "/local/" . $base . "/" . ($name+1) . "<br>";
}
