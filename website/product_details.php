<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Product Details</title>
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
                    { ?>

                  
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
                               
                                ?> 
                            
                                <a href="./download_products.php?file=<?php echo $data['p_image'];?>" class="follow-btn"><span>Buy Now</span></a>


                                     <?php
                            $a=mysqli_connect("localhost","root","","project");
                            $q=mysqli_query($a,"SELECT * FROM cart WHERE cart_list='$productlist' and cart_name='$username'");
                                
                                if ($number=mysqli_num_rows($q)==0) 
                                    { ?>
                                        <a href="./cart_insert.php?pname=<?php echo $data['p_name'];?>&amp;price=<?php echo $data['p_price'];?>" class="watch-btn"><span>Add to cart</span></a>

                              <?php  }
                              else
                            { 
                                ?>
                              <a href="./delete_cart.php?delete_cart=<?php echo $data['p_name'];?>" class="watch-btn"><span>Remove from cart</span></a>
                            <?php
                            }
                                ?>

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