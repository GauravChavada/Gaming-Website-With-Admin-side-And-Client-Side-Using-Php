<html>
<body>
<?php 
 include("sidebar.php");
?>
	<div class="col-md-12">
                           <div class="page_title">
                            <h1 class="text-center">Products</h1>
                           </div>
          </div>  
 <table border="5" class="table table-bordered fs-3">
	<tr align="center" class="table-primary">
		<th>Product Id</th>
		<th>Category Name</th>
		<th>Name</th>
		<th>Price</th>
		<th>Description</th>
		<th>Image</th>
		<th colspan="2">Action</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM product");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center">
		<td><?php echo $data['p_id']; ?></td>
		<td><?php echo $data['p_category']; ?></td>
		<td><?php echo $data['p_name']; ?></td>
		<td><?php echo $data['p_price']; ?></td>
		<td><?php echo $data['p_dis']; ?></td>
		<td><img height=150px width=160px src="<?php echo $data['p_image']; ?>"></td>
		<td><a href="delete_product.php?userid=<?php echo $data['p_id']; ?>" 
			class="text-primary">Delete</a>
		<span>|</span>	
		<a href="update_product.php?userid=<?php echo $data['p_id']; ?>"
			class="text-primary">Update</a>
			</td>
	</tr>
	<?php 
		}

	?>
</table>
<?php
include("footer.php");
?>
</body>
</html>