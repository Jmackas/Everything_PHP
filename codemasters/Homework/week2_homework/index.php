<!-- http://localhost/php_learning/codemasters/Homework/week2_homework/index.php -->
<!-- 
    Issues:
        - Not sure why two images are generated.
        - Can't get classes to work.
-->
<?php
/* Include functions.php in the index.php file */
include 'functions.php';
?>




<!DOCTYPE html>
<html>
<head>
<style>
    /* Styling to minimise the amount of scrolling */
    img {
        width: 400px;
        height: 400px;
    }

</style>
</head>
<body>

<?php

echo activityImages();
echo "<br>";
echo cuisineImages();
echo "<br>";
echo landscape();
echo "<br>";
echo onboard();
echo "<br>";
echo wildlife();

?>
</body>
</html>

 <!--
Advanced Questions:
1. Our client is hosting their website on a Linux server. This means any directory function we use will include the default . and .. (links to current directory and parent directory respectively). How can we get rid of these to make sure we are only getting the image files? What other handling do we need to make sure we're only outputting our JPEGS and no other files?
    Not sure, 


2. The client wants to update this to display the file name, dimensions, and file size of each image. How can we do this in an efficient way?
3. How would we handle it if the client wanted to add the ability for photos to have a caption? (this one is for pondering, not implementation).
-->