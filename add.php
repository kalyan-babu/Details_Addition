<?php

$link=mysqli_connect('localhost','root','','assignment');
session_start();
if(!$link)
	echo'sorry unable to connect database';

else
{
$name=$_POST['name'];
$salary=$_POST['salary'];
$email=$_SESSION['email'];

$query="INSERT INTO details (email,name,salary)VALUES('$email','$name','$salary')";

$result=mysqli_query($link,$query);

if($result)
{
	header('location:user.php');
}	

else
	echo'sorry unable to ADD the tupple';

}
?>


