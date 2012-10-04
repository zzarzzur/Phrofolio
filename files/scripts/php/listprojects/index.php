<?php
$dirh = opendir("../../../projects/");
$dir = glob("../../../projects/*");
foreach($dir as $project){
	$_meta = array();
	include("" . $project . "/manifest.phpdb");
	echo "<a href='../viewproject/?projectname=" . substr($project, 18) . "'>" . $_meta['projtitle'] . "</a>";
	}
