<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> C A R T </title>
</head>
<body>
<div id="preloder">
        <div class="loader"></div>
    </div>

     	<?php
   	 include("header.php");
    	?>
    <section class="product spad "> 

        <div class="row space">
        	<?php
        	if(isset($_SESSION['email']) && isset($_SESSION['password']))
 {	
 		$username=$_SESSION['email'];
		 	
      $a=mysqli_connect("localhost","root","","project");
      $query=mysqli_query($a,"SELECT * FROM cart WHERE w_u_name='$username'");
      while ($data=mysqli_fetch_array($query)) 
      { 
      	$productlist=$data['w_productlist'];
      	$a=mysqli_connect("localhost","root","","project");
      $q=mysqli_query($a,"SELECT * FROM product WHERE p_name='$productlist'");
      while ($d=mysqli_fetch_array($q)) 
      { 
       ?>
       <a href="product_details.php?uid=<?php echo $d['p_name'];?>"> 
       <div  class="col-lg-2 col-md-5 col-sm-5"> 
    	<div class="product__item__pic set-bg" 
    	data-setbg="../admin/<?php echo $d['p_image']?>"></div>

                                         
    	<div class="product__item__text">
    	<ul>                                             
        	<li><?php echo $d['p_category']?></li>
                                           
     	</ul>
     
    	<h5 style="color: white;">
        	<?php echo $d['p_name']?>
    	</h5>
    	<h5 style="color: red;"><?php echo $d['p_price']?></h5></div>
    
    	</a>

       <hr>  
       <hr> 

    </div>                               
     <?php
      }
   }
  }
      ?>
            </div>
        
    </section>
    <?php
   	 include("footer.php");
    	?>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php


?>