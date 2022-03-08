<?php
include("connect.php");
if(mysqli_query($a,"DELETE FROM product WHERE p_id='".$_GET['userid']."'"))
{
	header("location:show_product.php");
}
else
{
	echo "<script>alert('Cannot Delete Product')</script>";
}
 ?>