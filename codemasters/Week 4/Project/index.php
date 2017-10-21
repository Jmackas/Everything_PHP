<?php
  include("includes/initialisation.php");
  $homeList = getHomeListings($dbcnx);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Premium Home Building Co.</title>
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
      <div class="container flex">
		  <?php foreach($homeList as $row) { ?>
		  <div class="box">
			<div class="image">
			  <a href="home-details.php?id=<?php echo $row['id']; ?>">
				<img src="images/homes/<?php echo $row['floorplan']; ?>-thm.jpg" />
			  </a>
			</div>
			 
			  <div class="title"><?php echo $row['name'] . " - from $" . number_format($row['price'], 0, "", ",");?></div>
			  
			  <div class="icons">
				<span class="bed"><?php echo $row['beds']; ?></span>
				<span class="bath"><?php echo $row['baths']; ?></span>
				<span class="car"><?php echo $row['parks']; ?></span>
				<span class="size"><?php echo $row['bWidth']; ?></span>
			  </div>
			<a class="box-link" href="home-details.php?id=<?php echo $row['id']; ?>">Find out more</a>
		  </div><!--end box-->
		<?php } ?>
      </div>
    </section>
    
    
  </body>
  
</html>