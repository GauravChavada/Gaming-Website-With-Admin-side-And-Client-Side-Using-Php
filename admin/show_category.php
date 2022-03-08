<!DOCTYPE html>
<html>
<head>
	<title>Show Category</title>
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
<table class="table table-bordered fs-4">
	<tr align="center" class="table-primary">
	<th>Id</th>
	<th>Category Name</th>
	<th>Action</th>
	</tr>
<?php
include("connect.php");
$temp=mysqli_query($a,"SELECT * FROM category");
while($data=mysqli_fetch_array($temp))
{
	?>
		<tr align="center">
			<td><?php echo $data['c_id']; ?></td>
			<td><?php echo $data['c_name']; ?></td>
			<td>
				<a href="delete_category.php?uidi=<?php echo $data['c_id'];?>&amp;cname=<?php echo $data['c_name']; ?>" class="text-primary">Delete</a>
				<span>|</span>
				<a href="update_category.php?uid=<?php echo $data['c_id'];?>" class="text-primary">Update</a>
			</td>
		</tr>
	<?php
}
?>
</table>
</body>
</html>
