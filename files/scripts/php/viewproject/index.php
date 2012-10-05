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
<base href="<?php echo "../../../projects/" . $_GET["projectname"] . "/"; ?>">
</head>
	<body style="<?php if($_meta["centerdata"] == true) echo "text-align:center;"?>">
		<h2><?php echo $_meta['projtitle']; ?> </h2>
		<?php //<iframe src="../../../projects/<?php echo $_GET["projectname"]; !>/" frameborder="0" style="top:45px; bottom:0px; position:absolute; left:0px; width:100%;">?>
		<?php include("../../../projects/" . $_GET["projectname"] . "/index.php");?>
		</iframe>
	</body>
</html>
