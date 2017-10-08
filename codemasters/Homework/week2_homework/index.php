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