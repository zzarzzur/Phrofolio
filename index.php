<?php
include("files/config/main.phpdb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title id="title"><?php echo $_oCtant['title']; ?></title>
	<link href="files/themes/<?php echo $_oCtant['theme']; ?>/main.css" rel="stylesheet">
</head>
<body>
	<div id="head" name="head">
		<h<?php echo $_oCtant['headernum'];?>><?php echo $_oCtant['header'];?></h<?php echo $_oCtant['headernum'];?>>
	</div>
	<div id="content">
		<div id="main">
			<iframe id="mainiframe" frameborder="0" src="files/pages/Home.php">
			Inception in a browser
			</iframe>
		</div>
	</div>
</body>
</html>
