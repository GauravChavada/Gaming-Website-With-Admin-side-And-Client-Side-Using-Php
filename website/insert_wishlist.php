<?php 
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{	$username=$_SESSION['name'];
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
  			window.location.href="login_client.php";
		} 		
		else 
		{	
			
  			window.history.back(); 			
		}	
	</script>
	<?php 
	
}

?>