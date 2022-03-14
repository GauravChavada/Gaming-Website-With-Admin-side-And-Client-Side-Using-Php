<!DOCTYPE html>
<html>
<head>
	<title>C A R T</title>
  <style type="text/css">
    
    .watch {
  font-size: 13px;
  color: #ffffff;
  background: #e53637;
  display: inline-block;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 14px 20px;
  border-radius: 4px 0 0 4px;
  margin-right: 1px;
}

  </style>
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
          <?php $total=0; ?>
        	<?php
        	if(isset($_SESSION['name']) && isset($_SESSION['pass']))
 {	
 		$username=$_SESSION['name'];
		 	
      $a=mysqli_connect("localhost","root","","project");
      $qu=mysqli_query($a,"SELECT * FROM cart WHERE cart_name='$username'");
      while ($data=mysqli_fetch_array($qu)) 
      { 
      	$productlist=$data['cart_list'];
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
    ?>



                                 
     <?php
     
    $total+= $d['p_price'];
     
      }
   }
  }
      ?>

            </div>
            <CENTER>
        <a href="./checkout.php" class="watch"><?php echo $total;?><span >/Checkout</span></a></CENTER>
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