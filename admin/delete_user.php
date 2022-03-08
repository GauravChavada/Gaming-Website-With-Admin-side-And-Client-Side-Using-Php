<?php
include("connect.php");
if(mysqli_query($a,"DELETE FROM  users WHERE id='".$_GET['uid']."'")) 
{
	header("location:show_user.php");
}
else
{
	echo "<script>alert('User Not Deleted')</script>";
}
?>