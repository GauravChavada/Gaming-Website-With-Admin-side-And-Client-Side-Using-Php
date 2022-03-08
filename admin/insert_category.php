
<?php
include("connect.php");

if (isset($_POST["insert"]))
{
  $name=$_POST['nm'];
  $temp="INSERT INTO category (c_name) VALUES ('$name')";

  if(mysqli_query($a,$temp) && $name!="") 
  {
    echo "<script>alert('Data Insertd Successfully')</script>";
   header("location:insert_category.php");
  }
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
  
}
if(isset($_POST["select"]))
{
  header("location:show_category.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Category</title>
</head>
<body>            
           <?php
            include("sidebar.php");
           ?>          
                          <div class="col-md-12">
                           <div class="page_title">
                            <h1 class="text-center">Add New Category</h1>
                           </div>
          </div>  


<form method="POST">
     <table class="table table-bordered mt-5">
    <tr>
      <td class="fs-4">Category Name</td>
        <td><input type="text" class="form-control" name="nm"></td>
    </tr>
        <tr>
        <td colspan="2" align="center">
       <input type="submit" value="Insert" name="insert" class="btn btn-primary">
       <input type="submit" value="Show" name="select" class="btn btn-primary"></td>
        </tr>
  </table>
 
</form>
      
</body>
</html>