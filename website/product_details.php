<!DOCTYPE html>
<html lang="zxx">

<head>
<title>Product Details</title>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>

<div id="preloder">
<div class="loader"></div>
</div>


<?php
include("header.php");
?>

<section class="anime-details spad space">
<div class="container">
<div class="anime__details__content">
    <div class="row">
        <?php 
        $id=$_GET['uid'];
        $a=mysqli_connect("localhost","root","","project");
        $query=mysqli_query($a,"SELECT * FROM product WHERE p_name='$id'");
        while ($data=mysqli_fetch_array($query)) 
        { 
        
            $_SESSION['cart']=$data['p_name'];
            $_SESSION['price']=$data['p_price'];
            $_SESSION['image']=$data['p_image'];

            ?>


      
        <div class="col-lg-3">
            <div class="anime__details__pic set-bg" data-setbg="../admin/<?php echo $data['p_image']?>">
                
            </div>
        </div>
        <div class="col-lg-9">
            <div class="anime__details__text">
                <div class="anime__details__title">
                    <h3><?php echo $data['p_name'];?></h3>
                    <br>
                    
                </div>
                <div class="anime__details__rating">
                    
                    
                </div>
                <br>
                <p><?php echo $data['p_dis'];?></p>
                <br>
                <div class="anime__details__widget">
                
                        <div class="anime__details__title">
                    <h3>Price :<font style="color: red;"> <?php echo $data['p_price'];?></font></h3>

                </div>
                    </div>
                </div>
                
                <br>
                
                <br>
                <br>
                <div class="anime__details__btn">
                    <?php
                    $productlist=$data['p_name'];
                    if(isset($_SESSION['name']) && isset($_SESSION['pass']))
                    { 
                      $username=$_SESSION['name'];
                    }
                    else 
                    {
                           $username=null;
                    }
                    $a=mysqli_connect("localhost","root","","project");
                    $q=mysqli_query($a,"SELECT * FROM wishlist WHERE w_productlist='$productlist' and w_u_name='$username'");
                    
                    if ($number=mysqli_num_rows($q)==0) 
                        { ?>
                        <a href="insert_wishlist.php?uid=<?php echo $data['p_name'];?>" class="follow-btn"><i class="fa fa-heart-o"></i>Add To Wishlist</a>

                  <?php  }
                  else
                { 
                    ?>
                        <a href="remove_wishlist.php?remove=<?php echo $data['p_name'];?>" class="follow-btn"><i class="fa fa-heart"></i>Remove From Wishlist</a>
                    <?php 
                }
                   
                if(isset($_SESSION['name']) && isset($_SESSION['pass']))
                        
                    {
                    $w=mysqli_query($a,"SELECT * FROM libarary WHERE user_name='$username' and game_name='$productlist' ");
                    if ($n=mysqli_num_rows($w)!=0)
                    {
                        ?>
                        <a href="./library.php?file=<?php echo $data['p_image'];?>&amp;name=<?php echo $data['p_name'];?>" class="follow-btn"><span>Already Claimed</span></a><?php
                    }
                    else
                    {
                    if($data['p_price']==0)
                    { ?> 
                        <a href="./download_products.php?file=<?php echo $data['p_image'];?>&amp;name=<?php echo $data['p_name'];?>" class="follow-btn"><span>Claim Now</span></a>
                   <?php   }
                    else
                    { ?>
                            <a data-bs-toggle="collapse" href="#cart" href="./download_products.php?file=<?php echo $data['p_image'];?>
                                " class="follow-btn"><span>Buy Now</span></a>
                            
                  <?php  } }}?>
                    











<?php
$w=mysqli_query($a,"SELECT * FROM libarary WHERE user_name='$username' and game_name='$productlist' ");
$n=mysqli_num_rows($w);
if ($n==0) 
{
$a=mysqli_connect("localhost","root","","project");
$q=mysqli_query($a,"SELECT * FROM cart WHERE cart_list='$productlist' and cart_name='$username'");
$d=mysqli_fetch_array($q);
$number=mysqli_num_rows($q);
if ($data['p_price']!=0) {
    

if ($number==0)
{ ?>
    <a href="./cart_insert.php?pname=<?php echo $data['p_name'];?>&amp;price=<?php echo $data['p_price'];?>" class="watch-btn"><span>Add to cart</span></a>    
<?php
}
else 
{ ?>
    <a href="./delete_cart.php?delete_cart=<?php echo $data['p_name'];?>" class="watch-btn"><span>Remove from cart</span></a>
<?php
}}
else {
    
}
}
?>








                <br><br>   <br>                  
                <div class="collapse col-md-4 ml-5" id="cart">
                <form method="POST" class="ml-5" action="download_price.php">
                <table class="table  width:ml-auto fs-4 ml-5 text-white" align="left">   
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
                    <input type="radio" name="cc" value=" UPI" required> UPI
                  </td>
                </tr>
                <tr class="text-center">
                  <td colspan="2"><input type="submit" name="order" value="Make Payment" class="fs-4 btn btn-outline-success"></td>
                </tr>
                </table>
                </form>
                </div>
                       </div>
                             </div>


                <?php 
            } 
            ?>
            
            </div>
        </div>
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