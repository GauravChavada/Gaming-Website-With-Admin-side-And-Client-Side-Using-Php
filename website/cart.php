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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
	<div id="preloder">
        <div class="loader"></div>
    </div>

     	<?php
   	 include("header.php");
     $_SESSION['image']="";
     $_SESSION['price']="";
     $_SESSION['cart']="";
    	?>
    <section class="product spad "> 

        <div class="row space">
          <?php $total=0; ?>
        	<?php
        	if(isset($_SESSION['name']) && isset($_SESSION['pass']))
 {	
 		$username=$_SESSION['name'];
		 	$cart="";
      $a=mysqli_connect("localhost","root","","project");
      $qu=mysqli_query($a,"SELECT * FROM cart WHERE cart_name='$username'");
      while ($data=mysqli_fetch_array($qu)) 
      { 
      	$productlist=$data['cart_list'];
      	$a=mysqli_connect("localhost","root","","project");
      $q=mysqli_query($a,"SELECT * FROM product WHERE p_name='$productlist'");
      while ($d=mysqli_fetch_array($q)) 
      { 
                        $_SESSION['cart'].=$d['p_name'].",";
                        $_SESSION['price'].=$d['p_price'].",";
                        $_SESSION['image'].=$d['p_image'].",";
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
    	<h5 style="color: red;"><?php echo "₹ ".$d['p_price']?></h5></div>
    
    	</a>

       <hr>  
       <hr> 

    </div>                          
     <?php  
    $total+= $d['p_price'];
     
      }
   }
  }
      ?>
      <?php 
                        //   $_SESSION['cart']=$cart;
                        // $_SESSION['price']=$price;
                        // $_SESSION['image']=$image;
       ?>
            </div>
            <CENTER>
        <a href="#cart" data-bs-toggle="collapse" class="watch"><?php echo $total;?><span>/Checkout</span></a>
        <!-- <input type="submit" name="order" data-bs-toggle="collapse" class="watch" value="Checkout">
        <br><br> -->

<div class="collapse col-md-4" id="cart">
  <form method="POST" action="download_price.php">
  <table class="table width:ml-auto fs-4 text-white">  
    <tr>
      <td>Gmail</td>
      <td><input type="text" name="address" required></td>
    </tr>
    <tr>
      <td>Mobile Number</td> 
      <td><input type="text"  name="mno" required></td>
    </tr>
    <tr class="ml-auto flex">
      <td>Payment Option</td> 
      <td>
        <input type="radio" name="cc" value="Credit Card" required> Credit Card<br>
        <input type="radio" name="cc" value="Upi" required> UPI 
      </td>
    </tr>
    <tr class="text-center">
      <td colspan="2"><input type="submit" value="Submit" name="order" class="fs-4 btn btn-outline-success"></td>
    </tr>
  </table>
</form>
 </div>
</CENTER>
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