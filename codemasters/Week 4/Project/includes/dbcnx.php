<?php

$dbcnx = mysqli_connect($hostname,$username,$password,$dbname);

   if(mysqli_connect_errno()) {
      echo "Connection Failed: " . mysqli_connect_errno();
      exit();
   } 
?>