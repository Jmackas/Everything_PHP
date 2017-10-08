<?php



    $dir = "photos/activities/";

    // Open a directory, and output contents
    if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
            echo "<img src='photos/activities/$file'><br>";
            }
            closedir($dh);
        }
    }



?>