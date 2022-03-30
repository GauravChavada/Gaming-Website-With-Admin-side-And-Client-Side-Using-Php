<?php 
session_start();
$username=$_SESSION['name'];
  
$game_name=$_GET['name'];
include("connect.php");
if (mysqli_query($a,"INSERT INTO libarary (user_name,game_name) VALUES ('$username','$game_name')")) 
{	
	header("location:library.php");
	// $file_url =$_GET['file'];
	// header('Content-Type: application/octet-stream');  
	// header("Content-Transfer-Encoding: Binary");   
	// header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
	// readfile($file_url);
}
else 
{
	echo "<script>alert('error')</script>";
}
 
?>