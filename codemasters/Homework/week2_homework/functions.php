<?php

/* Function to retrieve the images for activities */
    function activityImages(){
        $dir = "photos/activities/";
        echo "<h1>Activities</h1>";
        // Open a directory, and output contents
        if (is_dir($dir)){
            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){
                echo "<img src='photos/activities/$file'><br>";
                }
                closedir($dh);
            }
        }
    }

/* Function to retrieve the images for cuisine */
    function cuisineImages(){
        $dir = "photos/cuisine/";
        echo "<h1>Cuisine</h1>";
        // Open a directory, and output contents
        if (is_dir($dir)){
            if ($dhe = opendir($dir)){
                while (($file = readdir($dhe)) !== false){
                echo "<img src='photos/cuisine/$file'><br>";
                }
                closedir($dhe);
            }
        }
    }

?>
