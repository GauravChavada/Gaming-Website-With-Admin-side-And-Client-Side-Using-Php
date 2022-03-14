    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <title>X Core Gaming Store</title>
    </head>
    <body>
          <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <?php
        include("header.php");
        ?>   
        <section class="hero">
            <div class="container">
                <div class="hero__slider owl-carousel">
                    <div class="hero__items set-bg" data-setbg="img/hero/BG-2.jpg">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label">Adventure</div>
                                    <h2>Assassin's Creed</h2>
                                    <p>Play your way through history in the award-winning video game series. </p>
                                    <p> starting at ₹1,500.0</p>
                                    <a href="#"><span>Buy Now</span> <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero__items set-bg" data-setbg="img/hero/BG-1.jpg">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label">Action</div>
                                    <h2>Call Of Duty: Online</h2>
                                    <p>The free-to-play game features some of the same multiplayer.</p>
                                    <p> starting at ₹1,999.0</p>
                                    <a href="#"><span>Buy Now </span> <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero__items set-bg" data-setbg="img/hero/BG-3.jpg">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label">Battle Royal</div>
                                    <h2>PUBG</h2>
                                    <p>PUBG: Battlegrounds is an online multiplayer battle royale game. </p>
                                    <p> Free Now</p>
                                    <a href="#"><span>Play Now</span> <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Product Section Begin -->     
        <section class="product spad "> 

        <div class="row space">                             
                                      
         <!-- <div class="product__item ">  -->    
      <?php
      $a=mysqli_connect("localhost","root","","project");
      $query=mysqli_query($a,"SELECT * FROM product");
      while ($data=mysqli_fetch_array($query)) 
      {
       ?>
       <a href="product_details.php?uid=<?php echo $data['p_name'];?>"> 
       <div  class="col-lg-2 col-md-5 col-sm-5">
    <div class="product__item__pic set-bg" 
    data-setbg="../admin/<?php echo $data['p_image']?>"></div>                                     
    <div class="product__item__text">
    <ul>                                             
        <li><?php echo $data['p_category']?></li>                                        
     </ul>    
    <h5 style="color: white;">
        <?php echo $data['p_name']?>
    </h5>
    <h5 style="color: red;"><?php echo $data['p_price']?></h5></div>
    </a>
    </div>  

     <?php
      }
      ?>  
    </div>       
     </section>

      <?php
        include("footer.php");
        ?>
    <!-- Search model end -->

    <!-- Js Plugins -->
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