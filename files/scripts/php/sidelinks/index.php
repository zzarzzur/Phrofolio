<?php
//$dirh = opendir("../../../pages/");
if(is_dir("../../../pages/"))$dir = glob("../../../pages/*");
if(is_dir("./files/pages/"))$dir = glob("./files/pages/*.php");
foreach($dir as $project){
	//$_meta = array();
	//include("" . $project . "/manifest.phpdb");
	if(is_dir("../../../pages/")) echo "<a href='files/pages/" . substr($project, 15) . "' target='mainiframe'>" . substr($project, 15, -4) . "</a><br>";
	if(is_dir("./files/pages/")) echo "<a href='files/pages/" . substr($project, 14) . "' target='mainiframe'>" . substr($project, 14, -4) . "</a><br>";
}
