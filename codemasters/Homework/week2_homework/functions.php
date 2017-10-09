<?php

/* Function to retrieve the images for activities */
function activityImages()
{
    $dir = "photos/activities/";
    echo "<h1>Activities</h1>";
    // Open a directory, and output contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
              echo "<img src='photos/activities/$file'><br>";
                
            }
            closedir($dh);
        }
    }
}

/* Function to retrieve the images for cuisine */
function cuisineImages()
{
 $dir = "photos/cuisine/";
 echo "<h1>Cuisine</h1>";
  // Open a directory, and output contents
    if (is_dir($dir)) {
        if ($dhe = opendir($dir)) {
           while (($file = readdir($dhe)) !== false) {
             echo "<img src='photos/cuisine/$file'><br>";
            }
            closedir($dhe);
        }
    }
}



/* Function to retrieve the images for landscape */
function landscape()
{
    $dir = "photos/landscape/";
    echo "<h1>Landscape</h1>";
    // Open a directory, and output contents
    if (is_dir($dir)) {
        if ($dhe = opendir($dir)) {
            while (($file = readdir($dhe)) !== false) {
                echo "<img src='photos/landscape/$file'><br>";
            }
            closedir($dhe);
        }
    }
}



/* Function to retrieve the images for onboard */
function onboard()
{
    $dir = "photos/onboard/";
    echo "<h1>Onboard</h1>";
    // Open a directory, and output contents
    if (is_dir($dir)) {
        if ($dhe = opendir($dir)) {
            while (($file = readdir($dhe)) !== false) {
                echo "<img src='photos/onboard/$file'><br>";
            }
            closedir($dhe);
        }
    }
}

/* Function to retrieve the images for wildlife */
function wildlife()
{
    $dir = "photos/wildlife/";
    echo "<h1>Wildlife</h1>";
    // Open a directory, and output contents
    if (is_dir($dir)) {
        if ($dhe = opendir($dir)) {
            while (($file = readdir($dhe)) !== false) {
                echo "<img src='photos/wildlife/$file'><br>";
            }
            closedir($dhe);
        }
    }
}
?>