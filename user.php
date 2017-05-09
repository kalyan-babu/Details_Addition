<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
<style>

ul li{
	
	list-style:none;
	float:right;
	padding:20px;
	
}
	
	
</style>
	
	
</head> 

<body>
<?php
$link=mysqli_connect('localhost','root','','assignment');

if(!$link)
	echo'sorry unable to connect database';

session_start();

$email=$_SESSION['email'];

$query="SELECT * FROM details WHERE email='$email'";

$result=mysqli_query($link,$query);


?>


<div class="container">

<div class="aa">
<ul>
<?php
echo'<li><form method="post" action="logout.php"><button type="submit" class="btn btn-success">Log Out</button></form></li>
<li>Hai, '.$email.'</li>';
?>
</ul>
</div>

 
	<?php
	
	while($row=mysqli_fetch_array($result))
	{
		echo'
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Salary</th>
						<th>Option</th>
					
					</tr>
				</thead>
				<tbody>
					<tr>
						<form action="delete.php" method="post"> 
							<td>'.$row['name'].'</td>
							<td>'.$row['salary'].'</td>
							<td><button type="submit" class="btn btn-danger" name='.$row['sno'].'>REMOVE</button></td>
							<input type="hidden" name="sno" value='.$row['sno'].'></input>
						</form>  
					</tr>
				</tbody>
			</table>';
		
	}
     ?>
    
   <div align="center">

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Details</button>

</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" align="center">Details of the Country</h4>
        </div>
        <div class="modal-body">
         
		 <form class="form-horizontal" action="add.php" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder="Enter name..." name="name">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd">salary:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="salary" placeholder="Enter salary..." name="salary">
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Add</button>
						</div>
					</div>
			</form>
		 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
      </div>
    </div>
  </div>
</div>


</div>
</body>


</html>