<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <title></title>
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
   <?php
   
   session_start();
    if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) 
    {

      header("location:login.php");
    }
?>
      <div class="full_container">
         <div class="inner_container">
            
           <?php
            include("sidebar.php");
           ?>
            
                  
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h1 class="text-center">Dashboard</h1>
              
         </div>
      
   </div>
</div>
</div>
</div>
    
   </body>
</html>