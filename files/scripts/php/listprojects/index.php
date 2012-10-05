<?php
$dirh = opendir("../../../projects/");
if(is_dir("../../../projects/"))$dir = glob("../../../projects/*");
if(is_dir("../projects/"))$dir = glob("../projects/*");
foreach($dir as $project){
	$_meta = array();
	include("" . $project . "/manifest.phpdb");
	if(is_dir("../../../projects/"))echo "<a href='../viewproject/?projectname=" . substr($project, 18) . "'>" . $_meta['projtitle'] . "</a><br>";
	if(is_dir("../projects/"))echo "<a href='../scripts/php/viewproject/?projectname=" . substr($project, 12) . "'>" . $_meta['projtitle'] . "</a><br>";

}
