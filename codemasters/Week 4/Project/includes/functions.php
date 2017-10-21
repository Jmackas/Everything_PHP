<?php

//Collect information for the home listings ("category" page)
function getHomeListings ($dbcnx) {
	
	$results = array();
	
	if ($selectSQL = mysqli_query($dbcnx, "SELECT id, name, price, floorplan, beds, baths, parks, bWidth, description FROM homes")) {
		
	  while ($selectDets = mysqli_fetch_assoc($selectSQL))
	  {
		  $id = $selectDets['floorplan'];
		  $results[$id] = $selectDets;
	  } 
	  
	} else {
		"Problem is: " . mysqli_error($dbcnx);
	}
	return $results;
	
    mysqli_free_result($result);
	mysqli_close($dbcnx);
}

//Collect information for the display homes ("category" page)
function getDisplayHomes ($dbcnx) {
	
	$results = array();
	
	$sqlConst = "SELECT * 
			FROM homes
			INNER
			  JOIN displayHomes
			    ON homes.id = displayHomes.parentID";
	
	if ($selectSQL = mysqli_query($dbcnx, $sqlConst)) {
		
	  while ($selectDets = mysqli_fetch_assoc($selectSQL))
	  {
		  $id = $selectDets['floorplan'];
		  $results[$id] = $selectDets;
	  } 
	  
	} else {
		"Problem is: " . mysqli_error($dbcnx);
	}
	return $results;
	
    mysqli_free_result($result);
	mysqli_close($dbcnx);
}

//Collect information for the home details ("product" page)
function getHomeDetails ($dbcnx, $id) {
  
	if ($selectSQL = mysqli_query($dbcnx, "SELECT * FROM homes WHERE id='$id'")) {
		
    	$selectDets = mysqli_fetch_assoc($selectSQL);
    
	} else {
		"Problem is: " . mysqli_error($dbcnx);
	}
	return $selectDets;
	
    mysqli_free_result($result);
	mysqli_close($dbcnx);
}

//Collect information for the home details ("product" page)
function displayHomeDetails ($dbcnx, $id) {
  
	if ($selectSQL = mysqli_query($dbcnx, "SELECT * FROM homes, displayHomes WHERE homes.id='$id' AND homes.id = displayHomes.parentID")) {
		
    	$selectDets = mysqli_fetch_assoc($selectSQL);
    
	} else {
		"Problem is: " . mysqli_error($dbcnx);
	}
	return $selectDets;
	
    mysqli_free_result($result);
	mysqli_close($dbcnx);
}

//user input for CMS
function sanitiseInput($input) {
	$output = trim(htmlspecialchars(strip_tags($input)));
	return $output;
}

?>