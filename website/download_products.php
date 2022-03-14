<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Download</title>
</head>
<body>
</body>
</html>

<?php

 
$file_url =$_GET['file'];  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: Binary");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
 
	// $file=$_GET['file'];
	// $filename = basename($file);
	// //$filepath = $filename;
	// if (file_exists($filename)) 
	// {
	// 	header("Cache-Control:public");
	// 	header("Content-Description: File Trasnfer");
	// 	header("Content-Disposition: attchment; filename=$filename");
	// 	header("Content-Type : application/zip ");
	// 	header("Content-Tranfer-Encoding: binary ");
	// 	readfile($filepath);
	// 	exit;
	// }
	// else
	// {
	// 	echo "This file is not exist on the server.";
	// }
?>