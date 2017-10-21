<?php
require_once("../includes/initialisation.php");

$name = sanitiseInput($_POST['name']);
$price = sanitiseInput($_POST['price']);
$beds = sanitiseInput($_POST['beds']);

?>



<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a new home | Premium Home Building Co.</title>
	<link rel="stylesheet" href="css/style.css" media="screen" />
  </head>

  <body>
    
    <section class="homes">
      <div class="container">
		  <h1>Add a new home</h1>
		  
      <form action = "added-home.php" method = "post">
       Name:<input type="text" name="name"><br>
       Price:<input type="number" name="price"><br>
       Total bedrooms:<input type="number" name="beds"><br>
       Total bathrooms:<input type="number" name="baths"><br>
       Total park space:<input type="number" name="parks"><br>
       Block width:<input type="number" name="bWidth"><br>
       Description:<input type="text" name="description"><br>
       <input type="submit" name="submit" value="Add">
		  </form>
      </div>
    </section>
    
    
  </body>
  
</html>