<?php

$dbcnx = mysqli_connect($hostname,$username,$password,$dbname);

   if(mysqli_connect_errno()) {
      echo "Connection Failed: " . mysqli_connect_errno();
      exit();
   } 

/*$dbcnx = new mysqli($hostname,$username,$password,$dbname);

if ($dbcnx->connect_errno) {
    printf("Connect failed: %s\n", $dbcnx->connect_error);
    exit();
}*/
?>