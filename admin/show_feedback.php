
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("sidebar.php");
?>
					<div class="col-md-12">
                           <div class="page_title">
                            <h1 class="text-center">Categories</h1>
                           </div>
          			</div> 
          			<?php
          				include("connect.php");
          			?>
          			<table class="table table-bordered fs-4">
          				<tr align="center" class="table-primary">
          				<th>ID</th>
          				<th>Name</th>
          				<th>Email</th>
          				<th>Phone</th>
          				<th>Feedback</th>
          				</tr>
          				<?php
          					$query=mysqli_query($a,"SELECT * FROM feedback");
          					while ($data=mysqli_fetch_array($query)) 
          					{
          						?>
          						<tr align="center">
          							<td><?php echo $data['f_id'];?></td>
          							<td><?php echo $data['f_name'];?></td>
          							<td><?php echo $data['f_email'];?></td>
          							<td><?php echo $data['f_phone'];?></td>
          							<td><?php echo $data['f_feedback'];?></td>
          							

          						</tr>
          					<?php
          					}
          				?>
          			</table>
</body>
</html>