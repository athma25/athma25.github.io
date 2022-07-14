<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simulation results</title>
<style type="text/css">
<!--
li{
	list-style-type:none;
	margin-right:10px;
	margin-bottom:10px;
	float:left;
}
figcaption{
	text-align: center;
	left: 0;
	right: 0;
	bottom: 0px;
	padding: 0 0 50px 30px;
}
body{
	background: #1b1f22;
	color: #ffffff;
	font-family: "Source Sans Pro", sans-serif;
	font-weight: 300;
	font-size: 1rem;
	line-height: 1.65;
}

-->
</style></head>

<body>
<h1 align="center">
	<?php
		echo getcwd();
	?>
</h1>
<ul>
	<?php
		$images = scandir('.');
		$ignore = array(".", "..","img.php","index.php");
		foreach($images as $curimg){
			if(!in_array($curimg, $ignore)) {
				echo "<li><a href=\"$curimg\"><img src='img.php?src=$curimg&w=300&zc=1' alt='' /></a><figcaption>$curimg</figcaption></li>\n ";
			}
		} 				
	?>
</ul>

</body>
</html>
