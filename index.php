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
		<?php echo $_oCtant['phrase'];?>
	</div>
	<div id="content">
		<div id="left">
			<?php include("files/scripts/php/sidelinks/index.php"); ?>
		</div>
		<div id="main">
			<iframe id="mainiframe" frameborder="0" src="files/pages/Home.php" style="position:absolute; width:100%; height:100%; left:0px; right:0px; border-radius:5px;">
			Inception in a browser
			</iframe>
		</div>
	</div>
</body>
</html>