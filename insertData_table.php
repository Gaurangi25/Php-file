<!--INSERTING DATA INTO TABLE PERSONS-->
<?php
$con=mysqli_connect("localhost","root","gaurangi","db1");
//Check connection
if(mysqli_connect_errno())
{
    echo "Failed to connect to MYSQL : ".mysqli_connect_error();
}

//Inserting values
$sql1="insert into persons(fname,lname,age) values ('Gaurangi','Agarwal',20)";
$sql2="insert into persons values('Manya','Agarwal',21)";
if(mysqli_query($con,$sql2))
{
    echo "Data inserted successfully";
}
else
{
    echo "Error : ".mysqli_error($con);
}
mysqli_close($con);
?>