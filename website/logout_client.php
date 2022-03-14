<?php 
session_start();
unset($_SESSION['name']);
unset($_SESSION['pass']);
header("location:./index.php");
 ?>