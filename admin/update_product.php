<?php
include("connect.php");
$id=$_GET['userid'];

if (isset($_POST['update'])) 
{	
	$pnm=$_POST['pname'];
	$pcat=$_POST['pcategory'];
	$pprice=$_POST['pprice'];
	$pdis=$_POST['pdis'];
	
	$filename=$_FILES["img"]["name"];
	$tempname=$FILES["img"]["tmp_name"];
	$path="uploads/".$filename;

	move_uploaded_file($tempname, $path);

	if (mysqli_query($a,"UPDATE `product` SET `p_category`='$pcat',`p_name`='$pnm',`p_image`='$path',`p_dis`='$pdis',`p_price`='$pprice' WHERE p_id='$id'")) 
	{
		header("location:show_product.php");
	}
	else
	{
		echo "<script>alert('Cannot Update')</script>";
	}
}

$query=mysqli_query($a,"SELECT * FROM product WHERE p_id='$id'");
$data=mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
</head>
<body>
 <?php
            include("sidebar.php");
           ?>
           
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1 class="text-center">Update Product</h1>
                     </div>
					    </div>
					       </div>
					       
					       	<form method="POST" enctype="multipart/form-data">

					       <table class="table table-bordered fs-4">
					       	<tr>
					       		<td>Product Name</td>
					       		<td><input type="text" name="pname" value="<?php echo $data['p_name'];?>"></td>
					       		
					       	</tr>
					       	<tr>
					       		<td>Product Category</td>
					       		<td><select name="pcategory">

					       		<?php
					       		include("connect.php");
					       		$q=mysqli_query($a,"SELECT * FROM category");
					       		while ($c=mysqli_fetch_array($q,MYSQLI_ASSOC))

					       		{
					       		 ?>
					     				<option value="<?php  echo $c["c_name"]; ?>">
					     				<?php echo $c["c_name"]; ?> 	
					     				</option>
					       		 <?php   
					       		}
					       		?>	
					       		</select></td>
					       	</tr>
					       	<tr>
					       		<td>Product Price</td>
					       		<td><input type="text" name="pprice" value="<?php echo $data['p_price'];?>"></td>
					       	</tr>
					       	<tr>
					       		<td>Product Discription</td>
					       		<td><input type="compose-textarea" name="pdis" value="<?php echo $data['p_dis'];?>"></td>
					       	</tr>
					       	<tr>
					       		<td>Product Image</td>
					       		<td><input type="file" name="img" value="<?php echo $data['p_image'];?>"></td>
					       	</tr>
					       	<tr>
        						<td colspan="2" align="center">
       							<input type="submit" value="Update" name="update" class="btn btn-primary"></td>
        					</tr>
					       </table>
					   </form>
</body>
</html>
