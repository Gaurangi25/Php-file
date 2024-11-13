<?php
echo "Hello";

$con=mysqli_connect("localhost","root","gaurangi","db1");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MYSQL : ".mysqli_connect_error();
}
else
{
    echo "<br>Hii";
}
mysqli_close($con);
?>