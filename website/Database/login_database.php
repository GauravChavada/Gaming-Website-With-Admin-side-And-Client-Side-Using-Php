<?php
$server="localhost";
$username="root";
$password="";
$dbname="project";
$connect = mysqli_connect($server, $username , $password , $dbname);
$email=$_POST['email'];
$password=$_POST['password'];
$q="SELECT `email`, `password` FROM `users` WHERE email='$email' and password='$password'";
$query=mysqli_query($connect,$q);
// print_r ($query);
// settype($query, "mysqli_result");
if (isset($_POST['ok'])) 
{
	if(mysqli_num_rows($query)>=1)
{
    $row=mysqli_fetch_assoc($query);
    if ($row['email']==$email && $row['password']==$password) 
    {	
    	session_start();
    	$_SESSION['email']=$row['email'];
    	$_SESSION['password']=$row['password'];
        //echo "Login successful!";
        //echo $_SESSION['email'];
        header("location:../index.php");
    }
}
else
{
    echo "Login failed!";
}
}


?>