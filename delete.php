<?php

require('connection.php');
session_start();
if(!$link)
{
	header('location:error.php');
}


else
{
$sno=$_POST['sno'];


$query="DELETE FROM details WHERE sno='$sno'";

$result=mysqli_query($link,$query);
if(!$result)
		header('location:table_error.php');

if($result)
{
	header('location:user.php');
}	

else
	echo'sorry unable to delete the tupple';

}
?>


