<?php


ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("dbcnx.php");

if ($result = mysqli_query($dbcnx, "SELECT id, name, price FROM homes")) {
	
  while ($row = mysqli_fetch_array($result))
  {
    echo "<a href=\"home.php?id=" . $row['id'] . "\">" . $row['name'] . "</a> - $" . number_format($row['price'], 0, "", ",") . "<br>";
  }
	
    mysqli_free_result($result);
}

mysqli_close($dbcnx);

?>