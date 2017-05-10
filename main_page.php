<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>	
<script src="bootstrap/js/bootstrap.min.js"></script>

<style>
#label
{
	font-weight:bold;
}

</style>

</head>

<body>

<?php

require('connection.php');
if(!$link)
{
	header('location:error.php');
}

$query1="SELECT count(name) as count FROM details";
$result1=mysqli_query($link,$query1);
if(!$result1)
		header('location:table_error.php');
	
while($row1=mysqli_fetch_array($result1))
	$c=$row1['count'];


$query="SELECT name,salary FROM details";

$result=mysqli_query($link,$query);


?>
<br><br><br>

<div class="container">
	<div class="row">
		  <div class="col-sm-8">
		  <br>
		  <div align="center">
			<p>Users with Name and Salary </p>
		  </div>
		  <br>
		<?php  
		if($c>0)
		{
		  echo'<table class="table table-bordered">
		  <thead>
					<tr>
						<th>Name</th>
						<th>Salary</th>
					</tr>
				</thead>';
		}
		  ?>
		  <?php
	if($c>0)
	{
	  while($row=mysqli_fetch_array($result))
	 {
		echo'
			
				
				<tbody>
					<tr>
						<form action="delete.php" method="post"> 
							<td>'.$row['name'].'</td>
							<td>$'.$row['salary'].'</td>
						</form>  
					</tr>
				</tbody>';
		
	 }
	}
	else
	{
		
		echo'<br><br><br><br><div class="container">
		<div align="center">
		<p>No entries are there plese login to user page and add Details</p>
		</div></div>';
		
	}
     ?>
		  </table>
		  
		  </div>
		  
		    <div class="col-sm-4">
			<br>
			<div align="center">
			<p>Login Form</p>
			</div>
			<br>
			  <form class="form-horizontal" action="check.php" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email" id="label">Email:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd" id="label">Password:</label>
						<div class="col-sm-10">          
							<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default" >Login</button>
						</div>
					</div>
			</form>
		  </div>
    </div>
</div>

</body>

</html>