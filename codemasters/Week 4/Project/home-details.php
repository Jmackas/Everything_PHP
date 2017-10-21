<?php
  include("includes/initialisation.php");

  if (isset($_GET['id'])) {
	  $id = $_GET['id'];
  } else {
	  $id = 1;
  }

  $row = getHomeDetails($dbcnx, $id);

var_dump($row);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $row['name'];?> | Premium Home Building Co.</title>
	<link rel="stylesheet" href="css/style.css" media="screen" />
  </head>

  <body>
	  
	  <nav id="main">
	    <ul>
		  <li><a href="index.php">All homes</a></li> 
		  <li><a href="display-homes.php">Display homes</a></li> 
		</ul>
	  </nav>
    
    
    <section class="homes">
      <div class="container">
		  
		<div class="image">
			<img src="images/homes/<?php echo $row['floorplan']; ?>-thm.jpg" />
		</div>
		  
		<div class="flex">
		  <div class="text">
			<h1><?php echo $row['name'];?></h1>

			   <div class="title"><?php echo "from $" . number_format($row['price'], 0, "", ",");?></div>

			  <div class="icons">
				<span class="bed"><?php echo $row['beds']; ?></span>
				<span class="bath"><?php echo $row['baths']; ?></span>
				<span class="car"><?php echo $row['parks']; ?></span>
				<span class="size"><?php echo $row['bWidth']; ?></span>
			  </div>
			  
			  <?php echo $row['description'];?>
			  
			  <a class="box-link" href="contact.php?id=<?php echo $row['id']; ?>">Enquire now</a>
		  </div>
		</div>
      </div>
    </section>
    
    
  </body>
  
</html>