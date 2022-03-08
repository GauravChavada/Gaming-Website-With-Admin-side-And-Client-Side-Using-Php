<?php

include("connect.php");

$id=$_GET['uid'];

if (isset($_POST['update'])) {
	$cname=$_POST['nm'];
	if (mysqli_query($a,"UPDATE `category` SET `c_name`='$cname' WHERE c_id='$id'")) 
	{
		header("location:show_category.php");
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
}


$query=mysqli_query($a,"SELECT * FROM category WHERE c_id='$id'"); 
$data=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>update Category</title>
</head>
<body>
<?php 
include("sidebar.php");
?>
					<div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1 class="text-center">Update Category</h1>
                     </div>
					    </div>
					       </div>
<form method="POST">
     <table class="table table-bordered mt-5">
    <tr>
      <td class="fs-4">Category Name</td>
        <td><input type="text" value="<?php echo $data['c_name'];?>" class="form-control" name="nm"></td>
    </tr>
        <tr>
        <td colspan="2" align="center">
       <input type="submit" value="Update" name="update" class="btn btn-primary">
       
        </tr>
  </table>
 
</form>
</body>
</html>