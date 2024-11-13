<!--creating database named database1-->
<?php
$con = mysqli_connect("localhost", "root", "gaurangi");

//Checking connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL : " . mysqli_connect_error();
}

//Create database
$sql = "CREATE DATABASE gaurangi1";
if (mysqli_query($con, $sql)) {
    echo "Database db1 created successfully";
} else {
    echo "Error creating database: " . mysqli_error($con);
}
mysqli_close($con);
?>