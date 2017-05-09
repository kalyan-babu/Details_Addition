
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>	
<script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<?php

$link=mysqli_connect('localhost','root','','assignment');
if(!$link)
	echo'sorry unable to connect database';

else
{
$email=$_POST['email'];
$password=$_POST['password'];

$query1="SELECT count(email) as count FROM user WHERE email='$email'";

$result1=mysqli_query($link,$query1);

while($row1=mysqli_fetch_array($result1))
	$c=$row1['count'];

$query="SELECT * FROM user WHERE email='$email'";

$a=0;

$result=mysqli_query($link,$query);
while($row=mysqli_fetch_array($result))
{
		if($row['password']==$password)
		{
			$a=0;
			session_start();
			$_SESSION['email']=$email;
		
			header('location:user.php');
			break;
		}
		else
			$a=1;
	
}


if($c==0||$a==1)
{
	echo'<br><br><br><br><div class="container">
		<div align="center">
		<p>You Entered Wrong Email or password 
		<p>plese <a href="main_page.php">click_here</a> and Try once again</p>
		</div></div>';
	
	
}


}
?>

</body>

</html>


