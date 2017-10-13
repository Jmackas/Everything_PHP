<?php require("classes.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Photo Gallery</title>
<link rel="stylesheet" href="style.css" media="screen" />
</head>

<body>
	
	<?php
	$gallery = new photoGallery();
	$dir = $gallery -> setDirect("photos/activities");
	$photos = $gallery -> scanDirect();
	
	foreach($photos as $img) {
		echo "<img src=\"" . $img . "\">";
	}
	
	?>
	
	
</body>
</html>