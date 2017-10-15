<!--

What's the point of the homepage.php 


-->

<?php
/* Retrieves code from the database */
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<title>Premium Home Building Co.</title>
	<link rel="stylesheet" href="css/style.css" media="screen" />
</head>

<body>


	<section class="homes">
		<div class="container flex">
			<div class="box">
				<div class="image">
					<a href="">
						<img src="images/homes/roslin-thm.jpg" />
					</a>
				</div>

				<div class="title">The Roslin - from $350,000</div>

				<div class="icons">
					<span class="bed">4</span>
					<span class="bath">2</span>
					<span class="car">2</span>
					<span class="size">16.5m</span>
				</div>
				<a class="box-link" href="">Find out more</a>
			</div>
			<!--end box-->

			<div class="box">
				<div class="image">
					<a href="">
						<img src="images/homes/sinclair-thm.jpg" />
					</a>
				</div>

				<div class="title">The Sinclair - from $650,000</div>

				<div class="icons">
					<span class="bed">4</span>
					<span class="bath">2</span>
					<span class="car">2</span>
					<span class="size">15m</span>
				</div>
				<a class="box-link" href="">Find out more</a>
			</div>
			<!--end box-->


			<div class="box">
				<div class="image">
					<a href="">
						<img src="images/homes/dublin-thm.jpg" />
					</a>
				</div>

				<div class="title">The Dublin - from $625,000</div>

				<div class="icons">
					<span class="bed">4</span>
					<span class="bath">2</span>
					<span class="car">2</span>
					<span class="size">12.5m</span>
				</div>
				<a class="box-link" href="">Find out more</a>
			</div>
			<!--end box-->


			<div class="box">
				<div class="image">
					<a href="">
						<img src="images/homes/manhattan-thm.jpg" />
					</a>
				</div>

				<div class="title">The Manhattan - from $450,000</div>

				<div class="icons">
					<span class="bed">4</span>
					<span class="bath">2</span>
					<span class="car">2</span>
					<span class="size">8.5m - 10m</span>
				</div>
				<a class="box-link" href="">Find out more</a>
			</div>
			<!--end box-->


			<div class="box">
				<div class="image">
					<a href="">
						<img src="images/homes/gosford-thm.jpg" />
					</a>
				</div>

				<div class="title">The Gosford - from $550,000</div>

				<div class="icons">
					<span class="bed">4</span>
					<span class="bath">2</span>
					<span class="car">2</span>
					<span class="size">12m</span>
				</div>
				<a class="box-link" href="">Find out more</a>
			</div>
			<!--end box-->
		</div>
	</section>


</body>

</html>