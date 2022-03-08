<?php 
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{	$username=$_SESSION['email'];
	$id=$_GET['uid'];
	include("connect.php");
	if(mysqli_query($a,"INSERT INTO Wishlist (w_u_name,w_productlist) VALUES 
		('$username','$id')"))
	{
			header("location:product_details.php?uid=$id");
	}
	else 
	{
		
	}
}
else
{	
	?>

	<script>
		
		if (confirm("Please Login First!") == true) 
		{
  			window.location.href="login.php";
		} 		
		else 
		{	
			
  			window.location.href="product_details.php?uid=<?php echo $id; ?>"; 			
		}	
	</script>
	<?php 
	
}

?>