<?php
?>
<!DOCTYPE html>
<html>
<head>
<?php
//$dirh = opendir("../../../projects/");
//$dir = glob("../../../projects/*");
	$_meta = array();
	include("../../../projects/" . $_GET["projectname"] . "/manifest.phpdb");
	echo "<script type='text/javascript'>";
	if($_meta['enlarge'] == true) echo "parent.stageEnlarge();";

	echo "</script>";
?>
</head>
	<body style="<?php if($_meta["centerdata"] == true) echo "text-align:center;"?>">
		<h2><?php echo $_meta['projtitle']; ?> </h2>
		<iframe src="../../../projects/<?php echo $_GET["projectname"]; ?>/" frameborder="0" style="top:45px; bottom:0px; position:absolute; left:0px; width:100%;">
		</iframe>
	</body>
</html>
