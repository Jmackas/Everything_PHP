
<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("dbcnx.php");

$id = $_GET['id'];

if ($result = mysqli_query($dbcnx, "SELECT * FROM homes WHERE id=$id")) {
	
  while ($row = mysqli_fetch_array($result))
  {
    echo $row['name'] . "</a> - $" . number_format($row['price'], 0, "", ",") . "<br>";
  }
	
    mysqli_free_result($result);
}

mysqli_close($dbcnx);

?>