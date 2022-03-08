<?php
include("connect.php");
$cname=$_GET['cname'];
$query=mysqli_query($a,"SELECT * FROM product WHERE p_category='$cname'");
if (mysqli_num_rows($query)>0) 
{
	 echo "<script>alert('Cannot Delete Data As Product Of These Category Exists......');
    window.location='show_category.php';</script>";
}
else
{

	if(mysqli_query($a,"DELETE FROM  category WHERE c_id='".$_GET['uidi']."'"))
	{
		header("location:show_category.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
}
 ?>


