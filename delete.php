<?php

require('connection.php');
session_start();
if(!$link)
	echo'sorry unable to connect database';

else
{
$sno=$_POST['sno'];


$query="DELETE FROM details WHERE sno='$sno'";

$result=mysqli_query($link,$query);

if($result)
{
	header('location:user.php');
}	

else
	echo'sorry unable to delete the tupple';

}
?>


