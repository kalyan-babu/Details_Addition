<?php

require('connection.php');
session_start();
if(!$link)
	echo'sorry unable to connect database';

else
{
	session_destroy();
	header('location:main_page.php');
}	

?>


