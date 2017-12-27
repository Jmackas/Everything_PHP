<!-- Creating the database -->
<?php
// Create database
$sql = "CREATE DATABASE my_cms";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

echo "<br>";
?>
