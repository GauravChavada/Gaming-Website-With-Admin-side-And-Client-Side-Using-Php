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
                                if(isset($_SESSION['email']) && isset($_SESSION['password']))
                                { 
                                  $username=$_SESSION['email'];
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
                            
                                
                                <a href="#" class="watch-btn"><span>Buy Now</span> <i
                                    class="fa fa-angle-right"></i></a>
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