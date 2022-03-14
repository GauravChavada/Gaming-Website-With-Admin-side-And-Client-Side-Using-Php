<?php 
$id=$_GET['remove'];
session_start();
$username=$_SESSION['name'];
include("connect.php");
if(mysqli_query($a,"DELETE FROM wishlist WHERE w_u_name='$username' and w_productlist='$id'")) 
{
		header("location:product_details.php?uid=$id");
}
else
{
	echo "<script>alert('Cannot Remove From Wishlist')</script>";
}
 ?>
