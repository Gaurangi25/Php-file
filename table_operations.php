<!-- select,where,update,delete
 -->
<?php
$con = mysqli_connect("localhost", "root", "gaurangi", "db1");

//check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to mysql:" . mysqli_connect_error();
}

//select
$res = mysqli_query($con, "select * from persons");

//fetching
while ($row = mysqli_fetch_array($res)) {
    echo $row['fname'] . " " . $row['lname']. " " . $row['age'];
    echo "<br>";
}

//where
echo "<br>";

$res1 = mysqli_query($con, "select * from persons where fname='Gaurangi'");

while ($row = mysqli_fetch_array($res1)) {
    echo $row['fname'] . " " . $row['lname'] . " " . $row['age']. "<br>";
}

//update
echo "<br>";

mysqli_query($con,"update persons set age=40 where fname='Manya'");

//delete
echo "<br>";
$res5="delete from persons where fname='Manya'";
if(mysqli_query($con,$res5))
{
    echo "Deleted data successfully";
}


//close connection
mysqli_close($con);

?>