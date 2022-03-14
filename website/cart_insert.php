<?php 
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{	$username=$_SESSION['name'];
	$price=$_GET['price'];
	$name=$_GET['pname'];
	include("connect.php");
	if(mysqli_query($a,"INSERT INTO cart (cart_name,cart_list,cart_total) VALUES 
		('$username','$name','$price')"))
	{
			header("location:product_details.php?uid=$name");
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
			window.history.back( );		
  		}	
	</script>
	<?php 
	
}

?>