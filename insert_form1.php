<!-- this is the php file of insert_form html 
 when submit button is clicked new entry is inserted in the table
-->
<?php
$con=mysqli_connect("localhost","root","gaurangi","db1");

//check connection
if(mysqli_connect_errno())
{
    echo "Failed to connect to mysql: ".mysqli_connect_error();
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$res="insert into persons values('$fname','$lname',$age)";

if(mysqli_query($con,$res))
{
    echo "1 record added";

}
else
{
    echo "Error: ".mysqli_error($con);
}

//close connection
mysqli_close($con);
?>