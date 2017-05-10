<?php

require('connection.php');
session_start();
if(!$link)
{
	header('location:error.php');
}


else
{
$name=$_POST['name'];
$salary=$_POST['salary'];
$email=$_SESSION['email'];

$query="INSERT INTO details (email,name,salary)VALUES('$email','$name','$salary')";

$result=mysqli_query($link,$query);

if(!$result)
		header('location:table_error.php');

if($result)
{
	header('location:user.php');
}	

else
	echo'sorry unable to ADD the tupple';

}
?>


