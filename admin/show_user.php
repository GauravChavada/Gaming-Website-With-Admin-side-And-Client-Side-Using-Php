<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<?php
	include("sidebar.php");
	?>
	<div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1 class="text-center">Show User</h1>
                          </div>
                      </div>
                  </div>
	
<table class="table table-bordered fs-4">
	<tr align="center" class="table-primary">
		<!-- <thread class="thread-dark"> -->
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Display Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Action</th>
	</tr>
	<!-- </thread> -->
	
	<?php
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM users");
	while ($data=mysqli_fetch_array($temp)) 
	{
		?>
		<tr align="center">
			<td><?php echo $data['id'];?></td>
			<td><?php echo $data['fname'];?></td>
			<td><?php echo $data['lname'];?></td>
			<td><?php echo $data['dname'];?></td>
			<td><?php echo $data['email'];?></td>
			<td><?php echo $data['password'];?></td>
			<td>
				<a href="delete_user.php?uid=<?php echo $data['id'];?>" class="text-primary">Delete</a>
				
			</td>

		</tr>
		<?php 
	}
	?>

</table>
</body>
</html>