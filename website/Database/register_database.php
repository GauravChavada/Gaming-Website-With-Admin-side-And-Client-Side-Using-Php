<?
$server="localhost";
$username="root";
$password="";
$dbname="project";
$connect = mysqli_connect($server, $username , $password , $dbname);
print_r($connect);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$dname=$_POST['dname'];
$password=$_POST['password'];
$query=mysqli_query($connect,"INSERT INTO `users`(`fname`, `lname`, `dname`, `email`, `password`) VALUES ('$fname','$lname','$dname','$email','$password')");
echo $query;
?>



























