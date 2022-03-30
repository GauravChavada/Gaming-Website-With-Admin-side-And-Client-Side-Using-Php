<?php
if (isset($_POST['insert']))
{
	$name=$_POST['pname'];
	$category=$_POST['pcategory'];
	$dis=$_POST['pdis'];	
	$price=$_POST['pprice'];
	$status=$_POST['sidebar_status'];

		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$path="uploads/".$filename;

		move_uploaded_file($tempname,$path);
		
		include("connect.php");

		if(mysqli_query($a,"INSERT INTO product(p_category,p_name,p_image,p_dis,p_price,sidebar_status) VALUES('$category','$name','$path','$dis','$price','$status')"))
		{
			 header("location:insert_product.php");
		}
		else
		{
			  echo "<script>alert('Cannot Insert Data')</script>";
		}
}
if (isset($_POST['select'])) 
{
	header("location:show_product.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Insert Product
	</title>
	

</head>
<body>
 <?php
            include("sidebar.php");
           ?>
           <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1 class="text-center">Add New Product</h1>
                     </div>
					    </div>
					       </div>
					       </div>
					       	<form method="POST" enctype="multipart/form-data">

					       <table class="table table-bordered fs-4">
					       	<tr>
					       		<td>Product Name</td>
					       		<td><input type="text" name="pname"></td>
					       		
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
					       		<td><input type="text" name="pprice"></td>
					       	</tr>
					       	<tr>
					       		<td>Product Discription</td>
					       		<td><input type="compose-textarea" name="pdis"></td>
					       	</tr>
					       	<tr>
					       		<td>Product Image</td>
					       		<td><input type="file" name="img"></td>
					       	</tr>
					       	<tr class="fs-4">
					       		<td >Sidebar Status</td>
					       		<td><input type="radio" name="sidebar_status" value="1"> Active
					       		<input type="radio" name="sidebar_status" value="0">   Inactive</td>
					       		<td></td>
					       	</tr>
					       	<tr>
        						<td colspan="2" align="center">
       							<input type="submit" value="Insert" name="insert" class="btn btn-primary">
       							<input type="submit" value="Show" name="select" class="btn btn-primary"></td>
        					</tr>
					       </table>
					   </form>
					       
</body>
</html>