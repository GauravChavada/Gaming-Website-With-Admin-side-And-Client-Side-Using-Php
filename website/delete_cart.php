<?php 
$id=$_GET['delete_cart'];
session_start();
$username=$_SESSION['name'];
include("connect.php");
if(mysqli_query($a,"DELETE FROM cart WHERE cart_name='$username' and cart_list='$id'")) 
{
		header("location:product_details.php?uid=$id");
}
else
{
	echo "<script>alert('Cannot Remove From Cartt')</script>";
}
 ?>
