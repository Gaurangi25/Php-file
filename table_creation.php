<!--create table with fname,lname and age in database db1 
-->
<?php
$con = mysqli_connect("localhost", "root", "gaurangi", "db1");

//CHeck connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//CREATE TABLE
/*
$sql1 = "create table persons1
(pid int not null auto_increment primary key,
fname varchar(30),
lname varchar(30),
age int
)";
*/

$sql = "create table persons
(fname varchar(30),
lname varchar(30),
age int
)";
if (mysqli_query($con, $sql)) 
{
    echo "Table persons created successfully";
} 
else 
{
    echo "Error : " . mysqli_error($con);
}

?>