<!-- http://localhost/php_learning/codemasters/Homework/week2_homework/index.php -->



<?php
/* Include functions.php in the index.php file */
include 'functions.php';
?>




<!DOCTYPE html>
<html>
<head>
<style>
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